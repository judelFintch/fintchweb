<h1>Nouvelle demande de devis</h1>

<p><strong>Client:</strong> {{ $quoteRequest->name }}</p>
<p><strong>Email:</strong> {{ $quoteRequest->email }}</p>
<p><strong>Telephone:</strong> {{ $quoteRequest->phone ?: 'Non precise' }}</p>
<p><strong>Entreprise:</strong> {{ $quoteRequest->company ?: 'Non precisee' }}</p>
<p><strong>Pack:</strong> {{ $quoteRequest->selected_pack ? (\App\Models\QuoteRequest::packs()[$quoteRequest->selected_pack] ?? $quoteRequest->selected_pack) : 'Non precise' }}</p>
<p><strong>Projet:</strong> {{ $quoteRequest->project_type_label }}</p>
<p><strong>Budget:</strong> {{ $quoteRequest->budget_label ?: 'Non precise' }}</p>
<p><strong>Delai:</strong> {{ $quoteRequest->deadline_label ?: 'Non precise' }}</p>

<h2>Besoins</h2>
<p style="white-space: pre-line;">{{ $quoteRequest->needs }}</p>

<p>
  <a href="{{ route('admin.quotes.show', $quoteRequest) }}">Ouvrir dans le back-office</a>
</p>
