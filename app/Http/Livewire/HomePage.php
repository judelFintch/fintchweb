<?php

namespace App\Http\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('layouts.app')]
#[Title('Fintch Web')]
class HomePage extends Component
{
    public function render()
    {
        return view('frontend.index');
    }
}
