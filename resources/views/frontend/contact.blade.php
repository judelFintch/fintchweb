<div>
  {{-- Hero --}}
  <section class="pt-32 pb-16 bg-gradient-to-b from-slate-950 to-slate-900 text-white">
    <div class="mx-auto max-w-3xl px-5 text-center">
      <span class="inline-block px-4 py-1.5 text-xs font-semibold tracking-widest uppercase text-blue-400 bg-blue-500/10 border border-blue-500/20 rounded-full mb-6" data-aos="fade-up">
        Contactez-nous
      </span>
      <h1 class="text-4xl sm:text-5xl font-bold leading-tight mb-4" data-aos="fade-up" data-aos-delay="100">
        Parlons de votre
        <span class="gradient-span"> projet</span>
      </h1>
      <p class="text-white/60 text-lg" data-aos="fade-up" data-aos-delay="200">
        Une idée, un projet, une question ? Notre équipe répond sous 24h.
      </p>
    </div>
  </section>

  {{-- Main --}}
  <section class="py-20 bg-white">
    <div class="mx-auto md:max-w-5xl lg:max-w-6xl px-5 sm:px-10 grid grid-cols-1 lg:grid-cols-5 gap-12">

      {{-- Info cards --}}
      <div class="lg:col-span-2 space-y-6" data-aos="fade-right">
        <div class="rounded-2xl border border-gray-100 bg-gray-50 p-6">
          <div class="w-10 h-10 rounded-xl bg-blue-100 flex items-center justify-center mb-4">
            <svg class="w-5 h-5 text-blue-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75"/>
            </svg>
          </div>
          <h3 class="font-semibold text-gray-900 mb-1">Email</h3>
          <p class="text-gray-500 text-sm">contact@fintchweb.com</p>
        </div>

        <div class="rounded-2xl border border-gray-100 bg-gray-50 p-6">
          <div class="w-10 h-10 rounded-xl bg-green-100 flex items-center justify-center mb-4">
            <svg class="w-5 h-5 text-green-600" fill="currentColor" viewBox="0 0 16 16">
              <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326z"/>
            </svg>
          </div>
          <h3 class="font-semibold text-gray-900 mb-1">WhatsApp</h3>
          <a href="https://call.whatsapp.com/voice/wFeqG3KGDt4jpN1yFe8zPG"
             class="text-green-600 text-sm font-medium hover:underline">
            Appeler directement →
          </a>
        </div>

        <div class="rounded-2xl border border-gray-100 bg-gray-50 p-6">
          <div class="w-10 h-10 rounded-xl bg-purple-100 flex items-center justify-center mb-4">
            <svg class="w-5 h-5 text-purple-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z"/>
            </svg>
          </div>
          <h3 class="font-semibold text-gray-900 mb-1">Délai de réponse</h3>
          <p class="text-gray-500 text-sm">Réponse garantie sous 24h ouvrées.</p>
        </div>
      </div>

      {{-- Form --}}
      <div class="lg:col-span-3" data-aos="fade-left">
        @if($sent)
          <div class="flex flex-col items-center justify-center text-center py-20">
            <div class="w-16 h-16 rounded-full bg-green-100 flex items-center justify-center mb-6">
              <svg class="w-8 h-8 text-green-600" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/>
              </svg>
            </div>
            <h2 class="text-2xl font-bold text-gray-900 mb-2">Message envoyé !</h2>
            <p class="text-gray-500 mb-8">Nous vous répondrons dans les 24 heures.</p>
            <button wire:click="$set('sent', false)"
                    class="px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white font-medium rounded-xl transition-colors duration-200">
              Envoyer un autre message
            </button>
          </div>
        @else
          <form wire:submit.prevent="send" class="space-y-5">
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
              <div>
                <label class="block text-sm font-medium text-gray-700 mb-1.5">Votre nom *</label>
                <input wire:model.live.debounce.300ms="name"
                       type="text"
                       placeholder="Jean Dupont"
                       class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 outline-none transition-all duration-200 text-gray-900 text-sm">
                @error('name') <p class="mt-1 text-red-500 text-xs">{{ $message }}</p> @enderror
              </div>
              <div>
                <label class="block text-sm font-medium text-gray-700 mb-1.5">Email *</label>
                <input wire:model.live.debounce.300ms="email"
                       type="email"
                       placeholder="jean@exemple.com"
                       class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 outline-none transition-all duration-200 text-gray-900 text-sm">
                @error('email') <p class="mt-1 text-red-500 text-xs">{{ $message }}</p> @enderror
              </div>
            </div>

            <div>
              <label class="block text-sm font-medium text-gray-700 mb-1.5">Objet *</label>
              <input wire:model.live.debounce.300ms="subject"
                     type="text"
                     placeholder="Création d'un site e-commerce"
                     class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 outline-none transition-all duration-200 text-gray-900 text-sm">
              @error('subject') <p class="mt-1 text-red-500 text-xs">{{ $message }}</p> @enderror
            </div>

            <div>
              <label class="block text-sm font-medium text-gray-700 mb-1.5">Message *</label>
              <textarea wire:model.live.debounce.300ms="message"
                        rows="6"
                        placeholder="Décrivez votre projet, vos besoins, votre budget estimatif..."
                        class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 outline-none transition-all duration-200 text-gray-900 text-sm resize-none"></textarea>
              @error('message') <p class="mt-1 text-red-500 text-xs">{{ $message }}</p> @enderror
            </div>

            <button type="submit"
                    class="w-full py-4 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-xl transition-all duration-200 flex items-center justify-center gap-2">
              <span wire:loading.remove>Envoyer le message</span>
              <span wire:loading class="flex items-center gap-2">
                <svg class="w-4 h-4 animate-spin" fill="none" viewBox="0 0 24 24">
                  <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                  <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4z"></path>
                </svg>
                Envoi en cours...
              </span>
              <svg wire:loading.remove class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 12L3.269 3.126A59.768 59.768 0 0121.485 12 59.77 59.77 0 013.27 20.876L5.999 12zm0 0h7.5"/>
              </svg>
            </button>

            <p class="text-xs text-gray-400 text-center">
              En soumettant ce formulaire, vous acceptez notre
              <a href="#" class="text-blue-500 hover:underline">politique de confidentialité</a>.
            </p>
          </form>
        @endif
      </div>
    </div>
  </section>
</div>
