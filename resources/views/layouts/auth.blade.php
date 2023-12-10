<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

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
<body class="max-w-[460px] mx-auto">
<div class="w-full">
        <!-- <section id="bottom-navigation" class="md:hidden block fixed inset-x-0 bottom-0 z-10 bg-white shadow"> // if shown only tablet/mobile-->
          <section id="bottom-navigation" class="block bg-white max-w-[460px] mx-auto fixed inset-x-0 bottom-0 z-10 shadow">
            <div id="tabs" class="flex justify-between border-t-2 border-sky-300">
                <a href="{{ url('/') }}" class="w-1/2 text-slate-700 focus:text-sky-700 hover:text-sky-700 justify-center inline-block text-center pt-2 pb-1">
                    <i class="fa-solid fa-home fa-lg"></i>
                    <span class="tab tab-home block text-xs">Beranda</span>
                </a>
                <a href="#" class="w-1/2  text-slate-700 focus:text-sky-700 hover:text-sky-700 justify-center inline-block text-center pt-2 pb-1">
                    <i class="fa-solid fa-bag-shopping fa-lg"></i>
                    <span class="tab tab-kategori block text-xs">Toko Papa</span>
                </a>
                @guest
                <a href="{{ route('login') }}" class="w-1/2 text-slate-700 focus:text-sky-700 hover:text-sky-700 justify-center inline-block text-center pt-2 pb-1">
                    <i class="fa fa-user fa-lg"></i>
                    <span class="tab tab-account block text-xs">Login</span>
                </a>
                @else
                <a href="{{ route('inbox') }}" class="w-1/2 text-slate-700 focus:text-sky-700 hover:text-sky-700 justify-center inline-block text-center pt-2 pb-1">
                    <i class="fa-solid fa-envelope fa-lg relative"></i>
                    @if($pesan > 0)
                    <span class="absolute -ml-2 -mt-1 rounded-full bg-danger px-[0.50em] py-[0.25em] text-[0.6rem] font-bold leading-none text-white">
                      {{ $pesan }}
                    </span>
                    @endif
                    <span class="relative tab tab-account block text-xs">Inbox
      
                </a>
                <a href="{{ route('akun') }}" class="w-1/2  text-slate-700 focus:text-sky-700 hover:text-sky-700 justify-center inline-block text-center pt-2 pb-1">
                    <i class="fa-solid fa-user fa-lg"></i>
                    <span class="tab tab-account block text-xs">Akun Saya</span>
                </a>
                @endguest

            </div>
        </section>
    </div>
    <main class="min-h-screen max-w-[460px]">
        @yield('content')
    </main>
    @yield('js')
    
</body>