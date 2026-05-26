<div>
<div data-overlay class="fixed bg-gray-900/60 backdrop-blur-sm inset-0 z-50 lg:hidden invisible opacity-0 transition-all ease-linear duration-300"></div>

{{-- ═══════════════════════════════════════════
    HERO — centré, sombre, impactant
═══════════════════════════════════════════ --}}
<section class="relative flex items-center justify-center min-h-screen overflow-hidden bg-[#0a0f1e]">
  {{-- Blobs décoratifs --}}
  <div class="absolute inset-0 pointer-events-none">
    <div class="absolute top-[-10%] left-[-5%] w-[500px] h-[500px] bg-blue-600/20 rounded-full blur-[120px]"></div>
    <div class="absolute bottom-[-10%] right-[-5%] w-[400px] h-[400px] bg-purple-600/20 rounded-full blur-[120px]"></div>
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[300px] bg-indigo-600/10 rounded-full blur-[100px]"></div>
    {{-- Grille dots --}}
    <div class="absolute inset-0 opacity-[0.03]" style="background-image:radial-gradient(circle,#fff 1px,transparent 1px);background-size:32px 32px"></div>
  </div>

  <div class="relative w-full mx-auto max-w-6xl px-5 sm:px-10 lg:px-8 py-28 text-center">
    {{-- Badge --}}
    <div class="inline-flex items-center gap-2 border border-white/15 bg-white/5 backdrop-blur-sm rounded-full px-4 py-1.5 mb-7">
      <span class="w-1.5 h-1.5 bg-emerald-400 rounded-full animate-pulse"></span>
      <span class="text-xs font-medium text-white/70 tracking-wide">Disponible pour nouveaux projets</span>
    </div>

    {{-- Titre --}}
    <h1 class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-bold text-white leading-[1.1] tracking-tight mb-6">
      Des sites qui
      <span class="relative inline-block">
        <span class="bg-gradient-to-r from-blue-400 via-indigo-400 to-purple-400 bg-clip-text text-transparent"> convertissent,</span>
      </span>
      <br class="hidden sm:block"> des apps qui <span class="bg-gradient-to-r from-purple-400 to-pink-400 bg-clip-text text-transparent">performent</span>
    </h1>

    <p class="text-base sm:text-lg text-white/55 max-w-2xl mx-auto leading-relaxed mb-10">
      Fintch Web conçoit des solutions numériques sur mesure — rapides, sécurisées et pensées pour faire grandir votre business.
    </p>

    {{-- CTAs --}}
    <div class="flex flex-wrap justify-center gap-3 mb-16">
      <a href="#contact" class="group inline-flex items-center gap-2 bg-blue-600 hover:bg-blue-500 text-white font-semibold px-7 py-3.5 rounded-full transition-all duration-300 shadow-lg shadow-blue-600/25 text-sm">
        Démarrer un projet
        <svg class="w-4 h-4 group-hover:translate-x-0.5 transition-transform" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
      </a>
      <a href="#portfolio" class="inline-flex items-center gap-2 border border-white/20 hover:border-white/40 text-white/80 hover:text-white font-semibold px-7 py-3.5 rounded-full transition-all duration-300 text-sm hover:bg-white/5">
        Voir nos projets
      </a>
    </div>

    {{-- Stats row avec compteurs animés --}}
    <div class="grid grid-cols-2 sm:grid-cols-4 gap-4 max-w-2xl mx-auto">
      <div class="border border-white/10 bg-white/5 rounded-2xl p-4 backdrop-blur-sm" data-aos="zoom-in" data-aos-delay="100">
        <p class="text-2xl font-bold text-white" data-counter="65" data-suffix="+">65+</p>
        <p class="text-xs text-white/45 mt-0.5">Projets livrés</p>
      </div>
      <div class="border border-white/10 bg-white/5 rounded-2xl p-4 backdrop-blur-sm" data-aos="zoom-in" data-aos-delay="200">
        <p class="text-2xl font-bold text-white" data-counter="50" data-suffix="+">50+</p>
        <p class="text-xs text-white/45 mt-0.5">Clients</p>
      </div>
      <div class="border border-white/10 bg-white/5 rounded-2xl p-4 backdrop-blur-sm" data-aos="zoom-in" data-aos-delay="300">
        <p class="text-2xl font-bold text-white" data-counter="4" data-suffix="+">4+</p>
        <p class="text-xs text-white/45 mt-0.5">Ans d'expérience</p>
      </div>
      <div class="border border-white/10 bg-white/5 rounded-2xl p-4 backdrop-blur-sm" data-aos="zoom-in" data-aos-delay="400">
        <p class="text-2xl font-bold text-white" data-counter="99" data-suffix="%">99%</p>
        <p class="text-xs text-white/45 mt-0.5">Satisfaction</p>
      </div>
    </div>
  </div>

  {{-- Scroll indicator --}}
  <div class="absolute bottom-6 left-1/2 -translate-x-1/2 flex flex-col items-center gap-1.5 text-white/25 animate-bounce">
    <span class="text-[10px] tracking-[0.2em] uppercase">Scroll</span>
    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>
  </div>
