<?php

namespace App\Http\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('layouts.app')]
#[Title('Contact — Fintch Web')]
class ContactPage extends Component
{
    public string $name = '';
    public string $email = '';
    public string $subject = '';
    public string $message = '';
    public bool $sent = false;

    protected array $rules = [
        'name'    => 'required|min:2|max:100',
        'email'   => 'required|email|max:200',
        'subject' => 'required|min:3|max:150',
        'message' => 'required|min:10|max:2000',
    ];

    protected array $messages = [
        'name.required'    => 'Votre nom est requis.',
        'name.min'         => 'Le nom doit contenir au moins 2 caractères.',
        'email.required'   => 'Votre adresse email est requise.',
        'email.email'      => 'Adresse email invalide.',
        'subject.required' => 'L\'objet du message est requis.',
        'message.required' => 'Votre message est requis.',
        'message.min'      => 'Le message doit contenir au moins 10 caractères.',
    ];

    public function send(): void
    {
        $this->validate();

        // TODO: wire up mail sending (Mail::to(...)->send(...))

        $this->reset(['name', 'email', 'subject', 'message']);
        $this->sent = true;
    }

    public function render()
    {
        return view('frontend.contact');
    }
}
