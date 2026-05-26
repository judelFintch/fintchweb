<div class="min-h-screen">
  <header class="bg-white border-b border-slate-200">
    <div class="mx-auto max-w-7xl px-5 py-5 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
      <div>
        <p class="text-sm text-slate-500">Back-office</p>
        <h1 class="text-2xl font-bold text-slate-950">Demandes de devis</h1>
      </div>
      <div class="flex items-center gap-3">
        <a href="/" class="px-4 py-2 rounded-lg border border-slate-200 text-sm font-semibold text-slate-600 hover:bg-slate-50">Site</a>
        <button wire:click="logout" class="px-4 py-2 rounded-lg bg-slate-900 text-white text-sm font-semibold hover:bg-slate-800">Deconnexion</button>
      </div>
    </div>
  </header>

  <main class="mx-auto max-w-7xl px-5 py-8">
    <div class="bg-white border border-slate-200 rounded-xl p-5 mb-6">
      <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        <div class="md:col-span-2">
          <label class="block text-xs font-semibold text-slate-500 uppercase mb-1.5">Recherche</label>
          <input wire:model.live.debounce.300ms="search" type="search" placeholder="Nom, email, telephone, entreprise ou besoin" class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 outline-none text-sm">
        </div>
        <div>
          <label class="block text-xs font-semibold text-slate-500 uppercase mb-1.5">Statut</label>
          <select wire:model.live="status" class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 outline-none text-sm bg-white">
            <option value="">Tous les statuts</option>
            @foreach($statuses as $value => $label)
              <option value="{{ $value }}">{{ $label }}</option>
            @endforeach
          </select>
        </div>
      </div>
    </div>

    <div class="bg-white border border-slate-200 rounded-xl overflow-hidden">
      <div class="overflow-x-auto">
        <table class="min-w-full divide-y divide-slate-200">
          <thead class="bg-slate-50">
            <tr>
              <th class="px-5 py-3 text-left text-xs font-semibold uppercase text-slate-500">Client</th>
              <th class="px-5 py-3 text-left text-xs font-semibold uppercase text-slate-500">Projet</th>
              <th class="px-5 py-3 text-left text-xs font-semibold uppercase text-slate-500">Statut</th>
              <th class="px-5 py-3 text-left text-xs font-semibold uppercase text-slate-500">Notification</th>
              <th class="px-5 py-3 text-left text-xs font-semibold uppercase text-slate-500">Date</th>
              <th class="px-5 py-3"></th>
            </tr>
          </thead>
          <tbody class="divide-y divide-slate-100">
            @forelse($quotes as $quote)
              <tr class="hover:bg-slate-50">
                <td class="px-5 py-4">
                  <div class="font-semibold text-slate-900">{{ $quote->name }}</div>
                  <div class="text-sm text-slate-500">{{ $quote->email }}</div>
                  @if($quote->phone)
                    <div class="text-xs text-slate-400">{{ $quote->phone }}</div>
                  @endif
                </td>
                <td class="px-5 py-4">
                  <div class="text-sm font-medium text-slate-800">{{ $quote->project_type_label }}</div>
                  <div class="text-xs text-slate-500">{{ $quote->budget_label ?: 'Budget non precise' }}</div>
                </td>
                <td class="px-5 py-4">
                  <span class="inline-flex px-2.5 py-1 rounded-full bg-blue-50 text-blue-700 text-xs font-semibold">{{ $quote->status_label }}</span>
                </td>
                <td class="px-5 py-4 text-sm">
                  @if($quote->notification_failed_at)
                    <span class="text-red-600 font-medium">Email echoue</span>
                  @elseif($quote->admin_notified_at)
                    <span class="text-green-600 font-medium">Envoye</span>
                  @else
                    <span class="text-slate-400">En attente</span>
                  @endif
                </td>
                <td class="px-5 py-4 text-sm text-slate-500">{{ $quote->created_at->format('d/m/Y H:i') }}</td>
                <td class="px-5 py-4 text-right">
                  <a href="{{ route('admin.quotes.show', $quote) }}" class="text-sm font-semibold text-blue-600 hover:text-blue-700">Ouvrir</a>
                </td>
              </tr>
            @empty
              <tr>
                <td colspan="6" class="px-5 py-12 text-center text-slate-500">Aucune demande trouvee.</td>
              </tr>
            @endforelse
          </tbody>
        </table>
      </div>
    </div>

    <div class="mt-6">
      {{ $quotes->links() }}
    </div>
  </main>
</div>
