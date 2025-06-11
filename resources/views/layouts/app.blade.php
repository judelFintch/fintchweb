
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <link rel="icon" type="image/svg+xml" href="favico.svg" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">

  <title>@yield('title') </title>
  <meta name="description" content="Agence de developpement logiciel">
  <link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@400;500;600;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="{{asset('assets/main.css')}}">
  <link rel="stylesheet" href="{{asset('assets/productslide.css')}}">
  @livewireStyles
</head>

    
<body class="overflow-y-auto !overflow-x-hidden">
            @include('partials.nav')
                @yield('content')
            @include('partials.footer')
  <script src="{{asset('assets/main.js')}}"></script>
  <script src="{{asset('assets/js/productslide.js')}}"></script>
  @livewireScripts
    </body>
</html>




