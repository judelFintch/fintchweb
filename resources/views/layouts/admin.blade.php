<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ $title ?? 'Back-office Fintch Web' }}</title>
  <link rel="icon" type="image/svg+xml" href="/favico.svg">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('assets/main.css') }}">
  @livewireStyles
</head>
<body class="min-h-screen bg-slate-100 text-slate-900">
  {{ $slot }}
  @livewireScripts
</body>
</html>
