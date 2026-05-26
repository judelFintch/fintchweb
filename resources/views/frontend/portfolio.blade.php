<div>
  {{-- Hero --}}
  <section class="pt-32 pb-16 bg-gradient-to-b from-slate-950 to-slate-900 text-white">
    <div class="mx-auto max-w-3xl px-5 text-center">
      <span class="inline-block px-4 py-1.5 text-xs font-semibold tracking-widest uppercase text-blue-400 bg-blue-500/10 border border-blue-500/20 rounded-full mb-6" data-aos="fade-up">
        Nos réalisations
      </span>
      <h1 class="text-4xl sm:text-5xl font-bold leading-tight mb-4" data-aos="fade-up" data-aos-delay="100">
        Un portfolio qui
        <span class="gradient-span"> parle pour nous</span>
      </h1>
      <p class="text-white/60 text-lg" data-aos="fade-up" data-aos-delay="200">
        Sites web, logiciels métier, applications mobiles, e-commerce — chaque projet livré avec soin.
      </p>
    </div>
  </section>

  {{-- Filters --}}
  <section class="py-8 bg-white border-b border-gray-100 sticky top-0 z-30 shadow-sm">
    <div class="mx-auto md:max-w-5xl lg:max-w-7xl px-5 sm:px-10">
      <div class="flex flex-wrap gap-2 justify-center">
        @foreach($categories as $cat)
          <button wire:click="setCategory('{{ $cat }}')"
                  class="{{ $activeCategory === $cat
                    ? 'bg-blue-600 text-white shadow-md shadow-blue-600/30'
                    : 'bg-gray-100 text-gray-600 hover:bg-gray-200' }}
                    px-5 py-2 rounded-full text-sm font-medium transition-all duration-200 capitalize">
            @if($cat === 'all')
              Tous les projets
            @elseif($cat === 'logiciel')
              Logiciel
            @elseif($cat === 'web')
              Site Web
            @elseif($cat === 'mobile')
              Mobile
            @elseif($cat === 'ecommerce')
              E-commerce
            @elseif($cat === 'design')
              Design
            @endif
          </button>
        @endforeach
      </div>
    </div>
  </section>

  {{-- Grid --}}
  <section class="py-16 bg-gray-50 min-h-screen">
    <div class="mx-auto md:max-w-5xl lg:max-w-7xl px-5 sm:px-10">
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach($filteredProjects as $i => $project)
          <div class="group bg-white rounded-2xl overflow-hidden border border-gray-100 hover:shadow-2xl hover:-translate-y-2 transition-all duration-400"
               data-aos="fade-up"
               data-aos-delay="{{ ($i % 3) * 100 }}">

            {{-- Visual : screenshot réel ou gradient placeholder --}}
            <div class="relative h-52 overflow-hidden bg-gradient-to-br {{ $project['color'] }}">
              @if($project['image'])
                <img src="{{ asset('assets/' . $project['image']) }}"
                     alt="Capture {{ $project['title'] }}"
                     class="w-full h-full object-cover object-top group-hover:scale-105 transition-transform duration-500">
                <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent"></div>
              @else
                <div class="absolute inset-0 flex items-center justify-center">
                  <span class="text-6xl font-black text-white/15 select-none tracking-tighter">
                    {{ strtoupper(substr($project['title'], 0, 2)) }}
                  </span>
                </div>
                <div class="absolute inset-0 bg-black/0 group-hover:bg-black/10 transition-colors duration-300"></div>
              @endif

              {{-- Badges --}}
              <div class="absolute top-3 left-3 flex gap-2">
                @if($project['real'])
                  <span class="px-2.5 py-1 text-xs font-bold text-white bg-green-500 rounded-full flex items-center gap-1">
                    <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                    Réalisé
                  </span>
                @endif
                <span class="px-2.5 py-1 text-xs font-semibold text-white bg-white/20 backdrop-blur-sm rounded-full capitalize">
                  @if($project['category'] === 'logiciel') Logiciel
                  @elseif($project['category'] === 'web') Site Web
                  @elseif($project['category'] === 'mobile') Mobile
                  @elseif($project['category'] === 'ecommerce') E-commerce
                  @elseif($project['category'] === 'design') Design
                  @else {{ $project['category'] }}
                  @endif
                </span>
              </div>

              {{-- Bouton vert "Voir le site" au survol --}}
              @if($project['url'])
                <a href="{{ $project['url'] }}" target="_blank" rel="noopener"
                   class="absolute bottom-4 left-1/2 -translate-x-1/2 opacity-0 group-hover:opacity-100 translate-y-2 group-hover:translate-y-0 transition-all duration-300
                          flex items-center gap-2 bg-green-500 hover:bg-green-400 text-white text-xs font-bold px-4 py-2 rounded-full shadow-lg whitespace-nowrap">
                  <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 6H5.25A2.25 2.25 0 003 8.25v10.5A2.25 2.25 0 005.25 21h10.5A2.25 2.25 0 0018 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25"/>
                  </svg>
                  Visiter le site
                </a>
              @endif
            </div>

            {{-- Content --}}
            <div class="p-6">
              <h3 class="font-bold text-gray-900 text-xl mb-2">{{ $project['title'] }}</h3>
              <p class="text-gray-500 text-sm leading-relaxed mb-4">{{ $project['desc'] }}</p>
              <div class="flex flex-wrap gap-2 mb-4">
                @foreach($project['tags'] as $tag)
                  <span class="px-3 py-1 text-xs font-medium text-blue-700 bg-blue-50 rounded-full">{{ $tag }}</span>
                @endforeach
              </div>
              @if($project['url'])
                <a href="{{ $project['url'] }}" target="_blank" rel="noopener"
                   class="inline-flex items-center gap-2 text-xs font-bold text-white bg-green-500 hover:bg-green-600 px-4 py-2 rounded-full transition-colors shadow-sm">
                  <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 19.5l15-15m0 0H8.25m11.25 0v11.25"/>
                  </svg>
                  Voir le site
                </a>
              @endif
            </div>
          </div>
        @endforeach
      </div>

      @if(count($filteredProjects) === 0)
        <div class="text-center py-24 text-gray-400">
          <svg class="w-14 h-14 mx-auto mb-5 opacity-30" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z"/>
          </svg>
          <p class="text-xl font-medium">Aucun projet dans cette catégorie pour l'instant.</p>
        </div>
      @endif
    </div>
  </section>

  {{-- CTA --}}
  <section class="py-24 bg-gradient-to-r from-blue-600 to-indigo-700 text-white text-center">
    <div class="mx-auto max-w-2xl px-5" data-aos="zoom-in">
      <h2 class="text-3xl sm:text-4xl font-bold mb-4">Votre projet sera le prochain</h2>
      <p class="text-white/80 mb-10 text-lg">Discutons de vos ambitions et construisons quelque chose d'exceptionnel.</p>
      <a href="/contact"
         class="inline-flex items-center gap-2 px-8 py-4 bg-white text-blue-700 font-semibold rounded-xl hover:bg-blue-50 transition-colors duration-200 shadow-xl">
        Démarrer un projet
        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/>
        </svg>
      </a>
    </div>
  </section>
</div>
