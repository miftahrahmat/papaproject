<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts --><link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap"
  rel="stylesheet" />
    <!-- Scripts -->
    @vite('resources/css/app.css')
    @vite('resources/sass/app.scss')
    @vite('resources/js/app.js')
    @yield('css')
</script>
</head>
<body class="">
    <main class="max-w-[460px] mx-auto">
        @yield('content')
    </main>
    @yield('js')
    
</body>