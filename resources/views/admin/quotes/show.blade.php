<div class="min-h-screen">
  <header class="bg-white border-b border-slate-200">
    <div class="mx-auto max-w-5xl px-5 py-5 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
      <div>
        <a href="{{ route('admin.quotes.index') }}" class="text-sm font-semibold text-blue-600 hover:text-blue-700">Retour aux devis</a>
        <h1 class="text-2xl font-bold text-slate-950 mt-1">{{ $quoteRequest->name }}</h1>
      </div>
      <span class="inline-flex px-3 py-1.5 rounded-full bg-blue-50 text-blue-700 text-sm font-semibold">{{ $quoteRequest->status_label }}</span>
    </div>
  </header>

  <main class="mx-auto max-w-5xl px-5 py-8 grid grid-cols-1 lg:grid-cols-3 gap-6">
    <section class="lg:col-span-2 space-y-6">
      <div class="bg-white border border-slate-200 rounded-xl p-6">
        <h2 class="text-lg font-bold text-slate-950 mb-5">Besoin client</h2>
        <dl class="grid grid-cols-1 sm:grid-cols-2 gap-5 text-sm mb-6">
          <div>
            <dt class="text-slate-500">Type de projet</dt>
            <dd class="font-semibold text-slate-900">{{ $quoteRequest->project_type_label }}</dd>
          </div>
          @if($quoteRequest->selected_pack)
            <div>
              <dt class="text-slate-500">Pack</dt>
              <dd class="font-semibold text-slate-900">{{ \App\Models\QuoteRequest::packs()[$quoteRequest->selected_pack] ?? $quoteRequest->selected_pack }}</dd>
            </div>
          @endif
          <div>
            <dt class="text-slate-500">Budget</dt>
            <dd class="font-semibold text-slate-900">{{ $quoteRequest->budget_label ?: 'Non precise' }}</dd>
          </div>
          <div>
            <dt class="text-slate-500">Delai</dt>
            <dd class="font-semibold text-slate-900">{{ $quoteRequest->deadline_label ?: 'Non precise' }}</dd>
          </div>
          <div>
            <dt class="text-slate-500">Date</dt>
            <dd class="font-semibold text-slate-900">{{ $quoteRequest->created_at->format('d/m/Y H:i') }}</dd>
          </div>
        </dl>
        <div class="prose max-w-none">
          <p class="whitespace-pre-line text-slate-700 leading-relaxed">{{ $quoteRequest->needs }}</p>
        </div>
      </div>

      <div class="bg-white border border-slate-200 rounded-xl p-6">
        <h2 class="text-lg font-bold text-slate-950 mb-5">Traitement interne</h2>
        @if($saved)
          <div class="mb-4 rounded-lg bg-green-50 border border-green-100 text-green-700 px-4 py-3 text-sm font-medium">Modifications enregistrees.</div>
        @endif
        <form wire:submit.prevent="save" class="space-y-5">
          <div>
            <label class="block text-sm font-medium text-slate-700 mb-1.5">Statut</label>
            <select wire:model.live="status" class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 outline-none text-sm bg-white">
              @foreach($statuses as $value => $label)
                <option value="{{ $value }}">{{ $label }}</option>
              @endforeach
            </select>
            @error('status') <p class="mt-1 text-red-500 text-xs">{{ $message }}</p> @enderror
          </div>
          <div>
            <label class="block text-sm font-medium text-slate-700 mb-1.5">Montant estime USD</label>
            <input wire:model.live.debounce.300ms="estimated_amount" type="number" min="0" step="0.01" class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 outline-none text-sm">
            @error('estimated_amount') <p class="mt-1 text-red-500 text-xs">{{ $message }}</p> @enderror
          </div>
          <div>
            <label class="block text-sm font-medium text-slate-700 mb-1.5">Date de relance</label>
            <input wire:model.live="follow_up_at" type="date" class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 outline-none text-sm">
            @error('follow_up_at') <p class="mt-1 text-red-500 text-xs">{{ $message }}</p> @enderror
          </div>
          <div>
            <label class="block text-sm font-medium text-slate-700 mb-1.5">Notes internes</label>
            <textarea wire:model.live.debounce.300ms="admin_notes" rows="7" class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 outline-none text-sm resize-none"></textarea>
            @error('admin_notes') <p class="mt-1 text-red-500 text-xs">{{ $message }}</p> @enderror
          </div>
          <button type="submit" class="px-5 py-3 rounded-xl bg-blue-600 hover:bg-blue-700 text-white font-semibold">Enregistrer</button>
        </form>
      </div>
    </section>

    <aside class="space-y-6">
      <div class="bg-white border border-slate-200 rounded-xl p-6">
        <h2 class="text-lg font-bold text-slate-950 mb-5">Client</h2>
        <div class="space-y-4 text-sm">
          <div class="grid grid-cols-1 gap-2">
            <a href="mailto:{{ $quoteRequest->email }}?subject=Votre demande de devis Fintch Web" class="inline-flex justify-center px-4 py-2.5 rounded-lg bg-blue-600 text-white font-semibold hover:bg-blue-700">Repondre par email</a>
            @if($quoteRequest->phone)
              <a href="https://wa.me/{{ preg_replace('/\D+/', '', $quoteRequest->phone) }}" target="_blank" rel="noopener" class="inline-flex justify-center px-4 py-2.5 rounded-lg bg-green-600 text-white font-semibold hover:bg-green-700">Contacter WhatsApp</a>
            @endif
          </div>
          <div>
            <div class="text-slate-500">Email</div>
            <a href="mailto:{{ $quoteRequest->email }}" class="font-semibold text-blue-600 hover:text-blue-700">{{ $quoteRequest->email }}</a>
          </div>
          @if($quoteRequest->phone)
            <div>
              <div class="text-slate-500">Telephone</div>
              <a href="tel:{{ $quoteRequest->phone }}" class="font-semibold text-slate-900">{{ $quoteRequest->phone }}</a>
            </div>
          @endif
          @if($quoteRequest->company)
            <div>
              <div class="text-slate-500">Entreprise</div>
              <div class="font-semibold text-slate-900">{{ $quoteRequest->company }}</div>
            </div>
          @endif
        </div>
      </div>

      <div class="bg-white border border-slate-200 rounded-xl p-6">
        <h2 class="text-lg font-bold text-slate-950 mb-5">Notifications</h2>
        <div class="space-y-3 text-sm">
          <p>Admin: <span class="font-semibold">{{ $quoteRequest->admin_notified_at ? $quoteRequest->admin_notified_at->format('d/m/Y H:i') : 'Non envoye' }}</span></p>
          <p>Client: <span class="font-semibold">{{ $quoteRequest->client_notified_at ? $quoteRequest->client_notified_at->format('d/m/Y H:i') : 'Non envoye' }}</span></p>
          @if($quoteRequest->notification_failed_at)
            <div class="rounded-lg bg-red-50 border border-red-100 text-red-700 p-3">
              <div class="font-semibold">Erreur email</div>
              <p class="mt-1 break-words">{{ $quoteRequest->notification_error }}</p>
            </div>
          @endif
        </div>
      </div>
    </aside>
  </main>
</div>
