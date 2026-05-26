{{-- Cookie banner RGPD --}}
<div id="cookie-banner" class="cookie-banner" role="dialog" aria-label="Cookies">
  <div class="mx-auto md:max-w-5xl lg:max-w-7xl px-5 sm:px-10 py-5 flex flex-col sm:flex-row items-start sm:items-center gap-4">
    <div class="flex-1 text-sm text-white/70 leading-relaxed">
      <span class="font-semibold text-white">Nous utilisons des cookies</span> pour améliorer votre expérience, analyser le trafic et personnaliser le contenu.
      En continuant, vous acceptez notre
      <a href="#" class="text-blue-400 hover:text-blue-300 underline underline-offset-2">politique de confidentialité</a>.
    </div>
    <div class="flex gap-3 flex-shrink-0">
      <button id="cookie-refuse"
              class="px-4 py-2 text-sm text-white/60 border border-white/20 rounded-lg hover:border-white/40 hover:text-white transition-all duration-200">
        Refuser
      </button>
      <button id="cookie-accept"
              class="px-4 py-2 text-sm font-medium text-white bg-blue-600 hover:bg-blue-500 rounded-lg transition-all duration-200">
        Accepter
      </button>
    </div>
  </div>
</div>

<script>
  (() => {
    const banner = document.getElementById('cookie-banner');
    const consent = localStorage.getItem('cookie-consent');
    if (!consent) {
      setTimeout(() => banner.classList.add('visible'), 800);
    }
    function dismiss(value) {
      localStorage.setItem('cookie-consent', value);
      banner.classList.remove('visible');
    }
    document.getElementById('cookie-accept').addEventListener('click', () => dismiss('accepted'));
    document.getElementById('cookie-refuse').addEventListener('click', () => dismiss('refused'));
  })();
</script>