</section>

{{-- ═══════════════════════════════════════════
    LOGOS CLIENTS — bande compacte
═══════════════════════════════════════════ --}}
<section class="bg-white border-y border-gray-100 py-8">
  <div class="mx-auto max-w-6xl px-5 sm:px-10 lg:px-8">
    <p class="text-center text-[11px] font-semibold text-gray-400 uppercase tracking-[0.2em] mb-7">Ils nous font confiance</p>
    <div class="flex flex-wrap justify-center items-center gap-8 sm:gap-12 opacity-35 grayscale">
      @foreach(['CS Berakha','NewCustorms','Podux','Devolio','E-Shop B2B'] as $c)
        <span class="text-lg font-bold text-gray-800">{{ $c }}</span>
      @endforeach
    </div>
  </div>
</section>

{{-- ═══════════════════════════════════════════
    SERVICES — grille propre sur blanc
═══════════════════════════════════════════ --}}
<section id="services" class="bg-white py-16 lg:py-20">
  <div class="mx-auto max-w-6xl px-5 sm:px-10 lg:px-8">
    <div class="text-center mb-12" data-aos="fade-up">
      <span class="text-xs font-bold text-blue-600 uppercase tracking-widest">Services</span>
      <h2 class="mt-2 text-3xl sm:text-4xl font-bold text-gray-900">Tout sous un même toit</h2>
      <p class="mt-3 text-gray-500 max-w-xl mx-auto text-sm leading-relaxed">Du design à la sécurité, chaque aspect de votre présence digitale est entre de bonnes mains.</p>
    </div>

    <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4">
      @foreach([
        ['bg-blue-50','text-blue-600','bg-blue-600','Web Design UI/UX','Interfaces modernes pensées pour convertir.','M9.53 16.122a3 3 0 00-5.78 1.128 2.25 2.25 0 01-2.4 2.245 4.5 4.5 0 008.4-2.245c0-.399-.078-.78-.22-1.128zm0 0a15.998 15.998 0 003.388-1.62m-5.043-.025a15.994 15.994 0 011.622-3.395m3.42 3.42a15.995 15.995 0 004.764-4.648l3.876-5.814a1.151 1.151 0 00-1.597-1.597L14.146 6.32a15.996 15.996 0 00-4.649 4.763m3.42 3.42a6.776 6.776 0 00-3.42-3.42'],
        ['bg-violet-50','text-violet-600','bg-violet-600','Développement web','Apps robustes, évolutives, faciles à maintenir.','M6.75 7.5l3 2.25-3 2.25m4.5 0h3m-9 8.25h13.5A2.25 2.25 0 0021 18V6a2.25 2.25 0 00-2.25-2.25H5.25A2.25 2.25 0 003 6v12a2.25 2.25 0 002.25 2.25z'],
        ['bg-emerald-50','text-emerald-600','bg-emerald-600','Hébergement & DevOps','Serveurs sécurisés, CI/CD et monitoring 24/7.','M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3'],
        ['bg-orange-50','text-orange-500','bg-orange-500','Marketing & SEO','Visibilité, acquisition et génération de leads.','M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z'],
        ['bg-rose-50','text-rose-600','bg-rose-600','Cybersécurité','Audit, pentest et conformité RGPD inclus.','M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z'],
        ['bg-indigo-50','text-indigo-600','bg-indigo-600','E-commerce','Boutiques sécurisées, rapides et qui vendent.','M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z'],
        ['bg-teal-50','text-teal-600','bg-teal-600','Apps mobiles','iOS & Android natifs ou hybrides, fluides.','M10.5 1.5H8.25A2.25 2.25 0 006 3.75v16.5a2.25 2.25 0 002.25 2.25h7.5A2.25 2.25 0 0018 20.25V3.75a2.25 2.25 0 00-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3'],
        ['bg-amber-50','text-amber-600','bg-amber-500','Maintenance','Updates, corrections et support continu.','M11.42 15.17L17.25 21A2.652 2.652 0 0021 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 11-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 004.486-6.336l-3.276 3.277a3.004 3.004 0 01-2.25-2.25l3.276-3.276a4.5 4.5 0 00-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437l1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008z'],
      ] as [$bg,$tc,$hbg,$title,$desc,$path])
      <div class="group relative bg-gray-50 hover:bg-white rounded-2xl p-5 border border-transparent hover:border-gray-200 hover:shadow-lg transition-all duration-300 cursor-default">
        <div class="w-10 h-10 {{ $bg }} rounded-xl flex items-center justify-center mb-4 group-hover:{{ $hbg }} transition-colors duration-300">
          <svg class="w-5 h-5 {{ $tc }} group-hover:text-white transition-colors duration-300" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="{{ $path }}"/></svg>
        </div>
        <h3 class="font-semibold text-gray-800 text-sm mb-1.5">{{ $title }}</h3>
        <p class="text-gray-500 text-xs leading-relaxed">{{ $desc }}</p>
      </div>
      @endforeach
    </div>
  </div>
