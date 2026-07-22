@php $localePrefix = app()->getLocale() === 'en' ? '/en' : ''; @endphp
<div>
  <section class="pt-32 pb-16 bg-slate-950 text-white">
    <div class="mx-auto max-w-3xl px-5 text-center">
      <span class="inline-block px-4 py-1.5 text-xs font-semibold tracking-widest uppercase text-blue-400 bg-blue-500/10 border border-blue-500/20 rounded-full mb-6">
        {{ $article['category'] }}
      </span>
      <h1 class="text-3xl sm:text-4xl font-bold leading-tight mb-4">{{ $article['title'] }}</h1>
      <p class="text-white/50 text-sm">{{ $article['read_time'] }} {{ app()->getLocale() === 'en' ? 'read' : 'de lecture' }}</p>
    </div>
  </section>

  <section class="py-16 bg-white">
    <div class="mx-auto max-w-2xl px-5">
      @foreach($article['sections'] as $section)
        <h2 class="text-2xl font-bold text-gray-900 mt-10 mb-4 first:mt-0">{{ $section['heading'] }}</h2>
        @foreach($section['paragraphs'] as $paragraph)
          <p class="text-gray-600 text-sm leading-relaxed mb-4">{{ $paragraph }}</p>
        @endforeach
      @endforeach

      <div class="mt-12 bg-blue-50 border border-blue-100 rounded-2xl p-6 text-center">
        <h3 class="font-bold text-gray-900 text-lg mb-2">{{ app()->getLocale() === 'en' ? 'Got a project in mind?' : 'Un projet en tête ?' }}</h3>
        <p class="text-gray-500 text-sm mb-5">
          @if(app()->getLocale() === 'en')
            Tell us what you need, we'll get back to you with a clear proposal within 24h.
          @else
            Décrivez-nous votre besoin, on vous répond avec une proposition claire sous 24h.
          @endif
        </p>
        <a href="{{ $localePrefix }}/devis" class="inline-flex items-center gap-2 bg-blue-600 hover:bg-blue-700 text-white font-semibold px-6 py-2.5 rounded-full text-sm transition-all">
          {{ app()->getLocale() === 'en' ? 'Get a free quote' : 'Obtenir un devis gratuit' }}
          <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
        </a>
      </div>

      <a href="{{ $localePrefix }}/blog" class="inline-flex items-center gap-2 text-blue-600 font-semibold text-sm mt-8">
        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" transform="rotate(180 12 12)"/></svg>
        {{ app()->getLocale() === 'en' ? 'All articles' : 'Tous les articles' }}
      </a>
    </div>
  </section>
</div>
