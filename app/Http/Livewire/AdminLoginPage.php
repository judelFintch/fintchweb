<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('layouts.admin')]
#[Title('Connexion admin - Fintch Web')]
class AdminLoginPage extends Component
{
    public string $email = '';
    public string $password = '';
    public bool $remember = false;

    protected array $rules = [
        'email' => 'required|email',
        'password' => 'required',
    ];

    public function login()
    {
        $this->validate();

        if (! Auth::attempt(['email' => $this->email, 'password' => $this->password], $this->remember)) {
            $this->addError('email', 'Identifiants incorrects.');

            return null;
        }

        session()->regenerate();

        return redirect()->intended(route('admin.quotes.index'));
    }

    public function render()
    {
        return view('admin.auth.login');
    }
}