</section>

{{-- ═══════════════════════════════════════════
    PROCESSUS — fond sombre, 4 étapes
═══════════════════════════════════════════ --}}
<section class="bg-[#0a0f1e] py-16 lg:py-20">
  <div class="mx-auto max-w-6xl px-5 sm:px-10 lg:px-8">
    <div class="text-center mb-12" data-aos="fade-up">
      <span class="text-xs font-bold text-blue-400 uppercase tracking-widest">Comment on travaille</span>
      <h2 class="mt-2 text-3xl sm:text-4xl font-bold text-white">Un process clair, du début à la fin</h2>
    </div>
    <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4 lg:gap-0 lg:relative">
      <div class="hidden lg:block absolute top-[2.25rem] left-[12.5%] right-[12.5%] h-px bg-gradient-to-r from-blue-600/0 via-blue-600/50 to-blue-600/0"></div>
      @foreach([
        ['01','bg-blue-600','Découverte','Analyse de vos objectifs, audience et contraintes techniques.'],
        ['02','bg-violet-600','Design','Maquettes UX/UI et prototypes validés avant développement.'],
        ['03','bg-indigo-600','Développement','Code propre, agile, avec livrables réguliers et tests.'],
        ['04','bg-emerald-600','Lancement','Mise en prod, formation équipe et support post-lancement.'],
      ] as [$n,$bg,$title,$desc])
      <div class="relative text-center px-4 lg:px-6">
        <div class="w-[4.5rem] h-[4.5rem] {{ $bg }} rounded-2xl flex items-center justify-center mx-auto mb-4 relative z-10 shadow-lg">
          <span class="text-white font-bold text-xl">{{ $n }}</span>
        </div>
        <h3 class="font-semibold text-white text-sm mb-2">{{ $title }}</h3>
        <p class="text-white/45 text-xs leading-relaxed">{{ $desc }}</p>
      </div>
      @endforeach
    </div>
  </div>
</section>

{{-- ═══════════════════════════════════════════
    À PROPOS — split layout compact
═══════════════════════════════════════════ --}}
<section class="bg-gray-50 py-16 lg:py-20">
  <div class="mx-auto max-w-6xl px-5 sm:px-10 lg:px-8">
    <div class="flex flex-col lg:flex-row gap-12 lg:gap-16 items-center">
      <div class="lg:w-5/12 relative" data-aos="fade-right">
        <div class="rounded-2xl overflow-hidden shadow-xl aspect-[4/3]">
          <img src="images/happy-work.webp" alt="Équipe Fintch Web" class="w-full h-full object-cover">
        </div>
        <div class="absolute -bottom-4 -right-4 bg-white rounded-xl p-4 shadow-lg border border-gray-100 flex items-center gap-3">
          <div class="w-10 h-10 bg-emerald-100 rounded-lg flex items-center justify-center">
            <svg class="w-5 h-5 text-emerald-600" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
          </div>
          <div>
            <p class="font-bold text-gray-800 text-base leading-none">99%</p>
            <p class="text-gray-500 text-xs mt-0.5">Clients satisfaits</p>
          </div>
        </div>
      </div>
      <div class="lg:w-7/12" data-aos="fade-left">
        <span class="text-xs font-bold text-blue-600 uppercase tracking-widest">À propos</span>
        <h2 class="mt-2 text-3xl sm:text-4xl font-bold text-gray-900 leading-tight mb-4">
          Performance et sécurité<br>au cœur de chaque projet
        </h2>
        <p class="text-gray-500 text-sm leading-relaxed mb-6">
          Fintch Web est une équipe d'experts passionnés qui aide les entreprises à créer des produits numériques fiables, rapides et sécurisés. Chaque projet est traité avec la même exigence, qu'il s'agisse d'un site vitrine ou d'une application complexe.
        </p>
        <div class="grid sm:grid-cols-2 gap-3 mb-7">
          @foreach(['Logiciels sur mesure et sécurisés','UX centrée sur la conversion','Délais et budgets maîtrisés','Standards OWASP & RGPD'] as $item)
          <div class="flex items-center gap-2.5 bg-white rounded-xl px-4 py-3 border border-gray-100 shadow-sm">
            <div class="w-5 h-5 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0">
              <svg class="w-3 h-3 text-blue-600" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>
            </div>
            <span class="text-gray-700 text-xs font-medium">{{ $item }}</span>
          </div>
          @endforeach
        </div>
        <a href="#" class="inline-flex items-center gap-2 border-2 border-blue-600 text-blue-600 hover:bg-blue-600 hover:text-white px-6 py-2.5 rounded-full font-semibold text-sm transition-all duration-300">
          En savoir plus
          <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
        </a>
      </div>
    </div>
  </div>
