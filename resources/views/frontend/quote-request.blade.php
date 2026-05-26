<div>
  <section class="pt-32 pb-16 bg-slate-950 text-white">
    <div class="mx-auto max-w-4xl px-5 text-center">
      <span class="inline-block px-4 py-1.5 text-xs font-semibold uppercase text-blue-300 bg-blue-500/10 border border-blue-500/20 rounded-full mb-6">
        Devis gratuit
      </span>
      <h1 class="text-4xl sm:text-5xl font-bold leading-tight mb-4">
        Expliquez votre besoin, on vous repond avec une proposition claire.
      </h1>
      <p class="text-white/60 text-lg max-w-2xl mx-auto">
        Votre demande est enregistree dans notre back-office et transmise directement par email a notre equipe.
      </p>
      @if($selected_pack)
        <div class="mt-6 inline-flex items-center gap-2 rounded-full border border-blue-400/30 bg-blue-500/10 px-4 py-2 text-sm text-blue-100">
          Pack selectionne : <strong>{{ $packs[$selected_pack] }}</strong>
        </div>
      @endif
    </div>
  </section>

  <section class="py-16 bg-white">
    <div class="mx-auto max-w-6xl px-5 sm:px-10 grid grid-cols-1 lg:grid-cols-5 gap-10">
      <aside class="lg:col-span-2 space-y-5">
        <div class="rounded-xl border border-gray-100 bg-gray-50 p-6">
          <h2 class="text-lg font-bold text-gray-900 mb-3">Ce que nous analysons</h2>
          <ul class="space-y-3 text-sm text-gray-600">
            <li>Type de projet et objectifs business.</li>
            <li>Fonctionnalites attendues et niveau de complexite.</li>
            <li>Budget, delai et priorites de lancement.</li>
            <li>Prochaine action pour cadrer le projet.</li>
          </ul>
        </div>

        <div class="rounded-xl border border-blue-100 bg-blue-50 p-6">
          <h3 class="font-semibold text-gray-900 mb-1">Reponse rapide</h3>
          <p class="text-sm text-gray-600">Nous revenons vers vous sous 24h ouvre avec les prochaines questions ou une estimation.</p>
        </div>
      </aside>

      <div class="lg:col-span-3">
        @if($sent)
          <div class="rounded-xl border border-green-100 bg-green-50 p-8 text-center">
            <div class="mx-auto w-14 h-14 rounded-full bg-green-100 flex items-center justify-center mb-5">
              <svg class="w-7 h-7 text-green-600" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/>
              </svg>
            </div>
            <h2 class="text-2xl font-bold text-gray-900 mb-2">Demande de devis recue</h2>
            <p class="text-gray-600 mb-6">Votre demande est bien enregistree. Notre equipe va la traiter dans le back-office.</p>
            <button wire:click="$set('sent', false)" class="px-6 py-3 rounded-xl bg-blue-600 hover:bg-blue-700 text-white font-semibold">
              Envoyer une autre demande
            </button>
          </div>
        @else
          <form wire:submit.prevent="submit" class="space-y-5">
            @if($selected_pack)
              <div class="rounded-xl border border-blue-100 bg-blue-50 p-4 text-sm text-blue-800">
                Le pack {{ $packs[$selected_pack] }} est deja associe a cette demande. Vous pouvez ajuster les champs avant l'envoi.
              </div>
            @endif

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
              <div>
                <label class="block text-sm font-medium text-gray-700 mb-1.5">Nom complet *</label>
                <input wire:model.live.debounce.300ms="name" type="text" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 outline-none text-sm">
                @error('name') <p class="mt-1 text-red-500 text-xs">{{ $message }}</p> @enderror
              </div>
              <div>
                <label class="block text-sm font-medium text-gray-700 mb-1.5">Email *</label>
                <input wire:model.live.debounce.300ms="email" type="email" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 outline-none text-sm">
                @error('email') <p class="mt-1 text-red-500 text-xs">{{ $message }}</p> @enderror
              </div>
            </div>

            <input wire:model="selected_pack" type="hidden">

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
              <div>
                <label class="block text-sm font-medium text-gray-700 mb-1.5">Telephone / WhatsApp</label>
                <input wire:model.live.debounce.300ms="phone" type="text" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 outline-none text-sm">
                @error('phone') <p class="mt-1 text-red-500 text-xs">{{ $message }}</p> @enderror
              </div>
              <div>
                <label class="block text-sm font-medium text-gray-700 mb-1.5">Entreprise</label>
                <input wire:model.live.debounce.300ms="company" type="text" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 outline-none text-sm">
                @error('company') <p class="mt-1 text-red-500 text-xs">{{ $message }}</p> @enderror
              </div>
            </div>

            <div>
              <label class="block text-sm font-medium text-gray-700 mb-1.5">Type de projet *</label>
              <select wire:model.live="project_type" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 outline-none text-sm bg-white">
                <option value="">Selectionner</option>
                @foreach($projectTypes as $value => $label)
                  <option value="{{ $value }}">{{ $label }}</option>
                @endforeach
              </select>
              @error('project_type') <p class="mt-1 text-red-500 text-xs">{{ $message }}</p> @enderror
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
              <div>
                <label class="block text-sm font-medium text-gray-700 mb-1.5">Budget estimatif</label>
                <select wire:model.live="budget" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 outline-none text-sm bg-white">
                  <option value="">Selectionner</option>
                  @foreach($budgets as $value => $label)
                    <option value="{{ $value }}">{{ $label }}</option>
                  @endforeach
                </select>
                @error('budget') <p class="mt-1 text-red-500 text-xs">{{ $message }}</p> @enderror
              </div>
              <div>
                <label class="block text-sm font-medium text-gray-700 mb-1.5">Delai souhaite</label>
                <select wire:model.live="deadline" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 outline-none text-sm bg-white">
                  <option value="">Selectionner</option>
                  @foreach($deadlines as $value => $label)
                    <option value="{{ $value }}">{{ $label }}</option>
                  @endforeach
                </select>
                @error('deadline') <p class="mt-1 text-red-500 text-xs">{{ $message }}</p> @enderror
              </div>
            </div>

            <div>
              <label class="block text-sm font-medium text-gray-700 mb-1.5">Besoins et objectifs *</label>
              <textarea wire:model.live.debounce.300ms="needs" rows="8" placeholder="Decrivez le projet, les pages ou fonctionnalites, vos contraintes et le resultat attendu." class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 outline-none text-sm resize-none"></textarea>
              @error('needs') <p class="mt-1 text-red-500 text-xs">{{ $message }}</p> @enderror
            </div>

            <button type="submit" class="w-full py-4 rounded-xl bg-blue-600 hover:bg-blue-700 text-white font-semibold flex items-center justify-center gap-2">
              <span wire:loading.remove>Envoyer la demande de devis</span>
              <span wire:loading>Envoi en cours...</span>
            </button>
          </form>
        @endif
      </div>
    </div>
  </section>
</div>
