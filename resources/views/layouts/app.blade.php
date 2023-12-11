<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap" rel="stylesheet" />
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/sass/app.scss', 'resources/js/app.js'])
    @yield('css')
<style type="text/css">
.preloading-site {
    overflow: hidden;
}

.preloading-wrapper {
    height: 100%;
    width: 100%;
    background: #FFF;
    position: fixed;
    top: 0;
    left: 0;
    z-index: 9999999;
}

.preloading-wrapper .preloading {
    position: absolute;
    top: 50%;
    left: 50%;
    -webkit-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
    width: 120px;
}
</style>
</head>
<body class="pre preloading-site">
    <div class="preloading-wrapper">
        <div class="preloading">
            <img src="{{ asset('/assets/dog.gif') }}" width="100px" alt="Loading...">
            <span class="pt-3 font-semibold ml-3">Loading....</span>
        </div>
    </div>
    <div class="relative h-[20px] max-w-[460px] mx-auto">
        <div id="magic" class="fixed mx-auto z-20 h-[60px] max-w-[460px] w-full transition delay-250 ease-in-out bg-transparent">
            <div class="relative m-auto flex h-full items-center p-0 px-4">
                <button class="mr-3 flex-shrink-0 rounded-full transition delay-150 ease-in-out bg-cerulean50">
                    <img src="{{ asset('assets/logo.png') }}" class="h-[33px] w-full" width="33" height="33">
                </button>
                <a class="flex h-[30px] md:w-full w-[230px] items-center justify-between rounded-2xl px-2 md:px-4 transition delay-150 ease-in-out bg-white" href="{{ route('search') }}">
                        <span class="text-xs typewrite whitespace-nowrap" data-period="2000" data-type='["Cari Invoice, Produk Toko dan Game"]'></span>
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" role="img" class="flex-shrink-0"><path fill-rule="evenodd" clip-rule="evenodd" d="M15.199 17.035a8.312 8.312 0 1 1 1.837-1.837l4.584 4.585a1.299 1.299 0 1 1-1.837 1.837l-4.584-4.585Zm.827-6.723a5.714 5.714 0 1 1-11.429 0 5.714 5.714 0 0 1 11.429 0Z" fill="#6A6A6A"></path></svg>
                </a>
            </div>
        </div>
    </div>
    <div class="w-full">
        <!-- <section id="bottom-navigation" class="md:hidden block fixed inset-x-0 bottom-0 z-10 bg-white shadow"> // if shown only tablet/mobile-->
          <section id="bottom-navigation" class="block bg-white max-w-[460px] mx-auto fixed inset-x-0 bottom-0 z-10 shadow">
            <div id="tabs" class="flex justify-between border-t-2 border-sky-300">
                <a href="{{ route('home') }}" class="w-1/2 text-slate-700 focus:text-sky-700 hover:text-sky-700 justify-center inline-block text-center pt-2 pb-1">
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
    <main class="mx-auto max-w-[460px]">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="max-w-[460px] mx-auto bg-neutral-100 text-center text-neutral-600 dark:bg-neutral-600 dark:text-neutral-200">

    <!-- Social media -->
    <div class="flex items-center justify-center border-b-2 border-neutral-200 p-6 dark:border-neutral-500 lg:justify-between">
        <div class="mr-12 hidden md:block">
          <span>Hubungi Kami Disini :</span>
        </div>
        <div class="flex justify-center items-center">
          <a href="#" class="mr-6 text-neutral-600 dark:text-neutral-200">
            <i class="fa-brands fa-whatsapp fa-lg"></i>
          </a>
          <a href="#!" class="mr-6 text-neutral-600 dark:text-neutral-200">
            <i class="fa-brands fa-facebook fa-lg"></i>
          </a>
          
          
          <a href="#!" class="mr-6 text-neutral-600 dark:text-neutral-200">
            <i class="fa-brands fa-instagram fa-lg"></i>
          </a>
          
        </div>
    </div>
  
    <!-- Main container -->
    <div class="mx-6 pt-8 pb-4 text-center">
  
        <!-- Text -->
        <div class="mb-6">
            <h5 class="mb-2 font-bold uppercase">PT. Papa Official Store</h5>
          
            <p class="mb-4">
              Embark on an adventure of a lifetime and uncover hidden
              wonders. Your journey begins now!
            </p>
        </div>
  
    </div>
  
    <!-- Copyright -->
    <div class="bg-neutral-200 p-6 text-center dark:bg-neutral-700 flex justify-center items-center mb-10">
  
        <span>© 2023 Copyright : </span>
  
        <a
          class="font-semibold text-neutral-600 dark:text-neutral-400 ml-2"
          href="https://digital.papaofficialstore.com/"
        >
          Papa Official Store
        </a>
  
    </div>
  
  
  </footer>

<script type="module">
$(window).scroll(function(){
    if ($(this).scrollTop() > 1) {
       $('#magic').addClass('bg-sky-500').removeClass('bg-transparent');
    } else {
       $('#magic').removeClass('bg-sky-500');
    }
});

$(document).ready(function() {
    $("#tag").on("scroll", function () {
        var cur = $(this).scrollLeft();
        if (cur > 2) {
            $('#burem').addClass('opacity-0 transition-opacity ease-out');
        } 
        else {
            $('#burem').removeClass('opacity-0 transition-opacity ease-out');
        }
    });
    $("#tag").trigger("scroll");
});

$(window).on("load",function(){
          $(".preloading-wrapper").fadeOut(2000);
          $(".pre").removeClass("preloading-site");
        });

</script>
<script type="module">
  var TxtType = function(el, toRotate, period) {
  this.toRotate = toRotate;
  this.el = el;
  this.loopNum = 0;
  this.period = parseInt(period, 10) || 2000;
  this.txt = '';
  this.tick();
  this.isDeleting = false;
  };
  
  TxtType.prototype.tick = function() {
  var i = this.loopNum % this.toRotate.length;
  var fullTxt = this.toRotate[i];
  
  if (this.isDeleting) {
  this.txt = fullTxt.substring(0, this.txt.length - 1);
  } else {
  this.txt = fullTxt.substring(0, this.txt.length + 1);
  }
  
  this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';
  
  var that = this;
  var delta = 200 - Math.random() * 100;
  
  if (this.isDeleting) { delta /= 2; }
  
  if (!this.isDeleting && this.txt === fullTxt) {
  delta = this.period;
  this.isDeleting = true;
  } else if (this.isDeleting && this.txt === '') {
  this.isDeleting = false;
  this.loopNum++;
  delta = 500;
  }
  
  setTimeout(function() {
  that.tick();
  }, delta);
  };
  
  window.onload = function() {
  var elements = document.getElementsByClassName('typewrite');
  for (var i=0; i<elements.length; i++) {
  var toRotate = elements[i].getAttribute('data-type');
  var period = elements[i].getAttribute('data-period');
  if (toRotate) {
  new TxtType(elements[i], JSON.parse(toRotate), period);
  }
  }
  // INJECT CSS
  var css = document.createElement("style");
  css.type = "text/css";
  css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
  document.body.appendChild(css);
  };
</script>
@yield('js')

</body>
</html>
