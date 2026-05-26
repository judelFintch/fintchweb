<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <link rel="icon" type="image/svg+xml" href="/favico.svg" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">

  <title>{{ $title ?? 'Fintch Web' }}</title>
  <meta name="description" content="{{ $description ?? 'Agence de développement web et logiciel, spécialisée en UX/UI, performance et sécurité.' }}">

  {{-- Open Graph --}}
  <meta property="og:type" content="website" />
  <meta property="og:site_name" content="Fintch Web" />
  <meta property="og:title" content="{{ $title ?? 'Fintch Web — Agence digitale' }}" />
  <meta property="og:description" content="{{ $description ?? 'Agence de développement web et logiciel, spécialisée en UX/UI, performance et sécurité.' }}" />
  <meta property="og:url" content="{{ url()->current() }}" />
  <meta property="og:image" content="{{ asset('assets/og-image.jpg') }}" />
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="{{ $title ?? 'Fintch Web' }}" />
  <meta name="twitter:description" content="{{ $description ?? 'Agence de développement web et logiciel.' }}" />
  <meta name="twitter:image" content="{{ asset('assets/og-image.jpg') }}" />

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@400;500;600;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="{{ asset('assets/main.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/productslide.css') }}">
  @livewireStyles
</head>

<body class="overflow-y-auto !overflow-x-hidden">
  @include('partials.nav')
  {{ $slot }}
  @include('partials.footer')
  @include('partials.floating')
  @include('partials.cookie')

  <script src="{{ asset('assets/main.js') }}"></script>
  <script src="{{ asset('assets/js/productslide.js') }}"></script>

  <script>
    // Scroll animations (Intersection Observer)
    (() => {
      const aosObs = new IntersectionObserver((entries) => {
        entries.forEach(e => {
          if (e.isIntersecting) {
            e.target.classList.add('aos-animate');
            aosObs.unobserve(e.target);
          }
        });
      }, { threshold: 0.12 });
      document.querySelectorAll('[data-aos]').forEach(el => aosObs.observe(el));
    })();

    // Animated counters
    (() => {
      const cntObs = new IntersectionObserver((entries) => {
        entries.forEach(e => {
          if (e.isIntersecting) {
            const el = e.target;
            const target = +el.dataset.counter;
            const suffix = el.dataset.suffix || '';
            let n = 0;
            const step = target / 60;
            const timer = setInterval(() => {
              n = Math.min(n + step, target);
              el.textContent = Math.floor(n) + suffix;
              if (n >= target) clearInterval(timer);
            }, 16);
            cntObs.unobserve(el);
          }
        });
      }, { threshold: 0.5 });
      document.querySelectorAll('[data-counter]').forEach(el => cntObs.observe(el));
    })();

    // Copyright year
    const yearEl = document.getElementById('year');
    if (yearEl) yearEl.textContent = new Date().getFullYear();
  </script>

  @livewireScripts
</body>
</html>
