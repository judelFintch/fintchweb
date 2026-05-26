<header class="sticky top-0 inset-x-0 z-50 bg-white/80 backdrop-blur-md border-b border-gray-100">
  <div class="w-full mx-auto md:max-w-5xl lg:max-w-7xl px-5 sm:px-10 md:px-12 lg:px-4 xl:px-1">
    <nav class="flex justify-between items-center gap-4 py-4">
      {{-- Logo --}}
      <a href="/" class="flex items-center gap-2.5 font-bold text-gray-800 text-lg min-w-max">
        <div class="relative w-6 h-8">
          <span class="absolute inset-y-0 w-1.5 rounded-lg bg-blue-600"></span>
          <span class="absolute top-0 inset-x-0 h-1.5 rounded-lg bg-purple-600"></span>
          <span class="absolute top-1/2 inset-x-1.5 h-1.5 bg-gray-800 rounded-lg"></span>
        </div>
        Fintch Web
      </a>

      {{-- Desktop nav --}}
      <div data-nav-bar class="absolute scale-50 origin-top-left invisible top-[calc(100%+8px)]
        border border-gray-200/60 inset-x-5 sm:inset-x-10 md:inset-x-12 z-50
        bg-white rounded-2xl p-6 shadow-xl opacity-0 duration-300 ease-linear
        lg:opacity-100 lg:relative lg:visible lg:flex lg:flex-row lg:gap-10
        lg:items-center lg:border-none lg:shadow-none lg:scale-100 lg:rounded-none
        lg:p-0 lg:bg-transparent lg:w-full lg:justify-end
        flex flex-col gap-5">
        <ul class="flex flex-col lg:flex-row gap-2 lg:gap-1 text-gray-600 font-medium text-sm">
          <li><a href="/" class="block px-4 py-2 rounded-full hover:bg-blue-50 hover:text-blue-600 transition-all duration-200">Accueil</a></li>
          <li><a href="/#services" class="block px-4 py-2 rounded-full hover:bg-blue-50 hover:text-blue-600 transition-all duration-200">Services</a></li>
          <li><a href="/portfolio" class="block px-4 py-2 rounded-full hover:bg-blue-50 hover:text-blue-600 transition-all duration-200">Portfolio</a></li>
          <li><a href="/#about" class="block px-4 py-2 rounded-full hover:bg-blue-50 hover:text-blue-600 transition-all duration-200">À propos</a></li>
          <li><a href="/#faq" class="block px-4 py-2 rounded-full hover:bg-blue-50 hover:text-blue-600 transition-all duration-200">FAQ</a></li>
        </ul>
        <div class="flex items-center gap-3">
          <a href="https://call.whatsapp.com/voice/wFeqG3KGDt4jpN1yFe8zPG" class="hidden lg:flex p-2.5 rounded-full border border-green-500 text-green-600 hover:bg-green-50 transition-all" title="WhatsApp">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 16 16"><path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/></svg>
          </a>
          <a href="/devis" class="flex justify-center items-center bg-blue-600 hover:bg-blue-700 text-white px-6 py-2.5 rounded-full font-semibold text-sm transition-all duration-300 shadow-md shadow-blue-200 w-full lg:w-auto">
            Devis gratuit
          </a>
        </div>
      </div>

      {{-- Mobile right side --}}
      <div class="flex items-center gap-2 lg:hidden">
        <a href="https://call.whatsapp.com/voice/wFeqG3KGDt4jpN1yFe8zPG" class="p-2.5 rounded-full border border-green-500 text-green-600">
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 16 16"><path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/></svg>
        </a>
        <button data-toggle-nav="" class="p-2 rounded-xl border border-gray-200 flex flex-col gap-1.5 w-10 h-10 items-center justify-center">
          <span class="sr-only">Menu</span>
          <div id="line-1" class="h-0.5 w-5 rounded bg-gray-700 transition duration-300"></div>
          <div id="line-2" class="h-0.5 w-5 rounded bg-gray-700 transition duration-300"></div>
        </button>
      </div>
    </nav>
  </div>
</header>
