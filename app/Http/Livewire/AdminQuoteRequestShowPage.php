<?php

namespace App\Http\Livewire;

use App\Models\QuoteRequest;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('layouts.admin')]
#[Title('Detail devis - Fintch Web')]
class AdminQuoteRequestShowPage extends Component
{
    public QuoteRequest $quoteRequest;
    public string $status = '';
    public string $admin_notes = '';
    public bool $saved = false;

    protected array $rules = [
        'status' => 'required|in:new,contacted,discussion,accepted,refused',
        'admin_notes' => 'nullable|max:5000',
    ];

    public function mount(QuoteRequest $quoteRequest): void
    {
        $this->quoteRequest = $quoteRequest;
        $this->status = $quoteRequest->status;
        $this->admin_notes = (string) $quoteRequest->admin_notes;
    }

    public function save(): void
    {
        $this->validate();

        $this->quoteRequest->update([
            'status' => $this->status,
            'admin_notes' => $this->admin_notes,
        ]);

        $this->quoteRequest->refresh();
        $this->saved = true;
    }

    public function render()
    {
        return view('admin.quotes.show', [
            'statuses' => QuoteRequest::statuses(),
        ]);
    }
}
