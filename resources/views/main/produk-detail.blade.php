@extends('layouts.auth')

@section('css')
<style>
.check {
  color: orange;
}
</style>
@endsection
@section('content')
<div class="container mb-20 min-h-screen">
    <div class="relative h-[20px] max-w-[460px] mx-auto">
        <div id="magic" class="fixed mx-auto z-[99] h-[60px] w-full md:w-[460px] transition delay-250 ease-in-out bg-transparent">
            <div class="relative m-auto flex h-full max-w-[460px] items-center p-0 px-4">
                <button class="relative mr-[25px] flex flex-shrink-0 cursor-pointer text-[16px]">
                    <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" role="img" class="w-5"><path d="M12.86 5.076a1.216 1.216 0 1 0-1.72-1.72L3.356 11.14a1.216 1.216 0 0 0 0 1.72l7.784 7.784a1.216 1.216 0 0 0 1.72-1.72l-5.708-5.708h12.632a1.216 1.216 0 1 0 0-2.432H7.152l5.708-5.708Z" fill="#FEFEFE"></path></svg>
                </button>
                <div class="flex-1 overflow-hidden text-ellipsis whitespace-nowrap">
                    <span class="text-white font-bold hidden" id="judul">Akun Sultan Mobile Legends Murah</span>
                </div>
            </div>
        </div>
    </div>

  <div id="carouselExampleControls" class="relative -mt-5" data-te-carousel-init data-te-ride="carousel">
  <!--Carousel items-->
  <div
    class="rounded relative w-full overflow-hidden after:clear-both after:block after:content-['']">
    <!--First item-->
    
    <!--Second item-->
    <div
      class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
      data-te-carousel-item
      data-te-carousel-active>
      <img
        src="https://mdbcdn.b-cdn.net/img/new/slides/042.webp"
        class="block w-full"
        alt="Camera" />
    </div>
    <!--Third item-->
    <div
      class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
      data-te-carousel-item>
      <img
        src="https://mdbcdn.b-cdn.net/img/new/slides/043.webp"
        class="block w-full"
        alt="Exotic Fruits" />
    </div>
  </div>

  <!--Carousel controls - prev item-->
  <button
    class="absolute bottom-0 left-0 top-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-white opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none"
    type="button"
    data-te-target="#carouselExampleControls"
    data-te-slide="prev">
    <span class="inline-block h-8 w-8">
      <svg
        xmlns="http://www.w3.org/2000/svg"
        fill="none"
        viewBox="0 0 24 24"
        stroke-width="1.5"
        stroke="currentColor"
        class="h-6 w-6">
        <path
          stroke-linecap="round"
          stroke-linejoin="round"
          d="M15.75 19.5L8.25 12l7.5-7.5" />
      </svg>
    </span>
    <span class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]"
      >Previous</span
    >
  </button>
  <!--Carousel controls - next item-->
  <button
    class="absolute bottom-0 right-0 top-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-white opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none"
    type="button"
    data-te-target="#carouselExampleControls"
    data-te-slide="next">
    <span class="inline-block h-8 w-8">
      <svg
        xmlns="http://www.w3.org/2000/svg"
        fill="none"
        viewBox="0 0 24 24"
        stroke-width="1.5"
        stroke="currentColor"
        class="h-6 w-6">
        <path
          stroke-linecap="round"
          stroke-linejoin="round"
          d="M8.25 4.5l7.5 7.5-7.5 7.5" />
      </svg>
    </span>
    <span
      class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]"
      >Next</span
    >
  </button>
  </div>

  <div class="px-4 pt-3 pb-4">
    <h1 class="mb-3 font-bold line-clamp-3 text-lg">Disini Judul Produk Yang Di Jual</h1>
    
    <div class="flex justify-between">
        <div class="mb-3 text-xs font-semibold">Rp<span class="text-base">250.000</span> <span class="mb-px inline-block text-xs font-normal text-slate-400"><s>Rp500.000</s></span></div>
        <div class="text-sm"><span class="inline-block whitespace-nowrap rounded-full bg-orange-400 px-[0.65em] pb-[0.25em] pt-[0.35em] text-center align-baseline text-[0.75em] font-bold leading-none text-gray-50">25% off</span></div>
    </div>
  </div>
  <hr class="m-0 h-2 w-full border-0 bg-slate-100 p-0">
  <div class="p-4">
    <h2 class="m-0 mb-2.5 text-base font-bold">Informasi Toko</h2>
    <div class="mb-2 rounded border border-slate-400 px-3 pt-3 pb-4">
        <h3 class="mb-3.5 block text-sm">Toko Member</h3>
        <a class="flex text-slate-100" href="">
            <div class="shrink-0">
                <div class="mr-3 rounded-full bg-coal relative" style="width: 50px; height: 50px;">
                    <img class="w-full h-full rounded-full object-cover object-center" src="{{asset('assets/logo.png')}}" loading="lazy" height="50" width="50" style="color: transparent;">
                </div>
            </div>
            <div class="ml-3">
                <div class="text-gray-800 -mb-0.5 text-sm"><strong>Oreo Store</strong>
                    <div class="inline-flex">
                        <div class="relative">
                            <svg width="20" height="20" viewBox="0 0 19 20" fill="none" xmlns="http://www.w3.org/2000/svg" role="img" data-testid="verified-campaigner-badge" class="ml-2 inline-block"><path fill-rule="evenodd" clip-rule="evenodd" d="M10.407 1.689c-.293-1.585-2.471-1.585-2.764 0-.207 1.124-1.517 1.577-2.328.804l-.126-.12c-1.121-1.068-2.83.273-2.157 1.693.485 1.021-.316 2.195-1.402 2.052l-.103-.014C.031 5.906-.607 8.022.73 8.751c.967.528.967 1.97 0 2.498-1.336.729-.698 2.845.798 2.647l.103-.014c1.086-.143 1.887 1.03 1.402 2.052-.674 1.42 1.036 2.761 2.157 1.693l.126-.12c.81-.773 2.12-.32 2.328.804.293 1.585 2.471 1.585 2.764 0 .207-1.124 1.517-1.577 2.328-.804l.126.12c1.121 1.068 2.83-.273 2.157-1.693-.485-1.021.316-2.195 1.402-2.052l.103.014c1.496.198 2.134-1.918.798-2.647-.968-.528-.968-1.97 0-2.498 1.336-.729.698-2.845-.798-2.647l-.103.014c-1.086.143-1.887-1.03-1.402-2.052.673-1.42-1.036-2.761-2.157-1.692l-.126.12c-.81.772-2.12.32-2.328-.805Zm1.534 5.665c.452.337.544.975.204 1.424L9.21 12.443a1.026 1.026 0 0 1-1.543.109L6 10.814c-.4-.397-.4-1.042 0-1.44a1.029 1.029 0 0 1 1.449 0l.83.909 2.228-2.726c.339-.45.98-.54 1.434-.203Z" fill="#10A8E5"></path></svg>
                        </div>
                    </div>
                </div>
                <span class="text-xs text-gray-700">Toko Terverifikasi</span>
            </div>
        </a>
    </div>
  </div>

    <div class="p-4 mb-16">
        <h2 class="m-0 mb-3 text-base font-bold">
            Informasi Produk
        </h2>
        <div class="text-sm mb-10">
            <p class="leading-relaxed limit">{{ Str::limit( strip_tags('Disini Judul Produk Yang Di Jual efbqhj ejfbhef jebfjweb hewbfhwe hsfbhqjw ebfhqwegf hebfhqgj jebfhqwg hebfhq hbfhgq hbwfhq hwebfw'), 100) }}</p>
            <p class="leading-relaxed pesan">Disini Judul Produk Yang Di Jual efbqhj ejfbhef jebfjweb hewbfhwe hsfbhqjw ebfhqwegf hebfhqgj jebfhqwg hebfhq hbfhgq hbwfhq hwebfw</p>
        </div>
        <div class="flex justify-between">
        <div class="mx-auto items-center">
          <button type="button" class="load inline-block rounded-lg border-2 border-primary-100 px-6 pb-[6px] pt-2 text-xs font-medium uppercase leading-normal text-primary-700 transition duration-150 ease-in-out hover:border-primary-accent-100 hover:bg-neutral-500 hover:bg-opacity-10 focus:border-primary-accent-100 focus:outline-none focus:ring-0 active:border-primary-accent-200 dark:text-primary-100 dark:hover:bg-neutral-100 dark:hover:bg-opacity-10"
          data-te-ripple-init>
            Load More
          </button>
          <button type="button" class="tutup inline-block rounded-lg border-2 border-primary-100 px-6 pb-[6px] pt-2 text-xs font-medium uppercase leading-normal text-primary-700 transition duration-150 ease-in-out hover:border-primary-accent-100 hover:bg-neutral-500 hover:bg-opacity-10 focus:border-primary-accent-100 focus:outline-none focus:ring-0 active:border-primary-accent-200 dark:text-primary-100 dark:hover:bg-neutral-100 dark:hover:bg-opacity-10"
          data-te-ripple-init>
             Close
          </button>
        </div>
    </div>
    </div>

    <div class="mx-2 px-3 py-2 bg-slate-200 rounded my-6">
        <p class="text-xs">
            <strong>Disclaimer :</strong> Informasi produk dan gambar yang ada di halaman ini adalah milik dan tanggung jawab Toko Member. Jika ada masalah/kecurigaan silakan
                <a href="" class="text-sky-400">lapor kepada kami disini.</a>
        </p>
    </div>
    <hr class="m-0 h-2 w-full border-0 bg-slate-100 p-0">
  <div class="break break-words bg-white p-4 pt-0">
    <div id="ulasan">
        <hr class="my-0 border-t-0 bg-slate-100">
        <a href="" class="flex w-full justify-between border-slate-200 py-4 text-left">
            <div class="flex items-center">
                <h4 class="m-0 font-bold">Ulasan Produk</h4>
                <span class="ml-4 inline-block whitespace-nowrap rounded-full bg-gray-100 px-[0.65em] pb-[0.25em] pt-[0.35em] text-center align-baseline text-[0.75em] font-bold leading-none text-sky-700">500</span>
            </div>
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" role="img" class="mt-1.5"><path fill-rule="evenodd" clip-rule="evenodd" d="M6.389 2.389a1.327 1.327 0 0 1 1.876 0l8.673 8.673a1.326 1.326 0 0 1 0 1.876l-8.673 8.673a1.327 1.327 0 0 1-1.876-1.876L14.124 12 6.389 4.265a1.327 1.327 0 0 1 0-1.876Z" fill="#6A6A6A"></path></svg>
        </a>
        <div class="mb-2 flex rounded bg-[#FAFAFA] p-4">
            <div class="mr-3 rounded-full bg-slate-300 relative" style="width: 50px; height: 50px;">
                <img alt="Pembeli" loading="lazy" width="50" height="50" decoding="async" class="w-full h-full rounded-full object-cover object-center" src="" style="color: transparent;">
            </div>
        <div class="ml-5 flex flex-1 flex-col">
            <div class="text-body font-bold">Ucup 
                <span class="fa fa-star fa-xs check ml-3"></span>
                <span class="fa fa-star-half-stroke fa-xs check"></span>
                <span class="fa fa-star fa-xs check"></span>
                <span class="fa fa-star fa-xs check"></span>
                <span class="fa fa-star fa-xs check"></span>
            </div>
            <span class="text-body text-sm">Produk lumayan bagus</span>
            <span class="mt-1 text-xs text-slate-400">sejam yang lalu</span>
        </div>
        </div>
    </div>
  </div>
  <div class="md:w-[460px] w-full mx-auto px-4 fixed bottom-[4rem]">
    <button class="inline-block rounded w-full bg-primary px-6 pb-2 pt-2.5 text-sm font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)]"
         type="button" data-te-offcanvas-toggle data-te-target="#offcanvasBottom" aria-controls="offcanvasBottom"
         data-te-ripple-init data-te-ripple-color="light">
         Beli Sekarang
    </button>
  </div>
