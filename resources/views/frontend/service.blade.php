<div>
  <section class="pt-32 pb-16 bg-slate-950 text-white">
    <div class="mx-auto max-w-4xl px-5 text-center">
      <span class="inline-block px-4 py-1.5 text-xs font-semibold uppercase text-blue-300 bg-blue-500/10 border border-blue-500/20 rounded-full mb-6">
        Service Fintch Web
      </span>
      <h1 class="text-4xl sm:text-5xl font-bold leading-tight mb-4">{{ $service['title'] }}</h1>
      <p class="text-white/60 text-lg max-w-2xl mx-auto">{{ $service['summary'] }}</p>
      <div class="mt-8 flex flex-col sm:flex-row justify-center gap-3">
        <a href="/devis?project_type={{ $service['project_type'] }}&budget={{ $service['budget'] }}" class="inline-flex items-center justify-center bg-blue-600 hover:bg-blue-500 text-white font-semibold px-7 py-3.5 rounded-full text-sm">
          Demander un devis
        </a>
        <a href="/portfolio" class="inline-flex items-center justify-center border border-white/20 hover:border-white/40 text-white/80 hover:text-white font-semibold px-7 py-3.5 rounded-full text-sm">
          Voir nos projets
        </a>
      </div>
    </div>
  </section>

  <section class="py-16 bg-white">
    <div class="mx-auto max-w-5xl px-5 sm:px-10 grid grid-cols-1 lg:grid-cols-3 gap-8">
      <div class="lg:col-span-2">
        <h2 class="text-3xl font-bold text-gray-900 mb-5">Ce qui est inclus</h2>
        <div class="grid sm:grid-cols-2 gap-4">
          @foreach($service['items'] as $item)
            <div class="rounded-xl border border-gray-100 bg-gray-50 p-5 flex gap-3">
              <div class="w-6 h-6 rounded-full bg-blue-100 text-blue-600 flex items-center justify-center flex-shrink-0">
                <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
              </div>
              <p class="text-sm font-semibold text-gray-700">{{ $item }}</p>
            </div>
          @endforeach
        </div>
      </div>

      <aside class="rounded-xl border border-blue-100 bg-blue-50 p-6 h-fit">
        <h3 class="font-bold text-gray-900 mb-2">Besoin d'une estimation ?</h3>
        <p class="text-sm text-gray-600 mb-5">Envoyez-nous vos objectifs, votre delai et vos contraintes. On vous repond avec une proposition claire.</p>
        <a href="/devis?project_type={{ $service['project_type'] }}&budget={{ $service['budget'] }}" class="block text-center rounded-xl bg-blue-600 hover:bg-blue-700 text-white font-semibold px-5 py-3">
          Obtenir un devis
        </a>
      </aside>
    </div>
  </section>
</div>