</section>

{{-- ═══════════════════════════════════════════
    PORTFOLIO — grille sans carousel
═══════════════════════════════════════════ --}}
<section id="portfolio" class="bg-white py-16 lg:py-20">
  <div class="mx-auto max-w-6xl px-5 sm:px-10 lg:px-8">
    <div class="flex items-end justify-between mb-10">
      <div>
        <span class="text-xs font-bold text-blue-600 uppercase tracking-widest">Portfolio</span>
        <h2 class="mt-2 text-3xl sm:text-4xl font-bold text-gray-900">Nos réalisations</h2>
      </div>
      <a href="/portfolio" class="hidden sm:inline-flex items-center gap-1.5 text-blue-600 font-semibold text-sm hover:gap-2.5 transition-all">
        Tout voir <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
      </a>
    </div>

    <div class="grid sm:grid-cols-2 gap-6">

      {{-- ClinicSoft — Projet réel --}}
      <div class="group relative rounded-2xl overflow-hidden bg-gray-50 border border-gray-100 hover:shadow-2xl hover:-translate-y-1 transition-all duration-300" data-aos="fade-up" data-aos-delay="0">
        <div class="overflow-hidden h-56 relative bg-gradient-to-br from-blue-600 to-indigo-800">
          <img class="w-full h-full object-cover object-top group-hover:scale-105 transition-transform duration-500"
               src="{{ asset('assets/portfolio/clinicsoft.png') }}" alt="ClinicSoft">
          <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent"></div>
          <span class="absolute top-3 left-3 bg-green-500 text-white text-[10px] font-bold px-2.5 py-1 rounded-full uppercase tracking-wide flex items-center gap-1">
            <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
            Réalisé
          </span>
          <span class="absolute top-3 right-3 bg-white/20 backdrop-blur-sm text-white text-[10px] font-bold px-2.5 py-1 rounded-full uppercase tracking-wide">Logiciel</span>
        </div>
        <div class="p-6">
          <h3 class="font-bold text-gray-900 text-lg mb-2">ClinicSoft</h3>
          <p class="text-gray-500 text-sm leading-relaxed mb-4">SaaS médical complet avec 74 modules : réception, laboratoire, bloc opératoire, maternité, pharmacie, imagerie, facturation et comptabilité.</p>
          <div class="flex flex-wrap gap-1.5">
            <span class="text-xs font-medium bg-blue-50 text-blue-700 px-2.5 py-1 rounded-full">Laravel</span>
            <span class="text-xs font-medium bg-blue-50 text-blue-700 px-2.5 py-1 rounded-full">Livewire</span>
            <span class="text-xs font-medium bg-blue-50 text-blue-700 px-2.5 py-1 rounded-full">74 modules</span>
            <span class="text-xs font-medium bg-blue-50 text-blue-700 px-2.5 py-1 rounded-full">SaaS Médical</span>
          </div>
        </div>
      </div>

      {{-- NadhiyaStore — Projet réel --}}
      <div class="group relative rounded-2xl overflow-hidden bg-gray-50 border border-gray-100 hover:shadow-2xl hover:-translate-y-1 transition-all duration-300" data-aos="fade-up" data-aos-delay="100">
        <div class="overflow-hidden h-56 relative bg-[#f0fdf8]">
          <img class="w-full h-full object-cover object-top group-hover:scale-105 transition-transform duration-500"
               src="{{ asset('assets/portfolio/nadhiyastore.png') }}" alt="NadhiyaStore">
          <div class="absolute inset-0 bg-gradient-to-t from-black/40 via-transparent to-transparent"></div>
          <span class="absolute top-3 left-3 bg-green-500 text-white text-[10px] font-bold px-2.5 py-1 rounded-full uppercase tracking-wide flex items-center gap-1">
            <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
            Réalisé
          </span>
          <span class="absolute top-3 right-3 bg-white/20 backdrop-blur-sm text-white text-[10px] font-bold px-2.5 py-1 rounded-full uppercase tracking-wide">Logiciel</span>
        </div>
        <div class="p-6">
          <h3 class="font-bold text-gray-900 text-lg mb-2">NadhiyaStore</h3>
          <p class="text-gray-500 text-sm leading-relaxed mb-4">Caisse POS avec scan code-barres, catalogue, gestion des stocks, alertes, fournisseurs et rapports de ventes.</p>
          <div class="flex flex-wrap gap-1.5">
            <span class="text-xs font-medium bg-teal-50 text-teal-700 px-2.5 py-1 rounded-full">Laravel</span>
            <span class="text-xs font-medium bg-teal-50 text-teal-700 px-2.5 py-1 rounded-full">POS</span>
            <span class="text-xs font-medium bg-teal-50 text-teal-700 px-2.5 py-1 rounded-full">Gestion Stock</span>
          </div>
        </div>
      </div>

      {{-- Smart Hardware ERP — Projet réel --}}
      <div class="group relative rounded-2xl overflow-hidden bg-gray-50 border border-gray-100 hover:shadow-2xl hover:-translate-y-1 transition-all duration-300" data-aos="fade-up" data-aos-delay="100">
        <div class="overflow-hidden h-56 relative bg-[#f8fafc]">
          <img class="w-full h-full object-cover object-top group-hover:scale-105 transition-transform duration-500"
               src="{{ asset('assets/portfolio/smarthardware.png') }}" alt="Smart Hardware ERP">
          <div class="absolute inset-0 bg-gradient-to-t from-black/40 via-transparent to-transparent"></div>
          <span class="absolute top-3 left-3 bg-green-500 text-white text-[10px] font-bold px-2.5 py-1 rounded-full uppercase tracking-wide flex items-center gap-1">
            <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
            Réalisé
          </span>
          <span class="absolute top-3 right-3 bg-white/20 backdrop-blur-sm text-white text-[10px] font-bold px-2.5 py-1 rounded-full uppercase tracking-wide">ERP</span>
        </div>
        <div class="p-6">
          <h3 class="font-bold text-gray-900 text-lg mb-2">Smart Hardware ERP</h3>
          <p class="text-gray-500 text-sm leading-relaxed mb-4">ERP pour quincaillerie : POS, multi-dépôts, achats, transferts, inventaires, dépenses, rapports et gestion des rôles.</p>
          <div class="flex flex-wrap gap-1.5">
            <span class="text-xs font-medium bg-slate-100 text-slate-700 px-2.5 py-1 rounded-full">Laravel</span>
            <span class="text-xs font-medium bg-slate-100 text-slate-700 px-2.5 py-1 rounded-full">ERP</span>
            <span class="text-xs font-medium bg-slate-100 text-slate-700 px-2.5 py-1 rounded-full">Multi-dépôts</span>
          </div>
        </div>
      </div>

      {{-- Orion Centre d'Art — Projet réel --}}
      <div class="group relative rounded-2xl overflow-hidden bg-gray-50 border border-gray-100 hover:shadow-2xl hover:-translate-y-1 transition-all duration-300" data-aos="fade-up" data-aos-delay="100">
        <div class="overflow-hidden h-56 relative bg-[#1a1200]">
          <img class="w-full h-full object-cover object-top group-hover:scale-105 transition-transform duration-500"
               src="{{ asset('assets/portfolio/orion.png') }}" alt="Orion Centre d'Art">
          <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
          <span class="absolute top-3 left-3 bg-green-500 text-white text-[10px] font-bold px-2.5 py-1 rounded-full uppercase tracking-wide flex items-center gap-1">
            <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
            Réalisé
          </span>
          <span class="absolute top-3 right-3 bg-white/20 backdrop-blur-sm text-white text-[10px] font-bold px-2.5 py-1 rounded-full uppercase tracking-wide">Site Web</span>
          {{-- Bouton vert "Voir le site" au survol --}}
          <a href="https://www.orioncentredart.com/" target="_blank" rel="noopener"
             class="absolute bottom-4 left-1/2 -translate-x-1/2 opacity-0 group-hover:opacity-100 translate-y-2 group-hover:translate-y-0 transition-all duration-300
                    flex items-center gap-2 bg-green-500 hover:bg-green-400 text-white text-xs font-bold px-4 py-2 rounded-full shadow-lg whitespace-nowrap">
            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 6H5.25A2.25 2.25 0 003 8.25v10.5A2.25 2.25 0 005.25 21h10.5A2.25 2.25 0 0018 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25"/></svg>
            Visiter le site
          </a>
        </div>
        <div class="p-6">
          <div class="flex items-start justify-between gap-3 mb-2">
            <h3 class="font-bold text-gray-900 text-lg">Orion Centre d'Art</h3>
            <a href="https://www.orioncentredart.com/" target="_blank" rel="noopener"
               class="flex-shrink-0 inline-flex items-center gap-1.5 text-xs font-bold text-white bg-green-500 hover:bg-green-600 px-3 py-1.5 rounded-full transition-colors shadow-sm">
              <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 19.5l15-15m0 0H8.25m11.25 0v11.25"/></svg>
              Voir le site
            </a>
          </div>
          <p class="text-gray-500 text-sm leading-relaxed mb-4">Site vitrine pour un centre d'art multidisciplinaire : galerie, formations, événements, podcasts et blog culturel.</p>
          <div class="flex flex-wrap gap-1.5">
            <span class="text-xs font-medium bg-violet-50 text-violet-700 px-2.5 py-1 rounded-full">Site web</span>
            <span class="text-xs font-medium bg-violet-50 text-violet-700 px-2.5 py-1 rounded-full">Culture & Art</span>
            <span class="text-xs font-medium bg-violet-50 text-violet-700 px-2.5 py-1 rounded-full">Événements</span>
            <span class="text-xs font-medium bg-violet-50 text-violet-700 px-2.5 py-1 rounded-full">Blog</span>
          </div>
        </div>
      </div>
    </div>

    <div class="text-center mt-8">
      <a href="/portfolio" class="inline-flex items-center gap-2 text-blue-600 font-semibold text-sm border border-blue-200 hover:border-blue-600 px-6 py-2.5 rounded-full hover:bg-blue-50 transition-all">
        Voir tous les projets <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
      </a>
    </div>
  </div>
</section>

{{-- ═══════════════════════════════════════════
    PRICING — fond sombre, 3 plans
═══════════════════════════════════════════ --}}
<section class="bg-[#0a0f1e] py-16 lg:py-20">
  <div class="mx-auto max-w-6xl px-5 sm:px-10 lg:px-8">
    <div class="text-center mb-12">
      <span class="text-xs font-bold text-blue-400 uppercase tracking-widest">Tarifs</span>
      <h2 class="mt-2 text-3xl sm:text-4xl font-bold text-white">Transparent, sans surprise</h2>
      <p class="mt-3 text-white/45 text-sm max-w-lg mx-auto">Des offres adaptées à chaque étape de votre croissance.</p>
    </div>
    <div class="grid md:grid-cols-3 gap-4 items-start">
      {{-- Starter --}}
      <div class="bg-white/5 border border-white/10 rounded-2xl p-6">
        <h3 class="font-semibold text-white text-lg mb-1">Starter</h3>
        <p class="text-white/40 text-xs mb-5">Indépendants & petites structures</p>
        <div class="mb-5"><span class="text-4xl font-bold text-white">500$</span><span class="text-white/40 text-sm ml-1.5">/ projet</span></div>
        <ul class="space-y-2.5 mb-6 text-xs">
          @foreach(['Site vitrine 5 pages','Design responsive','Formulaire de contact','SEO de base'] as $f)
          <li class="flex items-center gap-2.5 text-white/70"><svg class="w-4 h-4 text-emerald-400 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>{{ $f }}</li>
          @endforeach
          @foreach(['E-commerce','Support dédié'] as $f)
          <li class="flex items-center gap-2.5 text-white/20"><svg class="w-4 h-4 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/></svg>{{ $f }}</li>
          @endforeach
        </ul>
        <a href="#" class="block text-center border border-white/20 hover:border-blue-500 text-white/70 hover:text-white text-sm font-semibold py-2.5 rounded-full transition-all">Démarrer</a>
      </div>

      {{-- Pro — mis en avant --}}
      <div class="bg-gradient-to-b from-blue-600 to-blue-700 rounded-2xl p-6 relative shadow-xl shadow-blue-900/40 md:-mt-3 md:-mb-3">
        <div class="absolute -top-3 left-1/2 -translate-x-1/2">
          <span class="bg-gradient-to-r from-amber-400 to-orange-400 text-gray-900 text-[10px] font-black px-3 py-1 rounded-full uppercase tracking-widest">Populaire</span>
        </div>
        <h3 class="font-semibold text-white text-lg mb-1 mt-2">Pro</h3>
        <p class="text-blue-200/60 text-xs mb-5">PME et startups en croissance</p>
        <div class="mb-5"><span class="text-4xl font-bold text-white">1 500$</span><span class="text-blue-200/60 text-sm ml-1.5">/ projet</span></div>
        <ul class="space-y-2.5 mb-6 text-xs">
          @foreach(['Tout le pack Starter','App web sur mesure','Auth & Dashboard','SEO avancé & Analytics','3 mois de support','Audit sécurité inclus'] as $f)
          <li class="flex items-center gap-2.5 text-blue-100"><svg class="w-4 h-4 text-emerald-300 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>{{ $f }}</li>
          @endforeach
        </ul>
        <a href="#" class="block text-center bg-white text-blue-700 hover:bg-blue-50 text-sm font-bold py-2.5 rounded-full transition-all">Choisir Pro</a>
      </div>

      {{-- Enterprise --}}
      <div class="bg-white/5 border border-white/10 rounded-2xl p-6">
        <h3 class="font-semibold text-white text-lg mb-1">Enterprise</h3>
        <p class="text-white/40 text-xs mb-5">Grandes structures & projets complexes</p>
        <div class="mb-5"><span class="text-2xl font-bold text-white">Sur devis</span></div>
        <ul class="space-y-2.5 mb-6 text-xs">
          @foreach(['Tout le pack Pro','Architecture sur mesure','Intégrations API tierces','Support prioritaire 24/7','SLA garanti & monitoring','Formation équipe incluse'] as $f)
          <li class="flex items-center gap-2.5 text-white/70"><svg class="w-4 h-4 text-emerald-400 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/></svg>{{ $f }}</li>
          @endforeach
        </ul>
        <a href="#contact" class="block text-center border border-white/20 hover:border-blue-500 text-white/70 hover:text-white text-sm font-semibold py-2.5 rounded-full transition-all">Nous contacter</a>
      </div>
    </div>
  </div>
</section>

{{-- ═══════════════════════════════════════════
    TÉMOIGNAGES — fond blanc, 2 colonnes
═══════════════════════════════════════════ --}}
<section class="bg-white py-16 lg:py-20">
  <div class="mx-auto max-w-6xl px-5 sm:px-10 lg:px-8">
    <div class="text-center mb-10" data-aos="fade-up">
      <span class="text-xs font-bold text-blue-600 uppercase tracking-widest">Témoignages</span>
      <h2 class="mt-2 text-3xl sm:text-4xl font-bold text-gray-900">Ce qu'ils disent</h2>
      <div class="flex justify-center gap-0.5 mt-3 text-yellow-400 text-xl">★★★★★</div>
    </div>
    <div class="grid md:grid-cols-2 gap-5">
      @foreach([
        ['MY','from-blue-500 to-indigo-600','Moise Yamba','Promo du CS Berakha','csberakha.org','Nous avons été impressionnés par leur expertise. Leur équipe a répondu à nos besoins avec une solution efficace et fiable. Livraison dans les délais, accompagnement exemplaire.'],
        ['PD','from-violet-500 to-pink-600','Patrick DJAMBA','DG NEWCASTORM AGENCY','newcustomsagency.com','Deux ans de collaboration, et nous sommes constamment impressionnés par la qualité du service. Réactifs, pros et orientés résultats. On recommande sans hésiter.'],
      ] as [$init,$grad,$name,$role,$site,$quote])
      <div class="relative bg-gray-50 rounded-2xl p-6 border border-gray-100">
        <div class="absolute top-5 right-6 text-gray-200 text-6xl font-serif leading-none select-none">"</div>
        <div class="flex gap-0.5 text-yellow-400 text-sm mb-4">★★★★★</div>
        <p class="text-gray-700 text-sm leading-relaxed mb-5 relative">{{ $quote }}</p>
        <div class="flex items-center gap-3">
          <div class="w-10 h-10 rounded-full bg-gradient-to-br {{ $grad }} flex items-center justify-center text-white text-xs font-bold flex-shrink-0">{{ $init }}</div>
          <div>
            <p class="font-semibold text-gray-800 text-sm">{{ $name }}</p>
            <p class="text-gray-500 text-xs">{{ $role }} · <a href="https://{{ $site }}" class="text-blue-600 hover:underline">{{ $site }}</a></p>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>

{{-- ═══════════════════════════════════════════
    STACK TECHNIQUE — compact
═══════════════════════════════════════════ --}}
<section class="bg-gray-50 py-14 lg:py-16 border-t border-gray-100">
  <div class="mx-auto max-w-6xl px-5 sm:px-10 lg:px-8">
    <p class="text-center text-[11px] font-bold text-gray-400 uppercase tracking-[0.2em] mb-8">Stack technique</p>
    <div class="grid grid-cols-4 sm:grid-cols-6 md:grid-cols-8 lg:grid-cols-8 gap-3">
      @foreach([
        ['TailwindCSS','TailwindCSS.svg'],['React','React.svg'],['Next.js','NextJs.svg'],['Vue.js','Vue.svg'],
        ['Nuxt.js','NuxtJs.svg'],['TypeScript','TypeScript.svg'],['Laravel','Laravel.svg'],['PHP','PHP.svg'],
        ['MySQL','MySQL.svg'],['Vite','Vite.svg'],['Astro','Astro.svg'],['JavaScript','JavaScript.svg'],
        ['HTML5','HTML5.svg'],['CSS3','CSS3.svg'],['Vercel','Vercel.svg'],['Bootstrap','Bootstrap.svg'],
      ] as [$name,$icon])
      <div class="group bg-white hover:bg-blue-50 rounded-xl p-3 text-center border border-gray-100 hover:border-blue-200 transition-all duration-200 cursor-default">
        <img src="techicons/{{ $icon }}" alt="{{ $name }}" class="w-7 h-7 mx-auto mb-1.5 group-hover:scale-110 transition-transform duration-200">
        <p class="text-[9px] font-semibold text-gray-400 group-hover:text-blue-500 transition-colors leading-tight">{{ $name }}</p>
      </div>
      @endforeach
    </div>
  </div>
</section>

{{-- ═══════════════════════════════════════════
    FAQ — 2 colonnes compactes
═══════════════════════════════════════════ --}}
<section class="bg-white py-16 lg:py-20">
  <div class="mx-auto max-w-6xl px-5 sm:px-10 lg:px-8">
    <div class="flex flex-col lg:flex-row gap-12 lg:gap-16">
      <div class="lg:w-5/12">
        <span class="text-xs font-bold text-blue-600 uppercase tracking-widest">FAQ</span>
        <h2 class="mt-2 text-3xl sm:text-4xl font-bold text-gray-900 mb-4">Questions fréquentes</h2>
        <p class="text-gray-500 text-sm leading-relaxed mb-6">Pas de réponse ici ? On vous répond en moins de 24h.</p>
        <a href="#contact" class="inline-flex items-center gap-2 bg-blue-600 hover:bg-blue-700 text-white text-sm font-semibold px-5 py-2.5 rounded-full transition-all">
          Nous écrire
          <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
        </a>
      </div>
      <div class="lg:w-7/12 space-y-2">
        @foreach([
          ['Combien coûte un projet ?','Un site vitrine part de 500$, une app web sur mesure dès 1 500$. Devis gratuit et détaillé avant tout engagement.'],
          ['Quel délai de réalisation ?','2-3 semaines pour un site vitrine, 4-12 semaines pour une app. Calendrier défini ensemble avec des jalons clairs.'],
          ['Y a-t-il une maintenance après livraison ?','Oui : contrats mensuels avec mises à jour, corrections, sauvegardes et monitoring. Inclus dans les packs Pro et Enterprise.'],
          ['Pouvez-vous reprendre un projet existant ?','Absolument. Audit technique complet, identification des problèmes, plan de migration ou d\'amélioration progressif.'],
          ['Mon site sera-t-il sécurisé & RGPD ?','Sécurité by design : audit, chiffrement, conformité RGPD et bonnes pratiques OWASP sur chaque projet.'],
        ] as $i => [$q,$a])
        <details class="group border border-gray-100 rounded-xl" @if($i===0) open @endif>
          <summary class="flex items-center justify-between gap-4 cursor-pointer px-4 py-3.5 font-semibold text-gray-800 text-sm list-none select-none">
            {{ $q }}
            <span class="w-6 h-6 rounded-full bg-gray-100 group-open:bg-blue-600 flex items-center justify-center flex-shrink-0 group-open:rotate-180 transition-all duration-300">
              <svg class="w-3 h-3 text-gray-500 group-open:text-white" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/></svg>
            </span>
          </summary>
          <p class="px-4 pb-4 text-gray-500 text-xs leading-relaxed">{{ $a }}</p>
        </details>
        @endforeach
      </div>
    </div>
  </div>
</section>

{{-- ═══════════════════════════════════════════
    CTA FINAL — sombre, fort
═══════════════════════════════════════════ --}}
<section id="contact" class="relative bg-[#0a0f1e] py-16 lg:py-20 overflow-hidden">
  <div class="absolute inset-0 pointer-events-none">
    <div class="absolute top-0 left-1/4 w-96 h-96 bg-blue-600/15 rounded-full blur-[100px]"></div>
    <div class="absolute bottom-0 right-1/4 w-72 h-72 bg-purple-600/15 rounded-full blur-[100px]"></div>
  </div>
  <div class="relative mx-auto max-w-4xl px-5 sm:px-10 lg:px-8 text-center">
    <div class="inline-flex items-center gap-2 border border-white/15 bg-white/5 rounded-full px-4 py-1.5 mb-7">
      <span class="w-1.5 h-1.5 bg-emerald-400 rounded-full animate-pulse"></span>
      <span class="text-xs font-medium text-white/60">Disponible pour nouveaux projets</span>
    </div>
    <h2 class="text-3xl sm:text-5xl lg:text-6xl font-bold text-white leading-tight mb-5">
      Votre projet mérite <br class="hidden sm:block">
      <span class="bg-gradient-to-r from-blue-400 via-indigo-400 to-purple-400 bg-clip-text text-transparent">la meilleure équipe</span>
    </h2>
    <p class="text-white/50 text-sm max-w-lg mx-auto mb-9">Devis gratuit en 24h. Pas d'engagement, pas de frais cachés. Juste une conversation.</p>
    <div class="flex flex-col sm:flex-row justify-center gap-3">
      <a href="#" class="group inline-flex items-center justify-center gap-2 bg-blue-600 hover:bg-blue-500 text-white font-semibold px-8 py-3.5 rounded-full transition-all shadow-lg shadow-blue-600/25 text-sm">
        Obtenir un devis gratuit
        <svg class="w-4 h-4 group-hover:translate-x-0.5 transition-transform" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
      </a>
      <a href="https://call.whatsapp.com/voice/wFeqG3KGDt4jpN1yFe8zPG" class="inline-flex items-center justify-center gap-2 border border-white/20 hover:border-emerald-500/50 text-white/70 hover:text-white font-semibold px-8 py-3.5 rounded-full transition-all text-sm hover:bg-emerald-500/10">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="text-emerald-400" viewBox="0 0 16 16"><path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326z"/></svg>
        WhatsApp
      </a>
    </div>
    <div class="mt-10 flex flex-wrap justify-center gap-8 text-white/30 text-xs">
      <span class="flex items-center gap-1.5"><svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75"/></svg>contact@fintchweb.com</span>
      <span class="flex items-center gap-1.5"><svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>Réponse sous 24h</span>
      <span class="flex items-center gap-1.5"><svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z"/></svg>Devis 100% gratuit</span>
    </div>
  </div>
</section>
</div>
