@php $localePrefix = app()->getLocale() === 'en' ? '/en' : ''; @endphp
<div>
  <section class="pt-32 pb-16 bg-slate-950 text-white">
    <div class="mx-auto max-w-3xl px-5 text-center">
      <span class="inline-block px-4 py-1.5 text-xs font-semibold tracking-widest uppercase text-blue-400 bg-blue-500/10 border border-blue-500/20 rounded-full mb-6">
        Blog
      </span>
      <h1 class="text-4xl sm:text-5xl font-bold leading-tight mb-4">
        {{ app()->getLocale() === 'en' ? 'Practical advice for your project' : 'Conseils pratiques pour votre projet' }}
      </h1>
      <p class="text-white/60 text-lg">
        @if(app()->getLocale() === 'en')
          Pricing, technical choices, security — concrete articles to help you prepare your site, your software or your installation.
        @else
          Prix, choix techniques, sécurité — des articles concrets pour bien préparer votre site, votre logiciel ou votre installation.
        @endif
      </p>
    </div>
  </section>

  <section class="py-16 bg-gray-50 min-h-screen">
    <div class="mx-auto max-w-5xl px-5 sm:px-10">
      <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach($articles as $article)
        <a href="{{ $localePrefix }}/blog/{{ $article['slug'] }}" class="group bg-white rounded-2xl overflow-hidden border border-gray-100 hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col">
          <div class="p-6 flex flex-col flex-1">
            <span class="text-xs font-bold text-blue-600 uppercase tracking-widest mb-3">{{ $article['category'] }}</span>
            <h2 class="font-bold text-gray-900 text-lg mb-3 group-hover:text-blue-600 transition-colors">{{ $article['title'] }}</h2>
            <p class="text-gray-500 text-sm leading-relaxed mb-5 flex-1">{{ $article['excerpt'] }}</p>
            <span class="inline-flex items-center gap-2 text-xs font-semibold text-blue-600">
              {{ app()->getLocale() === 'en' ? 'Read article' : "Lire l'article" }} · {{ $article['read_time'] }}
              <svg class="w-3.5 h-3.5 group-hover:translate-x-0.5 transition-transform" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
            </span>
          </div>
        </a>
        @endforeach
      </div>
    </div>
  </section>
</div>
