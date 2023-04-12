@extends('layouts.app')
@section('title', 'Fintch Web')
 @section('content')
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
        Nous proposons une gamme complète de services pour répondre à tous vos besoins en matière de site web, notamment la conception et le développement de sites web personnalisés, le web design, l'hébergement, la maintenance et le support technique. Nous offrons également des services de développement de logiciels et d'applications web sur mesure, ainsi que des solutions d'intégration de système de gestion de contenu (CMS)
        
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
          <h2 class="font-semibold text-2xl md:text-4xl text-teal-950">956+ k</h2>
          <p class="mt-1 md:mt-2.5 text-gray-600">Lines de Codes </p>
        </div>

        <div class="text-center">
          <h2 class="font-semibold text-2xl md:text-4xl text-teal-950">65 +</h2>
          <p class="mt-1 md:mt-2.5 text-gray-600">Projets Livres</p>
        </div>

        <div class="text-center">
          <h2 class="font-semibold text-2xl md:text-4xl text-teal-950">50 +</h2>
          <p class="mt-1 md:mt-2.5 text-gray-600">Clients</p>
        </div>

        <div class="text-center">
          <h2 class="font-semibold text-2xl md:text-4xl text-teal-950"> 40 +</h2>
          <p class="mt-1 md:mt-2.5 text-gray-600">Site internet</p>
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
        Fintchweb offres une gamme complète de services de développement web et informatique pour répondre à tous vos besoins en ligne. Voici un aperçu de nos services
        </h1>
        <p class="md:text-lg mt-8 text-gray-600 font-medium">
        
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
              Conception des logiciels
            </h2>
            <p class="text-gray-600 md:text-lg font-medium">
            
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
              Hebergement web
            </h2>
            <p class="text-gray-600 md:text-lg font-medium">
              
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
               Marketing Digital
            </h2>
            <p class="text-gray-600 md:text-lg font-medium">
              
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
            Création de contenu
            <p class="text-gray-600 md:text-lg font-medium">
              
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
            Consulting informatique
            <p class="text-gray-600 md:text-lg font-medium">
              
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
            Maintenance de sites web
            </h2>
            <p class="text-gray-600 md:text-lg font-medium">
            
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
        <span class="text-blue-600 font-semibold">Technologies utilisées</span>
        <h3 class="mt-0.5 font-semibold text-gray-800 text-3xl md:text-4xl">
        Nous utilisons les dernières technologies en matière de développement web et informatique pour créer des solutions innovantes et performantes
        </h3>
        <p class="md:text-lg mt-8 text-gray-600">
        Nous offrons des solutions sur mesure pour créer des sites web professionnels, des applications en ligne, des systèmes de gestion de contenu personnalisés, des plateformes de commerce électronique, et bien plus encore
        </p>
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
        Chez Fintchweb, nous sommes passionnés par la création de solutions web innovantes qui permettent à nos clients de se démarquer de la concurrence. Nous avons réalisé de nombreux projets au fil des ans, allant de la création de sites web professionnels pour des entreprises locales à la mise en place de systèmes de gestion de contenu et d'applications en ligne pour des clients internationaux
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
                <p class="text-base md:text-lg line-clamp-2"> 
                Podux est une plateforme de podcast qui permet aux utilisateurs de publier, lire et suivre des podcasts en temps réel sur plusieurs sujets. Avec notre plateforme, les utilisateurs peuvent facilement trouver et écouter leurs podcasts préférés, découvrir de nouveaux contenus et interagir avec d'autres auditeurs. 
                  </p>
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
                <p class="text-base md:text-lg line-clamp-2">Nous avons développé un template pour  site internet professionnel dans le but d'aider les développeurs backend à se concentrer sur l'essentiel</p>
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
      Fintchwebs est une entreprise innovante, axée sur les résultat et passionnés par l'utilisation de la technologie pour aider les entreprises à atteindre leur plein potentiel.

        Nous comprenons que chaque entreprise est unique et que chaque projet est différent. C'est pourquoi notre équipe de professionnels expérimentés travaille en étroite collaboration avec chaque client pour comprendre leurs besoins spécifiques et leur offrir des solutions sur mesure.
        </p>
        <ul class="mt-4 list-image-[url(checkmark.png)] pl-6 flex flex-col space-y-4">
          <li>Nous sommes spécialisés dans la conception de logiciels sur mesure pour répondre à vos besoins spécifiques</li>
          <li>Notre équipe de conception travaille en étroite collaboration avec chaque client pour créer des sites Web dynamiques et attrayants</li>
          <li>Nous offrons des solutions de marketing numérique complètes, y compris la publicité en ligne, les réseaux sociaux et le référencement</li>
          <li>Nous utilisons les dernières technologies et les meilleures pratiques du secteur pour garantir des résultats exceptionnels à chaque projet</li>
          <li>Nous sommes disponibles pour répondre à toutes vos questions et vous guider tout au long du processus, pour vous assurer que vous êtes satisfait de notre travail</li>

          <li>Nous offrons des tarifs compétitifs et des délais de livraison rapides, pour vous permettre de réaliser votre projet dans les meilleurs délais</li>
        </ul>
        <div class="mt-10 flex">
          <a href="#" class="border-blue-600 px-8 py-4 rounded-full border text-blue-600">
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
        Nous offrons une large gamme de services, y compris la conception de logiciels sur mesure, la création de sites Web dynamiques et la mise en place de stratégies de marketing numérique efficaces. Nous travaillons avec des clients de toutes tailles et de tous secteurs d'activité, ce qui nous permet de comprendre et de répondre à leurs besoins spécifiques.

        Notre équipe de professionnels expérimentés possède une vaste expérience dans la conception de logiciels, la création de sites Web et le marketing numérique, ce qui nous permet de fournir un service exceptionnel à chaque étape du processus. Nous offrons des tarifs compétitifs et des délais de livraison rapides pour vous permettre de réaliser votre projet dans les meilleurs délais.
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
            Satisfaction du client est primordiale
            </h2>
            <p>
            Nous sommes en mesure de personnaliser nos solutions en fonction des spécifications de chaque client, en utilisant les dernières technologies et méthodologies
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
            Approche créative
            </h2>
            <p>
             Pour résoudre les problèmes et trouver des solutions innovantes
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
              Rapidité d'execution
            </h2>
            <p>
            Nous avons des processus bien établis pour assurer la rapidité d'exécution de chaque projet, tout en garantissant la qualité du travail
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
          Nous sommes impatients de travailler avec vous pour réaliser votre projet et pour créer des résultats exceptionnels pour votre entreprise
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
@endsection()