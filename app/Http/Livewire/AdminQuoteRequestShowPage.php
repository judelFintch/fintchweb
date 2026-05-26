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
    public string $estimated_amount = '';
    public string $follow_up_at = '';
    public string $admin_notes = '';
    public bool $saved = false;

    protected array $rules = [
        'status' => 'required|in:new,contacted,discussion,quote_sent,accepted,refused',
        'estimated_amount' => 'nullable|numeric|min:0|max:999999999',
        'follow_up_at' => 'nullable|date',
        'admin_notes' => 'nullable|max:5000',
    ];

    public function mount(QuoteRequest $quoteRequest): void
    {
        $this->quoteRequest = $quoteRequest;
        $this->status = $quoteRequest->status;
        $this->estimated_amount = $quoteRequest->estimated_amount !== null ? (string) $quoteRequest->estimated_amount : '';
        $this->follow_up_at = $quoteRequest->follow_up_at?->format('Y-m-d') ?? '';
        $this->admin_notes = (string) $quoteRequest->admin_notes;
    }

    public function save(): void
    {
        $this->validate();

        $this->quoteRequest->update([
            'status' => $this->status,
            'estimated_amount' => $this->estimated_amount !== '' ? $this->estimated_amount : null,
            'follow_up_at' => $this->follow_up_at !== '' ? $this->follow_up_at : null,
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
