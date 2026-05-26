<?php

namespace App\Http\Livewire;

use App\Mail\NewQuoteRequestMail;
use App\Mail\QuoteRequestReceivedMail;
use App\Models\QuoteRequest;
use Illuminate\Support\Facades\Mail;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
use Throwable;

#[Layout('layouts.app')]
#[Title('Demande de devis - Fintch Web')]
class QuoteRequestPage extends Component
{
    public string $name = '';
    public string $email = '';
    public string $phone = '';
    public string $company = '';
    public string $project_type = '';
    public string $budget = '';
    public string $deadline = '';
    public string $needs = '';
    public string $selected_pack = '';
    public bool $sent = false;

    protected array $rules = [
        'name' => 'required|min:2|max:100',
        'email' => 'required|email|max:200',
        'phone' => 'nullable|max:50',
        'company' => 'nullable|max:150',
        'project_type' => 'required|in:site-vitrine,e-commerce,application-web,logiciel-metier,refonte,maintenance,camera-surveillance,autre',
        'budget' => 'nullable|in:moins-500,500-1000,1000-3000,3000-5000,plus-5000,a-definir',
        'deadline' => 'nullable|in:urgent,1-mois,2-3-mois,flexible',
        'needs' => 'required|min:20|max:5000',
        'selected_pack' => 'nullable|in:starter,pro,enterprise',
    ];

    protected array $messages = [
        'name.required' => 'Votre nom est requis.',
        'email.required' => 'Votre adresse email est requise.',
        'email.email' => 'Adresse email invalide.',
        'project_type.required' => 'Choisissez un type de projet.',
        'needs.required' => 'Decrivez vos besoins.',
        'needs.min' => 'Ajoutez au moins 20 caracteres pour expliquer votre besoin.',
    ];

    public function mount(): void
    {
        $pack = (string) request()->query('pack', '');

        if (array_key_exists($pack, QuoteRequest::packs())) {
            $defaults = QuoteRequest::packDefaults()[$pack];

            $this->selected_pack = $pack;
            $this->project_type = $defaults['project_type'];
            $this->budget = $defaults['budget'];
            $this->needs = $defaults['needs'];

            return;
        }

        $projectType = (string) request()->query('project_type', '');
        $budget = (string) request()->query('budget', '');

        if (array_key_exists($projectType, QuoteRequest::projectTypes())) {
            $this->project_type = $projectType;
        }

        if (array_key_exists($budget, QuoteRequest::budgets())) {
            $this->budget = $budget;
        }
    }

    public function submit(): void
    {
        $data = $this->validate();

        $quoteRequest = QuoteRequest::create($data);

        try {
            Mail::to(config('mail.admin_address'))->send(new NewQuoteRequestMail($quoteRequest));
            $quoteRequest->forceFill(['admin_notified_at' => now()])->save();

            Mail::to($quoteRequest->email)->send(new QuoteRequestReceivedMail($quoteRequest));
            $quoteRequest->forceFill(['client_notified_at' => now()])->save();
        } catch (Throwable $exception) {
            report($exception);

            $quoteRequest->forceFill([
                'notification_failed_at' => now(),
                'notification_error' => $exception->getMessage(),
            ])->save();
        }

        $this->reset(['name', 'email', 'phone', 'company', 'project_type', 'budget', 'deadline', 'needs', 'selected_pack']);
        $this->sent = true;
    }

    public function render()
    {
        return view('frontend.quote-request', [
            'projectTypes' => QuoteRequest::projectTypes(),
            'budgets' => QuoteRequest::budgets(),
            'deadlines' => QuoteRequest::deadlines(),
            'packs' => QuoteRequest::packs(),
        ]);
    }
}