<div class="invisible rounded-tr-sm rounded-tl-sm fixed bottom-0 mx-auto left-0 right-0 z-[1045] flex h-auto max-h-full max-w-[460px] translate-y-full flex-col border-none bg-white bg-clip-padding text-neutral-700 shadow-sm outline-none transition duration-300 ease-in-out dark:bg-neutral-800 dark:text-neutral-200 [&[data-te-offcanvas-show]]:transform-none"
  tabindex="-1" id="offcanvasBottom" aria-labelledby="offcanvasBottomLabel" data-te-offcanvas-init>
  <div class="flex items-center justify-between p-4">
    <h5 class="mb-0 font-semibold leading-normal" id="offcanvasBottomLabel">
      Informasi Pesanan
    </h5>
    <button type="button" class="box-content rounded-none border-none opacity-50 hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none"
      data-te-offcanvas-dismiss>
      <span class="w-[1em] focus:opacity-100 disabled:pointer-events-none disabled:select-none disabled:opacity-25 [&.disabled]:pointer-events-none [&.disabled]:select-none [&.disabled]:opacity-25">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
          stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
        </svg>
      </span>
    </button>
  </div>
  <div class="small flex-grow overflow-y-auto p-4">
    <div class="flex flex-row min-h-[64px] justify-between w-full">
        <div class="flex flex-row w-full">
            <div class="flex flex-col space-y-2 leading-tight">
                <h1 class="font-bold text-sm relative whitespace-normal line-clamp-2">
                    #Judul Produk Yang Di Jual
                </h1>
                <div class="flex flex-row text-xs">
                    <h1>Kategori Produk</h1>
                </div>
                <div class="cursor-auto flex flex-row items-center">
                    <div class="flex flex-row items-center">
                        <h2 class="text-sm text-sky-500 font-bold mr-2">Rp500.000</h2>
                    </div>
                </div>
                <div class="flex flex-row flex-wrap gap-2 items-baseline">
                    <div class="flex-none">
                        <div class="opacity-100 px-1 text-orange-500 box-border border border-orange-500 align-middle capitalize flex flex-row font-normal items-center justify-center rounded select-none text-center w-auto">
                            <p class="text-sm leading-5 ds-font-normal">
                                Stok Terakhir
                            </p>
                        </div>
                    </div>
                    <div class="flex-none">
                        <div class="opacity-100 px-1 text-sky-500 box-border border border-sky-500 align-middle capitalize flex flex-row font-normal items-center justify-center rounded select-none text-center w-auto">
                            <p class="text-sm leading-5 ds-font-normal">
                                Garansi
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="w-full space-y-4 py-4">
        <div class="flex flex-col">
            <p class="text-sm mb-1">
                Catatan untuk penjual (optional)
            </p>
            <div class="relative w-full">
                <input type="text" class="focus:outline-none text-sm w-full bg-transparent caret-orange-500 pb-2 border-b-orange-300 focus-within:border-none border-2 border-t-0 border-l-0 border-r-0 pl-1 pr-1 px-1 ">
            </div>
        </div>
    </div>
    <div class="sticky bottom-0 space-y-2 bg-white">
        <div class="ds-w-full ds-px-4 ds-py-2 ds-bg-white ds-shadow-top ds-flex ds-flex-col ds-space-y-4">
            <div>
                <div class="flex flex-col space-y-2px">
                    <p class="text-base text-nero">Subtotal</p>
                    <span class="flex flex-row space-x-2 items-center">
                        <p class="text-xl text-orange-500 font-bold">Rp500.000</p>
                    </span>
                </div>
            </div>
            <div class="flex justify-end items-end">
                <div class="self-end">
                    <button class="align-middle cursor-pointer text-lg capitalize bg-sky-500 px-5 w-full h-10 rounded-lg text-white font-bold flex justify-self-end items-center">
                        <div class="flex flex-row-reverse">
                            <span class="leading-4 self-center">Beli langsung</span>
                        </div>
                    </button>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>
</div>
@endsection
@section('js')
<script type="module">
$(window).scroll(function(){
    if ($(this).scrollTop() > 1) {
        $('#magic').addClass('bg-sky-500').removeClass('bg-transparent');
        $('#judul').removeClass('hidden');
    } else {
        $('#magic').removeClass('bg-sky-500');
        $('#judul').addClass('hidden');
    }
});

$(document).ready(function() {
    $(".pesan").hide();
    $(".tutup").hide();
    $(".load").click(function(){
        $(".pesan").slideDown('slow');
        $(".limit").hide();
        $(".load").hide();
        $(".tutup").slideDown('slow');
    }),
    $(".tutup").click(function(){
        $(".limit").slideDown('fast');
        $(".pesan").hide();
        $(".load").slideDown('slow');
        $(".tutup").hide();
    })
});
</script>
    @endsection