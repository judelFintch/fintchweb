<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <link rel="icon" type="image/svg+xml" href="favico.svg" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">

  <title>FintchWeb</title>
  <meta name="description" content="Agence de developpement logiciel">
  <link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@400;500;600;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="assets/main.css">
  <link rel="stylesheet" href="assets/productslide.css">
</head>

<body class="overflow-y-auto !overflow-x-hidden">
  <header class="sticky top-0 inset-x-0 py-2 lg:py-0.5 z-60 bg-white border-b border-b-gray-100">
    <div class="w-full relative mx-auto md:max-w-5xl lg:max-w-7xl px-5 sm:px-10 md:px-12 lg:px-4 xl:px-1">
      <nav class="flex justify-between items-center gap-4 py-3">

        <!-- logo -->
        <div class="min-w-max">
          <a href="index.html" class="flex items-center gap-2 font-semibold text-gray-600 text-lg">
            <div class="relative w-5 h-7">
              <span class="absolute inset-y-0 w-1.5 rounded-lg bg-blue-600"></span>
              <span class="absolute top-0 inset-x-0 h-1.5 rounded-lg bg-purple-600"></span>
              <span class="absolute top-1/2 inset-x-1 h-1.5 bg-gray-700 rounded-lg"></span>
            </div>
            Fintch Web
          </a>
        </div>
        <div data-nav-bar class="absolute scale-50 origin-top-left invisible top-[calc(100%+12px)] md:w-auto z-70 
          border border-gray-200/40 
           inset-x-5 sm:inset-x-10 duration-300 ease-linear opacity-0 lg:opacity-100
          md:inset-x-12 lg:inset-x-0 bg-white rounded-b-3xl p-8 lg:p-0 lg:rounded-b-none
           lg:relative  lg:visible flex flex-col lg:flex-row gap-6
           lg:border-none lg:shadow-none lg:scale-100
            lg:gap-10 lg:items-center lg:text-lg lg:w-full lg:justify-end">
          <ul class="flex flex-col lg:flex-row gap-3 lg:gap-5 lg:items-center text-gray-700 font-medium">
            <li>
              <a href="index.html" class="duration-300 ease-linear hover:text-blue-600">Accueil</a>
            </li>

            <li>
              <a href="pages/portfolio.html" class="duration-300 ease-linear hover:text-blue-600">Portfolio</a>
            </li>

            <li>
              <a href="pages/about.html" class="duration-300 ease-linear hover:text-blue-600">A propos</a>
            </li>

            <li>
              <a href="pages/about.html#faq" class="duration-300 ease-linear hover:text-blue-600">F.A.Q</a>
            </li>
          </ul>
          <div class="flex w-full sm:w-max">
            <a href="#"
              class="text-white bg-blue-600 px-8 py-4 rounded-full w-full sm:w-max flex justify-center relative ripple-behavior-after">
              <span class="relative">
                Obenir un devis
              </span>
            </a>
          </div>
        </div>
        <div class="gap-2 flex min-w-max w-max">
          <a href="#" class="p-2.5 lg:p-4 rounded-full border border-green-600 text-green-600">
            <span class="sr-only">call whatsap</span>
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class=""
              viewBox="0 0 16 16">
              <path
                d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
            </svg>
          </a>
          <button data-toggle-nav="" class="border-l pl-2 border-gray-200 relative w-10 h-auto p-2 lg:hidden">
            <span class="sr-only">Open Nav</span>
            <div id="line-1" class="mx-auto h-0.5 w-6 rounded bg-gray-800 transition duration-300"></div>
            <div id="line-2" class="mx-auto mt-2 h-0.5 w-6 rounded bg-gray-800 transition duration-300">
            </div>
          </button>
        </div>
      </nav>
    </div>
  </header>
  <!-- overlay nav -->
  <div data-overlay
    class="fixed bg-gray-800 bg-opacity-70 backdrop-filter backdrop-blur-sm inset-0 z-50 lg:hidden invisible opacity-0 transition-all ease-linear duration-300">
  </div>
  <!-- overlay nav -->

  <section class="relative pt-8 md:pt-12 lg:pt-16 overflow-hidden">
    <div
      class="absolute w-2/5 aspect-video rounded-full skew-x-12 bg-gradient-to-tl from-blue-700 via-purple-500 to-indigo-700 lg:top-1/2 lg:-left-5 opacity-40 blur-3xl">
    </div>
    <div
      class="absolute w-2/5 aspect-video rounded-full skew-x-12 bg-gradient-to-tl from-purple-400 via-indigo-500 to-blue-700 bottom-0 right-0 lg:top-0 lg:right-5 opacity-70 lg:opacity-40 blur-3xl">
    </div>
    <div
      class="w-full relative mx-auto md:max-w-5xl lg:max-w-7xl px-5 sm:px-10 md:px-12 lg:px-4 xl:px-1 flex flex-col lg:flex-row gap-10 ">
      <div class="lg:w-1/2 lg:flex-1 flex flex-col lg:py-8 xl:py-12">
        <h1 class="text-4xl sm:text-5xl md:text-6xl font-bold text-blue-950">
          Trouvez la <span class="gradient-span">meilleure</span> solution pour votre business
        </h1>
        <p class="md:text-lg mt-8 text-gray-600">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto deserunt culpa autem nisi sint quibusdam minus
          quasi consectetur, earum, consequatur quia architecto tempore
        </p>
        <div class="flex mt-8">
          <a href="./pages/contact.html"
            class="ripple-behavior-after text-white bg-blue-600 px-8 py-4 rounded-full border border-transparent">
            <span class="relative">
              Obenir un devis
            </span>
          </a>
        </div>
      </div>

      <div
        class="lg:w-1/2 lg:flex-1 lg:flex  bg-white border border-gray-200 p-1.5 shadow-xl shadow-gray-200/50 rounded-3xl">
        <div class="relative lg:w-full h-full">
          <img src="images/hero-img.webp" width="2240" alt="system engineers celebrating successful-code-"
            class="lg:absolute lg:inset-0 w-full rounded-2xl lg:h-full object-cover">
        </div>
      </div>
    </div>

    <div class="relative w-full py-8 lg:py-12 mx-auto md:max-w-5xl lg:max-w-7xl px-5 sm:px-10 md:px-12 lg:px-4 xl:px-1">
      <div
        class="w-full max-w-4xl grid grid-cols-2 md:grid-cols-4 gap-6 gap-y-8 sm:gap-8 md:gap-6 lg:gap-12 rounded-3xl bg-white shadow-lg border-2 border-gray-100 shadow-gray-100/50 p-5 sm:p-8 lg:p-10 ">
        <div class="text-center">
          <h2 class="font-semibold text-2xl md:text-4xl text-teal-950">12+</h2>
          <p class="mt-1 md:mt-2.5 text-gray-600">Projects achieved</p>
        </div>

        <div class="text-center">
          <h2 class="font-semibold text-2xl md:text-4xl text-teal-950">12+</h2>
          <p class="mt-1 md:mt-2.5 text-gray-600">Projects achieved</p>
        </div>

        <div class="text-center">
          <h2 class="font-semibold text-2xl md:text-4xl text-teal-950">12+</h2>
          <p class="mt-1 md:mt-2.5 text-gray-600">Projects achieved</p>
        </div>

        <div class="text-center">
          <h2 class="font-semibold text-2xl md:text-4xl text-teal-950">12+</h2>
          <p class="mt-1 md:mt-2.5 text-gray-600">Projects achieved</p>
        </div>
      </div>
    </div>
  </section>


  <section class="pt-24 lg:pt-32 xl:pt-36 pb-6 relative overflow-hidden">
    <div
      class="absolute w-2/5 md:w-1/5 max-w-md aspect-video rounded-full skew-x-12 bg-gradient-to-tl from-purple-400 via-indigo-500 to-blue-700 bottom-0 right-0  opacity-50 blur-3xl">
    </div>
    <div class="mx-auto md:max-w-5xl lg:max-w-7xl px-5 sm:px-10 md:px-12 lg:px-4 xl:px-1 relative">
      <div class="max-w-3xl space-y-3">
        <span class="text-blue-600 font-semibold">Nos services</span>
        <h1 class="mt-0.5 font-semibold text-gray-800 text-3xl md:text-4xl">
          Nous sommes la pour repondre a vos demandes
        </h1>
        <p class="md:text-lg mt-8 text-gray-600 font-medium">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto deserunt culpa autem
        </p>
      </div>
      <div
        class="pt-8 lg:pt-10 xl:pt-12 grid sm:grid-cols-2 lg:grid-cols-4 gap-8 md:gap-10 lg:gap-4 xl:gap-6 sm:items-stretch">
        <div
          class="rounded-xl h-auto flex flex-col group p-6 md:p-8 lg:p-8 transition-all bg-white shadow-lg border-2 border-gray-100 shadow-gray-100/50 group hover:shadow-xl hover:border-transparent ease-linear">
          <div class="flex justify-center min-h-max">
            <div class="w-auto">
              <img src="images/icons/problem.svg" alt="icon" width="20" height="auto" class="w-auto h-14">
            </div>
          </div>
          <div class="space-y-5 mt-6 text-center">
            <h2 class="font-semibold text-gray-800 text-xl relative">
              Web design
            </h2>
            <p class="text-gray-600 md:text-lg font-medium">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi autem maxime delectus
            </p>
          </div>
        </div>

        <div
          class="rounded-xl h-auto flex flex-col group p-6 md:p-8 lg:p-8 transition-all bg-white shadow-lg border-2 border-gray-100 shadow-gray-100/50 group hover:shadow-xl hover:border-transparent ease-linear">
          <div class="flex justify-center min-h-max">
            <div class="w-auto">
              <img src="images/icons/sales.svg" alt="icon" width="20" height="auto" class="w-auto h-14">
            </div>
          </div>
          <div class="space-y-5 mt-6 text-center">
            <h2 class="font-semibold text-gray-800 text-xl relative">
              Digital Marketing
            </h2>
            <p class="text-gray-600 md:text-lg font-medium">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi autem maxime delectus
            </p>
          </div>
        </div>

        <div
          class="rounded-xl h-auto flex flex-col group p-6 md:p-8 lg:p-8 transition-all bg-white shadow-lg border-2 border-gray-100 shadow-gray-100/50 group hover:shadow-xl hover:border-transparent ease-linear">
          <div class="flex justify-center min-h-max">
            <div class="w-auto">
              <img src="images/icons/website.svg" alt="icon" width="20" height="auto" class="w-auto h-14">
            </div>
          </div>
          <div class="space-y-5 mt-6 text-center">
            <h2 class="font-semibold text-gray-800 text-xl">
              Web Developpement
            </h2>
            <p class="text-gray-600 md:text-lg font-medium">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi autem maxime delectus
            </p>
          </div>
        </div>

        <div
          class="rounded-xl h-auto flex flex-col group p-6 md:p-8 lg:p-8 transition-all bg-white shadow-lg border-2 border-gray-100 shadow-gray-100/50 group hover:shadow-xl hover:border-transparent ease-linear">
          <div class="flex justify-center min-h-max">
            <div class="w-auto">
              <img src="images/icons/seo.svg" alt="icon" width="20" height="auto" class="w-auto h-14">
            </div>
          </div>
          <div class="space-y-5 mt-6 text-center">
            <h2 class="font-semibold text-gray-800 text-xl relative">
              SEO Consultancy
            </h2>
            <p class="text-gray-600 md:text-lg font-medium">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi autem maxime delectus
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="pt-24 lg:pt-32 xl:pt-36 pb-6 relative">
    <div
      class="absolute w-2/5 md:w-1/5 max-w-md aspect-video rounded-full skew-x-12 bg-gradient-to-tl from-purple-400 via-indigo-500 to-blue-700 bottom-0 left-0  opacity-50 blur-3xl">
    </div>
    <div class="mx-auto md:max-w-5xl lg:max-w-7xl px-5 sm:px-10 md:px-12 lg:px-4 xl:px-1 relative">
      <div class="max-w-3xl space-y-3">
        <span class="text-blue-600 font-semibold">Technologies</span>
        <h1 class="mt-0.5 font-semibold text-gray-800 text-3xl md:text-4xl">
          Nos outils et technologies
        </h1>
      </div>
      <div
        class="pt-8 lg:pt-10 xl:pt-12 grid grid-cols-3 sm:grid-cols-4 md:grid-cols-5 lg:grid-cols-6 gap-2 sm:gap-6 md:gap-6 lg:gap-6 sm:items-stretch">
        <div
          class="rounded-xl text-center h-auto flex flex-col group p-3 sm:p-5 md:p-8 lg:p-8 transition-all bg-white shadow-lg border-2 border-gray-100 shadow-gray-100/50 group hover:shadow-xl hover:border-transparent ease-linear">
          <div class="w-auto flex justify-center">
            <img src="techicons/TailwindCSS.svg" alt="icon" width="60" height="auto" class="w-8 md:w-10 h-auto">
          </div>
          <h2 class="font-semibold mt-2 text-gray-800 text-xs sm:text-sm md:text-base lg:text-xl relative">
            TailwindCSS
          </h2>
        </div>

        <div
          class="rounded-xl text-center h-auto flex flex-col group p-3 sm:p-5 md:p-8 lg:p-8 transition-all bg-white shadow-lg border-2 border-gray-100 shadow-gray-100/50 group hover:shadow-xl hover:border-transparent ease-linear">
          <div class="w-auto flex justify-center">
            <img src="techicons/Astro.svg" alt="icon" width="60" height="auto" class="w-8 md:w-10 h-auto">
          </div>
          <h2 class="font-semibold mt-2 text-gray-800 text-xs sm:text-sm md:text-base lg:text-xl relative">
            AstroJs
          </h2>
        </div>
        
        <div
          class="rounded-xl text-center h-auto flex flex-col group p-3 sm:p-5 md:p-8 lg:p-8 transition-all bg-white shadow-lg border-2 border-gray-100 shadow-gray-100/50 group hover:shadow-xl hover:border-transparent ease-linear">
          <div class="w-auto flex justify-center">
            <img src="techicons/JavaScript.svg" alt="icon" width="60" height="auto" class="w-8 md:w-10 h-auto">
          </div>
          <h2 class="font-semibold mt-2 text-gray-800 text-xs sm:text-sm md:text-base lg:text-xl relative">
            Javascript
          </h2>
        </div>
        
        <div
          class="rounded-xl text-center h-auto flex flex-col group p-3 sm:p-5 md:p-8 lg:p-8 transition-all bg-white shadow-lg border-2 border-gray-100 shadow-gray-100/50 group hover:shadow-xl hover:border-transparent ease-linear">
          <div class="w-auto flex justify-center">
            <img src="techicons/TypeScript.svg" alt="icon" width="60" height="auto" class="w-8 md:w-10 h-auto">
          </div>
          <h2 class="font-semibold mt-2 text-gray-800 text-xs sm:text-sm md:text-base lg:text-xl relative">
            TypeScript
          </h2>
        </div>
        
        <div
          class="rounded-xl text-center h-auto flex flex-col group p-3 sm:p-5 md:p-8 lg:p-8 transition-all bg-white shadow-lg border-2 border-gray-100 shadow-gray-100/50 group hover:shadow-xl hover:border-transparent ease-linear">
          <div class="w-auto flex justify-center">
            <img src="techicons/NextJs.svg" alt="icon" width="60" height="auto" class="w-8 md:w-10 h-auto">
          </div>
          <h2 class="font-semibold mt-2 text-gray-800 text-xs sm:text-sm md:text-base lg:text-xl relative">
            NextJs
          </h2>
        </div>
        
        <div
          class="rounded-xl text-center h-auto flex flex-col group p-3 sm:p-5 md:p-8 lg:p-8 transition-all bg-white shadow-lg border-2 border-gray-100 shadow-gray-100/50 group hover:shadow-xl hover:border-transparent ease-linear">
          <div class="w-auto flex justify-center">
            <img src="techicons/React.svg" alt="icon" width="60" height="auto" class="w-8 md:w-10 h-auto">
          </div>
          <h2 class="font-semibold mt-2 text-gray-800 text-xs sm:text-sm md:text-base lg:text-xl relative">
            Reactjs
          </h2>
        </div>

        <div
          class="rounded-xl text-center h-auto flex flex-col group p-3 sm:p-5 md:p-8 lg:p-8 transition-all bg-white shadow-lg border-2 border-gray-100 shadow-gray-100/50 group hover:shadow-xl hover:border-transparent ease-linear">
          <div class="w-auto flex justify-center">
            <img src="techicons/Laravel.svg" alt="icon" width="60" height="auto" class="w-8 md:w-10 h-auto">
          </div>
          <h2 class="font-semibold mt-2 text-gray-800 text-xs sm:text-sm md:text-base lg:text-xl relative">
            Laravel
          </h2>
        </div>
        
        <div
          class="rounded-xl text-center h-auto flex flex-col group p-3 sm:p-5 md:p-8 lg:p-8 transition-all bg-white shadow-lg border-2 border-gray-100 shadow-gray-100/50 group hover:shadow-xl hover:border-transparent ease-linear">
          <div class="w-auto flex justify-center">
            <img src="techicons/MySQL.svg" alt="icon" width="60" height="auto" class="w-8 md:w-10 h-auto">
          </div>
          <h2 class="font-semibold mt-2 text-gray-800 text-xs sm:text-sm md:text-base lg:text-xl relative">
            MySQL
          </h2>
        </div>
        
        <div
          class="rounded-xl text-center h-auto flex flex-col group p-3 sm:p-5 md:p-8 lg:p-8 transition-all bg-white shadow-lg border-2 border-gray-100 shadow-gray-100/50 group hover:shadow-xl hover:border-transparent ease-linear">
          <div class="w-auto flex justify-center">
            <img src="techicons/Vite.svg" alt="icon" width="60" height="auto" class="w-8 md:w-10 h-auto">
          </div>
          <h2 class="font-semibold mt-2 text-gray-800 text-xs sm:text-sm md:text-base lg:text-xl relative">
            ViteJs
          </h2>
        </div>
        
        <div
          class="rounded-xl text-center h-auto flex flex-col group p-3 sm:p-5 md:p-8 lg:p-8 transition-all bg-white shadow-lg border-2 border-gray-100 shadow-gray-100/50 group hover:shadow-xl hover:border-transparent ease-linear">
          <div class="w-auto flex justify-center">
            <img src="techicons/NuxtJs.svg" alt="icon" width="60" height="auto" class="w-8 md:w-10 h-auto">
          </div>
          <h2 class="font-semibold mt-2 text-gray-800 text-xs sm:text-sm md:text-base lg:text-xl relative">
            NuxtJs
          </h2>
        </div>
        
        <div
          class="rounded-xl text-center h-auto flex flex-col group p-3 sm:p-5 md:p-8 lg:p-8 transition-all bg-white shadow-lg border-2 border-gray-100 shadow-gray-100/50 group hover:shadow-xl hover:border-transparent ease-linear">
          <div class="w-auto flex justify-center">
            <img src="techicons/Vue.svg" alt="icon" width="60" height="auto" class="w-8 md:w-10 h-auto">
          </div>
          <h2 class="font-semibold mt-2 text-gray-800 text-xs sm:text-sm md:text-base lg:text-xl relative">
            VueJs
          </h2>
        </div>
        
        <div
          class="rounded-xl text-center h-auto flex flex-col group p-3 sm:p-5 md:p-8 lg:p-8 transition-all bg-white shadow-lg border-2 border-gray-100 shadow-gray-100/50 group hover:shadow-xl hover:border-transparent ease-linear">
          <div class="w-auto flex justify-center">
            <img src="techicons/HTML5.svg" alt="icon" width="60" height="auto" class="w-8 md:w-10 h-auto">
          </div>
          <h2 class="font-semibold mt-2 text-gray-800 text-xs sm:text-sm md:text-base lg:text-xl relative">
            HTML5
          </h2>
        </div>
        
        <div
          class="rounded-xl text-center h-auto flex flex-col group p-3 sm:p-5 md:p-8 lg:p-8 transition-all bg-white shadow-lg border-2 border-gray-100 shadow-gray-100/50 group hover:shadow-xl hover:border-transparent ease-linear">
          <div class="w-auto flex justify-center">
            <img src="techicons/CSS3.svg" alt="icon" width="60" height="auto" class="w-8 md:w-10 h-auto">
          </div>
          <h2 class="font-semibold mt-2 text-gray-800 text-xs sm:text-sm md:text-base lg:text-xl relative">
            CSS3
          </h2>
        </div>
        
        <div
          class="rounded-xl text-center h-auto flex flex-col group p-3 sm:p-5 md:p-8 lg:p-8 transition-all bg-white shadow-lg border-2 border-gray-100 shadow-gray-100/50 group hover:shadow-xl hover:border-transparent ease-linear">
          <div class="w-auto flex justify-center">
            <img src="techicons/PHP.svg" alt="icon" width="60" height="auto" class="w-8 md:w-10 h-auto">
          </div>
          <h2 class="font-semibold mt-2 text-gray-800 text-xs sm:text-sm md:text-base lg:text-xl relative">
            PHP
          </h2>
        </div>
        
        <div
          class="rounded-xl text-center h-auto flex flex-col group p-3 sm:p-5 md:p-8 lg:p-8 transition-all bg-white shadow-lg border-2 border-gray-100 shadow-gray-100/50 group hover:shadow-xl hover:border-transparent ease-linear">
          <div class="w-auto flex justify-center">
            <img src="techicons/Vercel.svg" alt="icon" width="60" height="auto" class="w-8 md:w-10 h-auto">
          </div>
          <h2 class="font-semibold mt-2 text-gray-800 text-xs sm:text-sm md:text-base lg:text-xl relative">
            Vercel
          </h2>
        </div>
        
        <div
          class="rounded-xl text-center h-auto flex flex-col group p-3 sm:p-5 md:p-8 lg:p-8 transition-all bg-white shadow-lg border-2 border-gray-100 shadow-gray-100/50 group hover:shadow-xl hover:border-transparent ease-linear">
          <div class="w-auto flex justify-center">
            <img src="techicons/Bootstrap.svg" alt="icon" width="60" height="auto" class="w-8 md:w-10 h-auto">
          </div>
          <h2 class="font-semibold mt-2 text-gray-800 text-xs sm:text-sm md:text-base lg:text-xl relative">
            Bootstrap
          </h2>
        </div>
      </div>
    </div>
  </section>

  <section class="pt-24 lg:pt-32 pb-6">
    <div class="mx-auto md:max-w-5xl lg:max-w-7xl px-5 sm:px-10 md:px-12 lg:px-4 xl:px- space-y-8 md:space-y-10">
      <div class="max-w-3xl space-y-3">
        <span class="text-blue-600 font-semibold">Nos realistion</span>
        <h1 class="mt-0.5 font-semibold text-gray-800 text-3xl md:text-4xl">
          Nos realistions les plus recentes
        </h1>
        <p class="md:text-lg mt-8 text-gray-600">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto deserunt culpa autem
        </p>
      </div>

      <div class="swiper !pt-8 swiperRecentProject">
        <div class="swiper-wrapper !items-stretch">

          <div class="swiper-slide !bg-transparent">
            <div
              class="rounded-xl h-auto flex flex-col group p-1 transition-all bg-white border-2 border-gray-100 group">
              <div class="w-full overflow-hidden  h-56 md:h-64 xl:h-72 bg-gray-100 rounded-lg px-4">
                <img class="w-full h-auto" src="porfolio/demoSite.png" alt="Image illustration" width="2131"
                  height="1792" />
              </div>
              <div class="space-y-5 mt-6  px-5 md:px-7 pb-5 md:pb-7">
                <a href="pages/single-project.html" class="font-semibold text-gray-800 text-xl ">Podux landing page</a>
                <p class="text-base md:text-lg line-clamp-2">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Culpa
                  ipsa delectus quod?</p>
                <div class="flex">
                  <a href="https://podcas-landing-page.vercel.app" target="_blank" class="btn-underlined">
                    Visiter
                  </a>
                </div>
              </div>
            </div>
          </div>

          <div class="swiper-slide !bg-transparent">
            <div
              class="rounded-xl h-auto flex flex-col group p-1 transition-all bg-white border-2 border-gray-100 group">
              <div class="w-full overflow-hidden  h-56 md:h-64 xl:h-72 bg-gray-100 rounded-lg px-4">
                <img class="w-full h-auto" src="porfolio/demoSite2.png" alt="Image illustration" width="2131"
                  height="1792" />
              </div>
              <div class="space-y-5 mt-6  px-5 md:px-7 pb-5 md:pb-7">
                <a href="pages/single-project.html" class="font-semibold text-gray-800 text-xl ">Developer personal website</a>
                <p class="text-base md:text-lg line-clamp-2">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Culpa
                  ipsa delectus quod?</p>
                <div class="flex">
                  <a href="https://devolio-template.vercel.app/" target="_blank" class="btn-underlined">
                    Visiter
                  </a>
                </div>
              </div>
            </div>
          </div>

          <div class="swiper-slide !bg-transparent">
            <div
              class="rounded-xl h-auto flex flex-col group p-1 transition-all bg-white border-2 border-gray-100 group">
              <div class="w-full overflow-hidden  h-56 md:h-64 xl:h-72 bg-gray-100 rounded-lg px-4">
                <img class="w-full h-auto" src="porfolio/demoSite.png" alt="Image illustration" width="2131"
                  height="1792" />
              </div>
              <div class="space-y-5 mt-6  px-5 md:px-7 pb-5 md:pb-7">
                <a href="pages/single-project.html" class="font-semibold text-gray-800 text-xl ">Podux landing page</a>
                <p class="text-base md:text-lg line-clamp-2">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Culpa
                  ipsa delectus quod?</p>
                <div class="flex">
                  <a href="#" target="_blank" class="btn-underlined">
                    Visiter
                  </a>
                </div>
              </div>
            </div>
          </div>

          <div class="swiper-slide !bg-transparent">
            <div
              class="rounded-xl h-auto flex flex-col group p-1 transition-all bg-white border-2 border-gray-100 group">
              <div class="w-full overflow-hidden  h-56 md:h-64 xl:h-72 bg-gray-100 rounded-lg px-4">
                <img class="w-full h-auto" src="porfolio/demoSite.png" alt="Image illustration" width="2131"
                  height="1792" />
              </div>
              <div class="space-y-5 mt-6  px-5 md:px-7 pb-5 md:pb-7">
                <a href="pages/single-project.html" class="font-semibold text-gray-800 text-xl ">Podux landing page</a>
                <p class="text-base md:text-lg line-clamp-2">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Culpa
                  ipsa delectus quod?</p>
                <div class="flex">
                  <a href="#" target="_blank" class="btn-underlined">
                    Visiter
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="flex flex-wrap items-center gap-7">
        <div class="min-w-max ">
          <a href="pages/portfolio.html"
            class="bg-blue-600 text-white px-8 py-4 rounded-full border border-transparent">
            Voir plus
          </a>
        </div>
        <div class="flex gap-3 items-center p-1.5 bg-gray-100 rounded-full">
          <button
            class="swip-prev-RecentProject p-3 flex outline-none bg-gray-200 rounded-3xl duration-300 ease-linear active:bg-gray-300 text-gray-600 active:text-gray-700">
            <span class="sr-only">swiper btn</span>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
              <path fill-rule="evenodd"
                d="M12.79 5.23a.75.75 0 01-.02 1.06L8.832 10l3.938 3.71a.75.75 0 11-1.04 1.08l-4.5-4.25a.75.75 0 010-1.08l4.5-4.25a.75.75 0 011.06.02z"
                clip-rule="evenodd" />
            </svg>
          </button>
          <div class="RecentProject-swiper-pagination px-1 flex gap-1">
          </div>
          <button
            class="swip-next-RecentProject p-3 flex outline-none bg-gray-200 rounded-3xl duration-300 ease-linear active:bg-gray-300 text-gray-600 active:text-gray-700">
            <span class="sr-only">swiper btn</span>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
              <path fill-rule="evenodd"
                d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                clip-rule="evenodd" />
            </svg>
          </button>
        </div>
      </div>
    </div>
  </section>

  <section class="pt-24 lg:pt-32 pb-6">
    <div
      class="mx-auto md:max-w-5xl lg:max-w-7xl px-5 sm:px-10 md:px-12 lg:px-4 xl:px-1 flex flex-col mdmid:flex-row gap-10 lg:gap-12">
      <div
        class="mdmid:w-1/2 mdmid:flex-1 lg:flex  bg-white border border-gray-200 p-1.5 shadow-xl shadow-gray-200/50 rounded-3xl">
        <div class="relative lg:w-full h-full">
          <img src="images/happy-work.webp" width="2240" alt="front-view-two-business-managers-showing-winning-gesture"
            class="mdmid:absolute mdmid:inset-0 w-full rounded-2xl mdmid:h-full object-cover">
        </div>
      </div>

      <div class="mdmid:w-1/2 mdmid:flex-1 flex flex-col">
        <span class="text-blue-600 font-semibold">A propos de nous</span>
        <h1 class="mt-0.5 font-semibold text-gray-800 text-3xl md:text-4xl">
          Une agence qui booste votre business
        </h1>
        <p class="md:text-lg mt-8 text-gray-600">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto deserunt culpa autem nisi sint quibusdam minus
          quasi consectetur, earum, consequatur quia architecto tempore ullam suscipit laborum,
        </p>
        <ul class="mt-4 list-image-[url(checkmark.png)] pl-6 flex flex-col space-y-4">
          <li>Lorem ipsum dolor sit amet consectetur</li>
          <li>Lorem ipsum dolor sit amet consectetur</li>
          <li>Lorem ipsum dolor sit amet consectetur</li>
          <li>Lorem ipsum dolor sit amet consectetur</li>
          <li>Lorem ipsum dolor sit amet consectetur</li>
        </ul>
        <div class="mt-10 flex">
          <a href="about.html" class="border-blue-600 px-8 py-4 rounded-full border text-blue-600">
            En savoir plus
          </a>
        </div>
      </div>
    </div>
  </section>


  <section class="pt-24 lg:pt-32 pb-6">
    <div class="mx-auto md:max-w-5xl lg:max-w-7xl px-5 sm:px-10 md:px-12 lg:px-4 xl:px-1">
      <div class="max-w-3xl space-y-3">
        <span class="text-blue-600 font-semibold">Pourquoi nous?</span>
        <h1 class="mt-0.5 font-semibold text-gray-800 text-3xl md:text-4xl">
          Une agence qui booste votre business
        </h1>
        <p class="md:text-lg mt-8 text-gray-600">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto deserunt culpa autem nisi sint quibusdam minus
          quasi consectetur, earum, consequatur quia architecto tempore ullam suscipit laborum,
        </p>
      </div>
    </div>
    <div
      class="mx-auto pt-16 md:max-w-5xl lg:max-w-7xl px-5 sm:px-10 md:px-12 lg:px-4 xl:px-1 flex flex-col mdmid:flex-row gap-10 xl:gap-14">
      <div class="mdmid:w-1/2 mdmid:flex-1 flex flex-col space-y-5 md:gap-y-6 mdmid:py-4 xl:py-6">
        <div class="flex gap-5 sm:gap-6  items-start">
          <div class="min-w-max flex">
            <span class="p-4 rounded-2xl bg-blue-600 text-white">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                  d="M11.35 3.836c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m8.9-4.414c.376.023.75.05 1.124.08 1.131.094 1.976 1.057 1.976 2.192V16.5A2.25 2.25 0 0118 18.75h-2.25m-7.5-10.5H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V18.75m-7.5-10.5h6.375c.621 0 1.125.504 1.125 1.125v9.375m-8.25-3l1.5 1.5 3-3.75" />
              </svg>
            </span>
          </div>
          <div class="space-y-1">
            <h2 class="text-xl font-semibold text-gray-800">
              Du sur mesure
            </h2>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto deserunt culpa autem
            </p>
          </div>
        </div>

        <div class="flex gap-5 sm:gap-6  items-start">
          <div class="min-w-max flex">
            <span class="p-4 rounded-2xl bg-blue-600 text-white">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                  d="M14.25 7.756a4.5 4.5 0 100 8.488M7.5 10.5h5.25m-5.25 3h5.25M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
            </span>
          </div>
          <div class="space-y-1">
            <h2 class="text-xl font-semibold text-gray-800">
              Du sur mesure
            </h2>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto deserunt culpa autem
            </p>
          </div>
        </div>

        <div class="flex gap-5 sm:gap-6  items-start">
          <div class="min-w-max flex">
            <span class="p-4 rounded-2xl bg-blue-600 text-white">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                  d="M15.362 5.214A8.252 8.252 0 0112 21 8.25 8.25 0 016.038 7.048 8.287 8.287 0 009 9.6a8.983 8.983 0 013.361-6.867 8.21 8.21 0 003 2.48z" />
                <path stroke-linecap="round" stroke-linejoin="round"
                  d="M12 18a3.75 3.75 0 00.495-7.467 5.99 5.99 0 00-1.925 3.546 5.974 5.974 0 01-2.133-1A3.75 3.75 0 0012 18z" />
              </svg>
            </span>
          </div>
          <div class="space-y-1">
            <h2 class="text-xl font-semibold text-gray-800">
              Du sur mesure
            </h2>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto deserunt culpa autem
            </p>
          </div>
        </div>

      </div>

      <div
        class="mdmid:w-1/2 mdmid:flex-1 lg:flex  bg-white border border-gray-200 p-1.5 shadow-xl shadow-gray-200/50 rounded-3xl">
        <div class="relative lg:w-full h-full">
          <img src="images/hero-img.webp" width="2240" alt="system engineers celebrating successful-code-"
            class="mdmid:absolute mdmid:inset-0 w-full rounded-2xl mdmid:h-full object-cover">
        </div>
      </div>
    </div>
  </section>



  <!-- temoignages -->
  <section class="pt-24 lg:pt-32 pb-6 overflow-hidden">
    <div class="mx-auto md:max-w-5xl lg:max-w-7xl px-5 sm:px-10 md:px-12 lg:px-4 xl:px- space-y-8 md:space-y-10">
      <div class="max-w-3xl space-y-3">
        <span class="text-blue-600 font-semibold">Temoignages</span>
        <h1 class="mt-0.5 font-semibold text-gray-800 text-3xl md:text-4xl">
          Ce qu'ils disent de nous
        </h1>
        <p class="md:text-lg mt-8 text-gray-600">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto deserunt culpa autem
        </p>
      </div>

      <div class="pt-10 flex flex-col mdmid:flex-row gap-10 lg:gap-12">
        <div class="mdmid:w-1/2 mdmid:flex-1 hidden mdmid:flex items-center justify-center">
          <img src="images/illustattion1.png" width="1600" height="1200"
            alt="front-view-two-business-managers-showing-winning-gesture" class="w-auto h-auto">
        </div>

        <div class="mdmid:w-1/2 mdmid:flex-1 flex flex-col md:py-4 lg:py-8 max-w-lg mdmid:max-w-none">
          <div class="swiper swipertestimonial w-full">
            <div class="swiper-wrapper">

              <div class="swiper-slide !bg-transparent !h-auto">
                <div class="flex h-full flex-col gap-1 sm:py-6 ">
                  <blockquote class="md:pb-5 pt-6 md:pt-0 w-full">
                    <p class="text-gray-600 font-medium text-lg lg:text-2xl md:leading-9 md:text-lg leading-6">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, praesentium perspiciatis. Eum
                      nobis repudiandae blanditiis excepturi suscipit, unde facere tempore laborum asperiores libero
                      saepe deleniti aliquid soluta provident? Eum, exercitationem?
                    </p>
                  </blockquote>
                  <div class="pt-1 flex items-center gap-4 md:max-w-xs">
                    <img alt="image of - John doe" loading="lazy" width="1700" height="1200"
                      class="w-12 h-12 object-cover rounded-full" src="images/happy-work.webp">
                    <div class="flex flex-col">
                      <span class="text-title font-medium text-lg">John doe</span>
                      <span class="text-text">CEO at Grace corp</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide !bg-transparent !h-auto">
                <div class="flex h-full flex-col gap-1 sm:py-6 ">
                  <blockquote class="md:pb-5 pt-6 md:pt-0">
                    <p class="text-gray-600 font-medium text-lg lg:text-2xl md:leading-9 md:text-lg leading-6">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, praesentium perspiciatis. Eum
                      nobis repudiandae blanditiis excepturi suscipit, unde facere tempore laborum asperiores libero
                      saepe deleniti aliquid soluta provident? Eum, exercitationem?
                    </p>
                  </blockquote>
                  <div class="pt-1 flex items-center gap-4 md:max-w-xs">
                    <img alt="image of - John doe" loading="lazy" width="1700" height="1200"
                      class="w-12 h-12 object-cover rounded-full" src="images/happy-work.webp">
                    <div class="flex flex-col">
                      <span class="text-title font-medium text-lg">John doe</span>
                      <span class="text-text">CEO at Grace corp</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="flex gap-3 items-center p-1.5 bg-gray-100 rounded-full mt-4 w-max max-w-full">
            <button class="swip-prev-testimonial ">
              <span class="sr-only">swiper btn</span>
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                <path fill-rule="evenodd"
                  d="M12.79 5.23a.75.75 0 01-.02 1.06L8.832 10l3.938 3.71a.75.75 0 11-1.04 1.08l-4.5-4.25a.75.75 0 010-1.08l4.5-4.25a.75.75 0 011.06.02z"
                  clip-rule="evenodd" />
              </svg>
            </button>
            <div class="testimonial-swiper-pagination px-1 flex gap-1">
            </div>
            <button class="swip-next-testimonial">
              <span class="sr-only">swiper btn</span>
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                <path fill-rule="evenodd"
                  d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                  clip-rule="evenodd" />
              </svg>
            </button>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="relative py-20 md:py-24 lg:py-32">
    <div class="mx-auto md:max-w-5xl lg:max-w-7xl px-5 sm:px-10 md:px-12 lg:px-4 xl:px-1">
      <div class="text-center p-10 md:py-12 lg:py-14 bg-gray-100 rounded-3xl">
        <div class="mb-4 flex justify-center text-left ">
          <a href="index.html"
            class="flex items-center gap-2 font-semibold text-gray-600 text-lg p-2 rounded-md bg-white">
            <div class="relative w-5 h-7">
              <span class="absolute inset-y-0 w-1.5 rounded-lg bg-blue-600"></span>
              <span class="absolute top-0 inset-x-0 h-1.5 rounded-lg bg-purple-600"></span>
              <span class="absolute top-1/2 inset-x-1 h-1.5 bg-gray-700 rounded-lg"></span>
            </div>
            Fintch Wb
          </a>
        </div>
        <div class="mx-auto max-w-4xl">
          <h2 class="text-3xl font-semibold sm:text-4xl md:text-6xl sm:font-bold">
            Vous avez un projet ? Alors n'attendez pas plus
          </h2>
          <p class="mt-4 text-xl font-medium text-gray-700 md:text-lg">
            Lorem ipsum dolor sit amet consectetur
          </p>

          <div class="flex mt-8 justify-center gap-4 flex-col sm:flex-row">
            <a href="#"
              class="ripple-behavior-after flex justify-center w-full sm:w-max text-white bg-blue-600 px-8 py-4 rounded-full border border-transparent">
              <span class="relative">
                Obenir un devis
              </span>
            </a>
            <a href="pages/about.html"
              class="flex justify-center w-full sm:w-max text-blue-600 px-8 py-4 rounded-full border border-blue-600">
              En savoir plus
            </a>
          </div>
        </div>

      </div>
    </div>
  </section>

  <footer class="pt-24 bg-gray-100 overflow-hidden">
    <div class="mx-auto md:max-w-5xl lg:max-w-7xl px-5 sm:px-10 md:px-12 lg:px-4 xl:px-1">
      <div class="pb-20 border-b">
        <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-8 py-10 lg:gap-10 xl:gap-12">
          <div class="w-full col-span-2">
            <div class="lg:max-w-sm">
              <div class="mb-4 max-w-max ">
                <a href="index.html"
                  class="flex items-center gap-2 font-semibold text-gray-600 text-lg p-2 rounded-md bg-white">
                  <div class="relative w-5 h-7">
                    <span class="absolute inset-y-0 w-1.5 rounded-lg bg-blue-600"></span>
                    <span class="absolute top-0 inset-x-0 h-1.5 rounded-lg bg-purple-600"></span>
                    <span class="absolute top-1/2 inset-x-1 h-1.5 bg-gray-700 rounded-lg"></span>
                  </div>
                  Fintch Wb
                </a>
              </div>
              <p class="mb-5 font-sans text-gray-600 leading-relaxed">Lorem ipsum dolor sit amet, consectetur adipiscing
                elit.</p>

            </div>
          </div>
          <div class="text-gray-600 md:text-lg font-medium">
            <h2 class="mb-6 text-gray-800 leading-normal text-lg md:text-xl font-semibold">Entreprise</h3>
              <ul class="space-y-3">
                <li>
                  <a class="duration-300 ease-linear hover:text-blue-600" href="#">A propos</a>
                </li>
                <li>
                  <a class="duration-300 ease-linear hover:text-blue-600" href="#">Porfolio</a>
                </li>
                <li><a class="duration-300 ease-linear hover:text-blue-600" href="#">Services</a></li>
              </ul>
          </div>
          <div class="text-gray-600 md:text-lg font-medium">
            <h2 class="mb-6 text-gray-800 leading-normal text-lg md:text-xl font-semibold">Pages</h2>
            <ul class="space-y-3">
              <li><a class="duration-300 ease-linear hover:text-blue-600" href="#">A propos</a></li>
              <li><a class="duration-300 ease-linear hover:text-blue-600" href="#">Contact</a></li>
              <li>
                <a class="duration-300 ease-linear hover:text-blue-600" href="#">Porfolio</a>
              </li>
            </ul>
          </div>
          <div class="text-gray-600 md:text-lg font-medium">
            <h2 class="mb-6 text-gray-800 leading-normal text-lg md:text-xl font-semibold">Liens utils</h2>
            <ul class="space-y-3">
              <li><a class="duration-300 ease-linear hover:text-blue-600" href="#">E-commerce app</a></li>
              <li><a class="duration-300 ease-linear hover:text-blue-600" href="#">
                  Scool sasa
                </a></li>
              <li><a class="duration-300 ease-linear hover:text-blue-600" href="#">Equipe</a></li>
            </ul>
          </div>
          <div class="text-gray-600 md:text-lg font-medium">
            <h2 class="mb-6 text-gray-800 leading-normal text-lg md:text-xl font-semibold">Resources</h2>
            <ul class="space-y-3">
              <li><a class="duration-300 ease-linear hover:text-blue-600" href="#">Termes & condition</a></li>
              <li><a class="duration-300 ease-linear hover:text-blue-600" href="#">Services</a></li>
              <li><a class="duration-300 ease-linear hover:text-blue-600" href="#">Produit</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="flex flex-wrap w-full justify-center sm:justify-between items-center py-6 gap-6">
        <div class="">
          <p class="text-sm text-gray-600 font-medium md:text-lg">Copyright &copy; <span id="year"></span> fintchweb.
            All Rights Reserved</p>
        </div>
        <div class="">
          <div class="flex gap-3 justify-center text-gray-600 items-center">
            <a href="#" target="_blank">
              <span class="sr-only">sociale icon</span>
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="w-5 h-5"
                viewBox="0 0 16 16">
                <path
                  d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
              </svg>
            </a>
            <a href="#" target="_blank">
              <span class="sr-only">sociale icon</span>
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="w-5 h-5"
                viewBox="0 0 16 16">
                <path
                  d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z" />
              </svg>
            </a>
            <a href="#" target="_blank">
              <span class="sr-only">sociale icon</span>
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="w-5 h-5"
                viewBox="0 0 16 16">
                <path
                  d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
              </svg>
            </a>
          </div>
        </div>
      </div>
    </div>
  </footer>

  
  
  <script src="assets/main.js"></script>
  <script src="assets/js/productslide.js"></script>
</body>

</html>