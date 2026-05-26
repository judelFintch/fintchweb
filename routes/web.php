<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\HomePage;
use App\Http\Livewire\ContactPage;
use App\Http\Livewire\PortfolioPage;

Route::get('/', HomePage::class)->name('pages.home');
Route::get('/contact', ContactPage::class)->name('pages.contact');
Route::get('/portfolio', PortfolioPage::class)->name('pages.portfolio');
