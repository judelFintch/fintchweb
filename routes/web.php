<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminQuoteRequestExportController;
use App\Http\Livewire\HomePage;
use App\Http\Livewire\ContactPage;
use App\Http\Livewire\PortfolioPage;
use App\Http\Livewire\QuoteRequestPage;
use App\Http\Livewire\ServicePage;
use App\Http\Livewire\AdminLoginPage;
use App\Http\Livewire\AdminQuoteRequestsPage;
use App\Http\Livewire\AdminQuoteRequestShowPage;

Route::get('/', HomePage::class)->name('pages.home');
Route::get('/contact', ContactPage::class)->name('pages.contact');
Route::get('/portfolio', PortfolioPage::class)->name('pages.portfolio');
Route::get('/devis', QuoteRequestPage::class)->name('quote-requests.create');
Route::get('/services/{slug}', ServicePage::class)->name('services.show');
Route::redirect('/admin', '/admin/devis')->name('admin.home');

Route::middleware('guest')->group(function () {
    Route::get('/admin/login', AdminLoginPage::class)->name('admin.login');
});

Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {
    Route::get('/devis', AdminQuoteRequestsPage::class)->name('quotes.index');
    Route::get('/devis/export/csv', AdminQuoteRequestExportController::class)->name('quotes.export');
    Route::get('/devis/{quoteRequest}', AdminQuoteRequestShowPage::class)->name('quotes.show');
});
