<?php

namespace App\Http\Livewire;

use App\Models\QuoteRequest;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

#[Layout('layouts.admin')]
#[Title('Back-office devis - Fintch Web')]
class AdminQuoteRequestsPage extends Component
{
    use WithPagination;

    public string $search = '';
    public string $status = '';

    protected $queryString = [
        'search' => ['except' => ''],
        'status' => ['except' => ''],
    ];

    public function updatingSearch(): void
    {
        $this->resetPage();
    }

    public function updatingStatus(): void
    {
        $this->resetPage();
    }

    public function logout()
    {
        Auth::logout();
        session()->invalidate();
        session()->regenerateToken();

        return redirect()->route('admin.login');
    }

    public function render()
    {
        $quotes = QuoteRequest::query()
            ->when($this->status !== '', fn ($query) => $query->where('status', $this->status))
            ->when($this->search !== '', function ($query) {
                $query->where(function ($nested) {
                    $nested
                        ->where('name', 'like', '%'.$this->search.'%')
                        ->orWhere('email', 'like', '%'.$this->search.'%')
                        ->orWhere('phone', 'like', '%'.$this->search.'%')
                        ->orWhere('company', 'like', '%'.$this->search.'%')
                        ->orWhere('needs', 'like', '%'.$this->search.'%');
                });
            })
            ->latest()
            ->paginate(12);

        return view('admin.quotes.index', [
            'quotes' => $quotes,
            'statuses' => QuoteRequest::statuses(),
        ]);
    }
}
