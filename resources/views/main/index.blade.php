@extends('layouts.app')
@section('css')
<style>
  .checked {
  color: orange;
}
</style>
@endsection
@section('content')
<div class="container mb-12">
    <div class="relative pb-3 scroll-smooth">
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
     
            <div class="relative mb-20 h-[20px]">
              <div class="absolute bottom-0 left-4 min-h-[100px] w-[calc(100%_-_32px)] translate-y-1/2 rounded-md bg-white p-4 shadow-[0_2px_8px_1px_rgba(152,152,152,0.2)]">
                <span class="mb-4 block font-semibold text-sm">Buka Toko Sekarang Biaya Platform Cuman 5% Tanpa Potongan Apapun Lagi!!</span>
                <a href="" class="rounded-full text-sm py-2.5 w-[170px] font-bold text-white bg-sky-600 min-w-max leading-3 ease-in-out flex flex-row items-center justify-center">
                    Buat Toko 
                </a>
                <img src="{{ asset('assets/bannersale.png') }}" class="absolute right-0 bottom-0 -z-1 max-h-[50px] w-[100px] object-cover" height="40" width="80">
              </div>
            </div>
            <div class="mb-6 px-2">
              <h2 class="mb-6 text-base font-semibold">Kebutuhan kamu ada disini</h2>
              <div class="grid grid-cols-4 gap-y-6">
                <a class="flex flex-col items-center" href="{{ route('topup') }}">
                  <div class="mb-2 flex h-12 w-12 justify-end">
                    <img class="object-contain" src="" alt="" width="48" height="48">
                  </div>
                    <span class="text-xs px-1 text-center whitespace-nowrap">TopUp</span>
                </a>
                <a class="flex flex-col items-center" href="{{ route('ppob') }}">
                  <div class="mb-2 flex h-12 w-12 justify-end">
                    <img class="object-contain" src="" alt="" width="48" height="48">
                  </div>
                  <span class="text-xs px-1 text-center whitespace-nowrap">Pulsa $ Kuota</span>
                </a>
                <a class="flex flex-col items-center" href="">
                  <div class="mb-2 flex h-12 w-12 justify-end">
                    <img class="object-contain" src="" alt="" width="48" height="48">
                  </div>
                  <span class="text-xs px-1 text-center whitespace-nowrap">PLN</span>
                </a>
                <a class="flex flex-col items-center" href="">
                  <div class="mb-2 flex h-12 w-12 justify-end">
                    <img class="object-contain" src="" alt="" width="48" height="48">
                  </div>
                  <span class="text-xs px-1 text-center whitespace-nowrap">E-Wallet</span>
                </a>
                <a class="flex flex-col items-center" href="">
                  <div class="mb-2 flex h-12 w-12 justify-end">
                    <img class="object-contain" src="" alt="" width="48" height="48">
                  </div><span class="text-xs px-1 text-center whitespace-nowrap">Voucher</span>
                </a>
                <a class="flex flex-col items-center" href="">
                  <div class="mb-2 flex h-12 w-12 justify-end">
                    <img class="object-contain" src="" alt="" width="48" height="48">
                  </div>
                  <span class="text-xs px-1 text-center whitespace-nowrap">Toko Member</span>
                </a>
              </div>
            </div>
            <hr class="m-0 h-2 w-full border-0 bg-slate-100 p-0">
            <section class="py-4 mt-5 overflow-hidden md:rounded-lg scroll-smooth">
                <header class="px-2 mb-4 flex items-center">
                    <div class="flex-1 ">
                        <h2 class="text-base font-semibold flex items-center gap-1 flex-shrink-0">
                            Produk Terlaris
                        </h2>
                        <h3 class="text-xs">Daftar produk terlaris di papa</h3>
                    </div>
                    <a class="font-bold text-xs flex items-center gap-1 flex-shrink-0" href="#">Lihat Semua 
                        <svg class="w-3 h-2 icn-more" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 8 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 13 5.7-5.326a.909.909 0 0 0 0-1.348L1 1"/>
                        </svg>
                    </a>
                </header>
                <div class="overflow-x-auto kit flex whitespace-nowrap gap-2 py-2 px-2">
                    @foreach($populer as $pop)
                    <a href="{{ url('/topup/'. $pop->kode) }}" class="w-[140px] h-full flex-shrink-0 group transform overflow-hidden rounded-2xl bg-slate-700 duration-100 ease-in-out hover:shadow-2xl hover:ring-2 hover:ring-sky-500 hover:ring-offset-2 hover:ring-offset-green-900">
                        <img class="aspect-[5/7] object-cover object-center" loading="lazy" src="{{ asset('assets/'. $pop->thumbnail) }}" alt="">
                        <article class="absolute inset-x-0 -bottom-10 z-10 flex transform flex-col transition-all duration-100 ease-in-out group-hover:bottom-3 px-2 sm:px-2 group-hover:sm:bottom-4">
                            <h2 class="truncate text-xs font-semibold text-slate-200 sm:text-base">{{ $pop->nama }}</h2>
                            <p class="truncate text-xxs text-slate-400 sm:text-xs">{{ ($pop->jual > 0) ? $pop->jual : '0'}} Item Terjual</p>
                        </article>
                        <div class="absolute inset-0 transform bg-gradient-to-t from-transparent transition-all duration-300 group-hover:from-slate-900"></div>
                    </a>
                    @endforeach
                </div>
            </section>
    
            <section class="py-4 mt-10 overflow-hidden md:rounded-lg scroll-smooth bg-gradient-to-r from-sky-100 to-sky-800">
                <header class="px-2 mb-4 flex items-center">
                    <div class="flex-1 pr-4">
                        <h2 class="font-bold text-lg">Flash Sale</h2>
                        <h3 class="text-xs">Daftar produk flash di papa</h3>
                    </div>
                    <a class="font-bold text-xs flex items-center gap-2 flex-shrink-0" href="#">Lihat Semua 
                        <svg class="w-3 h-2 icn-more" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 8 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 13 5.7-5.326a.909.909 0 0 0 0-1.348L1 1"/>
                        </svg>
                    </a>
                </header>
    
                <div class="relative h-[310px] mb-3">
                    <img id="burem" class="absolute top-4 z-0 opacity-1 delay-200 ease-in-out transition-opacity  translate-x-1 object-fill w-[180px]" src="{{ asset('assets/bannersale.png') }}" fetchpriority="low" loading="lazy" alt="">
                    <div id="tag" class="relative w-full flex snap-x scroll-smooth overflow-x-auto pl-40">
                    
                      <div class="flex gap-3 px-2 pb-2 ml-2">
                        <div class="relative w-[220px] flex-shrink-0 rounded-lg bg-white shadow-[0_2px_8px_5px_rgba(152,152,152,0.2)]">
                          <a class="" href="">
                            <img src="{{ asset('assets/gambar.avif') }}" alt="" loading="lazy" width="220" height="120" class="h-[130px] w-full rounded-tl-lg rounded-tr-lg" style="color: transparent;">
                            <div class="p-3">
                              <div class="mb-2 flex justify-between">
                                <span class="inline-block whitespace-nowrap rounded-full bg-orange-400 px-[0.65em] pb-[0.25em] pt-[0.35em] text-center align-baseline text-[0.75em] font-bold leading-none text-gray-50">10% off</span>
                                <span class="inline-block whitespace-nowrap rounded-full bg-green-400 px-[0.65em] pb-[0.25em] pt-[0.35em] text-center align-baseline text-[0.75em] font-bold leading-none text-sky-100">Buku</span>
                                
                              </div>
                              <span class="mb-2 block h-9 overflow-hidden break-words text-sm font-semibold text-mineshaft line-clamp-2 text-gray-600">Conto Produk</span>
                              <div class="flex pb-2">
                                <span class="inlin-block overflow-hidden text-ellipsis whitespace-nowrap text-xs text-gray-700">
                                    Toko <svg width="12" height="12" viewBox="0 0 19 20" fill="none" xmlns="http://www.w3.org/2000/svg" role="img" class="ml-1 -mt-[3px] inline-block"><path fill-rule="evenodd" clip-rule="evenodd" d="M10.407 1.689c-.293-1.585-2.471-1.585-2.764 0-.207 1.124-1.517 1.577-2.328.804l-.126-.12c-1.121-1.068-2.83.273-2.157 1.693.485 1.021-.316 2.195-1.402 2.052l-.103-.014C.031 5.906-.607 8.022.73 8.751c.967.528.967 1.97 0 2.498-1.336.729-.698 2.845.798 2.647l.103-.014c1.086-.143 1.887 1.03 1.402 2.052-.674 1.42 1.036 2.761 2.157 1.693l.126-.12c.81-.773 2.12-.32 2.328.804.293 1.585 2.471 1.585 2.764 0 .207-1.124 1.517-1.577 2.328-.804l.126.12c1.121 1.068 2.83-.273 2.157-1.693-.485-1.021.316-2.195 1.402-2.052l.103.014c1.496.198 2.134-1.918.798-2.647-.968-.528-.968-1.97 0-2.498 1.336-.729.698-2.845-.798-2.647l-.103.014c-1.086.143-1.887-1.03-1.402-2.052.673-1.42-1.036-2.761-2.157-1.692l-.126.12c-.81.772-2.12.32-2.328-.805Zm1.534 5.665c.452.337.544.975.204 1.424L9.21 12.443a1.026 1.026 0 0 1-1.543.109L6 10.814c-.4-.397-.4-1.042 0-1.44a1.029 1.029 0 0 1 1.449 0l.83.909 2.228-2.726c.339-.45.98-.54 1.434-.203Z" fill="#10A8E5"></path></svg>
                            
                                </span>
                              </div>
                              <div class="flex justify-between items-center">
                                  <span class="inline-block whitespace-nowrap rounded-full bg-gray-100 px-[0.65em] pb-[0.25em] pt-[0.35em] text-center align-baseline text-[0.75em] font-bold leading-none text-sky-700"><s>Rp50.000</s></span>
                                  <span class="inline-block whitespace-nowrap rounded-full bg-sky-400 px-[0.65em] pb-[0.25em] pt-[0.35em] text-center align-baseline text-[0.75em] font-bold leading-none text-sky-100">Rp30.000</span>
                              </div>
                            </div>
                          </a>
                          <div class="flex justify-between items-center mx-2">
                            <div class="">
                              <span class="fa fa-star fa-xs checked"></span>
                              <span class="fa fa-star-half-stroke fa-xs checked"></span>
                              <span class="fa fa-star fa-xs checked"></span>
                              <span class="fa fa-star fa-xs checked"></span>
                              <span class="fa fa-star fa-xs checked"></span>
                            </div>
                            <div class="text-xs">Belum ada ulasan</div>
                          </div>
                          <div class="flex justify-start items-center mx-2 mb-2">
                            <span class="inline-block whitespace-nowrap rounded-full bg-gray-50 px-[0.65em] pb-[0.25em] pt-[0.35em] text-center align-baseline text-[0.75em] font-semibold leading-none text-gray-600">5 Terjual</span>
                          </div>
                          
                        </div>
                      </div>
            
                      <div class="flex gap-3 px-2 pb-2 ml-2">
                        <div class="relative w-[220px] flex-shrink-0 rounded-lg bg-white shadow-[0_2px_8px_5px_rgba(152,152,152,0.2)]">
                          <a class="" href="">
                            <img src="{{ asset('assets/gambar.avif') }}" alt="" loading="lazy" width="220" height="120" class="h-[130px] w-full rounded-tl-lg rounded-tr-lg" style="color: transparent;">
                            <div class="p-3">
                              <div class="mb-2 flex justify-between">
                                <span class="inline-block whitespace-nowrap rounded-full bg-orange-400 px-[0.65em] pb-[0.25em] pt-[0.35em] text-center align-baseline text-[0.75em] font-bold leading-none text-gray-50">10% off</span>
                                <span class="inline-block whitespace-nowrap rounded-full bg-green-400 px-[0.65em] pb-[0.25em] pt-[0.35em] text-center align-baseline text-[0.75em] font-bold leading-none text-sky-100">Buku</span>
                                
                              </div>
                              <span class="mb-2 block h-9 overflow-hidden break-words text-sm font-semibold text-mineshaft line-clamp-2 text-gray-600">Conto Produk</span>
                              <div class="flex pb-2">
                                <span class="inlin-block overflow-hidden text-ellipsis whitespace-nowrap text-xs text-gray-700">
                                    Toko <svg width="12" height="12" viewBox="0 0 19 20" fill="none" xmlns="http://www.w3.org/2000/svg" role="img" class="ml-1 -mt-[3px] inline-block"><path fill-rule="evenodd" clip-rule="evenodd" d="M10.407 1.689c-.293-1.585-2.471-1.585-2.764 0-.207 1.124-1.517 1.577-2.328.804l-.126-.12c-1.121-1.068-2.83.273-2.157 1.693.485 1.021-.316 2.195-1.402 2.052l-.103-.014C.031 5.906-.607 8.022.73 8.751c.967.528.967 1.97 0 2.498-1.336.729-.698 2.845.798 2.647l.103-.014c1.086-.143 1.887 1.03 1.402 2.052-.674 1.42 1.036 2.761 2.157 1.693l.126-.12c.81-.773 2.12-.32 2.328.804.293 1.585 2.471 1.585 2.764 0 .207-1.124 1.517-1.577 2.328-.804l.126.12c1.121 1.068 2.83-.273 2.157-1.693-.485-1.021.316-2.195 1.402-2.052l.103.014c1.496.198 2.134-1.918.798-2.647-.968-.528-.968-1.97 0-2.498 1.336-.729.698-2.845-.798-2.647l-.103.014c-1.086.143-1.887-1.03-1.402-2.052.673-1.42-1.036-2.761-2.157-1.692l-.126.12c-.81.772-2.12.32-2.328-.805Zm1.534 5.665c.452.337.544.975.204 1.424L9.21 12.443a1.026 1.026 0 0 1-1.543.109L6 10.814c-.4-.397-.4-1.042 0-1.44a1.029 1.029 0 0 1 1.449 0l.83.909 2.228-2.726c.339-.45.98-.54 1.434-.203Z" fill="#10A8E5"></path></svg>
                            
                                </span>
                              </div>
                              <div class="flex justify-between items-center">
                                  <span class="inline-block whitespace-nowrap rounded-full bg-gray-100 px-[0.65em] pb-[0.25em] pt-[0.35em] text-center align-baseline text-[0.75em] font-bold leading-none text-sky-700"><s>Rp50.000</s></span>
                                  <span class="inline-block whitespace-nowrap rounded-full bg-sky-400 px-[0.65em] pb-[0.25em] pt-[0.35em] text-center align-baseline text-[0.75em] font-bold leading-none text-sky-100">Rp30.000</span>
                              </div>
                            </div>
                          </a>
                          <div class="flex justify-between items-center mx-2">
                            <div class="">
                              <span class="fa fa-star fa-xs checked"></span>
                              <span class="fa fa-star-half-stroke fa-xs checked"></span>
                              <span class="fa fa-star fa-xs checked"></span>
                              <span class="fa fa-star fa-xs checked"></span>
                              <span class="fa fa-star fa-xs checked"></span>
                            </div>
                            <div class="text-xs">Belum ada ulasan</div>
                          </div>
                          <div class="flex justify-start items-center mx-2 mb-2">
                            <span class="inline-block whitespace-nowrap rounded-full bg-gray-50 px-[0.65em] pb-[0.25em] pt-[0.35em] text-center align-baseline text-[0.75em] font-semibold leading-none text-gray-600">5 Terjual</span>
                          </div>
                          
                        </div>
                      </div>
                    </div>
                </div>
            </section>
    
    
            <!--<div class="py-4 mt-5 px-4">
              <h2 class="mb-6 text-base font-semibold">Pilih Kategori Favoritmu</h2>
              <div class="grid grid-cols-4 gap-4">
                <button class="flex flex-col items-center">
                  <div class="mb-2 flex w-12 h-12 items-center justify-center rounded-md bg-white shadow-[0_0_16px_0_rgba(0,0,0,0.12)] ">
                    <img class="rounded-md object-cover h-9 w-9" src="{{ asset('assets/ml.svg') }}" alt="">
                  </div>
                  <span class="block text-center text-xs whitespace-nowrap">Mobile Legends</span>
                </button>
                <button class="flex flex-col items-center">
                  <div class="mb-2 flex h-12 w-12 items-center justify-center rounded-md bg-white shadow-[0_0_16px_0_rgba(0,0,0,0.12)] ">
                    <img class="h-9 w-9 object-cover rounded-md" src="{{ asset('assets/gopay.svg') }}" alt="">
                  </div>
                  <span class="block text-center text-xs whitespace-nowrap">Gopay</span>
                </button>
                <button class="flex flex-col items-center" data-testid="homepage-campaign-category-bantuan-medis-&amp;-kesehatan">
                  <div class="mb-2 flex h-12 w-12 items-center justify-center rounded-md bg-white shadow-[0_0_16px_0_rgba(0,0,0,0.12)] ">
                    <img class="h-9 w-9 object-cover rounded-md" src="{{ asset('assets/telkom.svg') }}" alt="">
                  </div>
                  <span class="block text-center text-xs whitespace-nowrap">Telkomsel</span>
                </button>
                <a class="flex flex-col items-center cursor-pointer text-tundora" data-te-offcanvas-toggle data-te-target="#offcanvasBottom" aria-controls="offcanvasBottom">
                  <div class="mb-2 flex h-12 w-12 items-center justify-center rounded-l-md bg-white shadow-[0_0_16px_0_rgba(0,0,0,0.12)] ">
                    <img class="h-9 w-9 object-cover rounded-md" src="" alt="">
                  </div>
                  <span class="block text-center text-xs whitespace-nowrap">Lainnya</span>
                </a>
              </div>
            </div>
            
            <div class="invisible rounded-tr-sm rounded-tl-sm fixed bottom-0 mx-auto left-0 right-0 z-[1045] flex h-auto max-h-full max-w-[460px] translate-y-full flex-col border-none bg-white bg-clip-padding text-neutral-700 shadow-sm outline-none transition duration-300 ease-in-out dark:bg-neutral-800 dark:text-neutral-200 [&[data-te-offcanvas-show]]:transform-none"
              tabindex="-1" id="offcanvasBottom" aria-labelledby="offcanvasBottomLabel" data-te-offcanvas-init>
              <div class="flex items-center justify-between p-4">
                <h5 class="mb-0 font-semibold leading-normal" id="offcanvasBottomLabel">
                  Kategori Favoritmu
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
                           
                        </div>
                    </div>
                </div>
                <div class="w-full space-y-4 py-4">
                    <div class="flex flex-col">
                       
                    </div>
                </div>
                <div class="sticky bottom-0 space-y-2 bg-white">
                    <div class="ds-w-full ds-px-4 ds-py-2 ds-bg-white ds-shadow-top ds-flex ds-flex-col ds-space-y-4">
                        
                    </div>
                </div>
              </div>
            </div>-->
    
            <section class="py-4 mt-10 overflow-hidden md:rounded-lg scroll-smooth">
              <header class="px-4 mb-4 flex items-center">
                  <div class="flex-1 pr-4">
                      <h2 class="text-base font-semibold">Produk Terbaru</h2>
                      <h3 class="text-xs">Daftar produk terbaru di papa</h3>
                  </div>
                  <a class="font-bold text-xs flex items-center gap-2 flex-shrink-0" href="#">Lihat Semua 
                      <svg class="w-3 h-2 icn-more" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 8 14">
                          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 13 5.7-5.326a.909.909 0 0 0 0-1.348L1 1"/>
                      </svg>
                  </a>
              </header>
              <div class="grid gap-2 px-1 lg:gap-3 md:grid-cols-2 grid-cols-2 lg:grid-cols-2">
                @foreach($data as $category)
                <div class="flex pb-2">
                  <div class="relative w-[170px] md:w-auto flex-shrink-0 rounded-lg bg-white shadow-[0_2px_8px_5px_rgba(152,152,152,0.2)]">
                    <a href="{{ url('/produk/'. $category->nama . '/'. $category->kode) }}">
                      <img src="{{ secure_asset(asset('/assets/'. $category->thumbnail)) }}" alt="" loading="lazy" width="220" height="120" class="h-[120px] w-[220px] rounded-tl-lg rounded-tr-lg" style="color: transparent;">
                      <div class="p-3">
                        <div class="mb-2 flex justify-between">
                          <span class="inline-block whitespace-nowrap rounded-full bg-green-500 px-[0.65em] pb-[0.25em] pt-[0.35em] text-center align-baseline text-[0.75em] font-bold leading-none text-sky-100">Buku</span>
                          
                        </div>
                        <span class="mb-2 block h-9 overflow-hidden break-words text-sm font-semibold text-mineshaft line-clamp-2 text-gray-600">Conto Produk</span>
                        <div class="flex pb-2">
                          <span class="inlin-block overflow-hidden text-ellipsis whitespace-nowrap text-xs text-gray-700">
                              Toko <svg width="12" height="12" viewBox="0 0 19 20" fill="none" xmlns="http://www.w3.org/2000/svg" role="img" class="ml-1 -mt-[3px] inline-block"><path fill-rule="evenodd" clip-rule="evenodd" d="M10.407 1.689c-.293-1.585-2.471-1.585-2.764 0-.207 1.124-1.517 1.577-2.328.804l-.126-.12c-1.121-1.068-2.83.273-2.157 1.693.485 1.021-.316 2.195-1.402 2.052l-.103-.014C.031 5.906-.607 8.022.73 8.751c.967.528.967 1.97 0 2.498-1.336.729-.698 2.845.798 2.647l.103-.014c1.086-.143 1.887 1.03 1.402 2.052-.674 1.42 1.036 2.761 2.157 1.693l.126-.12c.81-.773 2.12-.32 2.328.804.293 1.585 2.471 1.585 2.764 0 .207-1.124 1.517-1.577 2.328-.804l.126.12c1.121 1.068 2.83-.273 2.157-1.693-.485-1.021.316-2.195 1.402-2.052l.103.014c1.496.198 2.134-1.918.798-2.647-.968-.528-.968-1.97 0-2.498 1.336-.729.698-2.845-.798-2.647l-.103.014c-1.086.143-1.887-1.03-1.402-2.052.673-1.42-1.036-2.761-2.157-1.692l-.126.12c-.81.772-2.12.32-2.328-.805Zm1.534 5.665c.452.337.544.975.204 1.424L9.21 12.443a1.026 1.026 0 0 1-1.543.109L6 10.814c-.4-.397-.4-1.042 0-1.44a1.029 1.029 0 0 1 1.449 0l.83.909 2.228-2.726c.339-.45.98-.54 1.434-.203Z" fill="#10A8E5"></path></svg>
                      
                          </span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="inline-block whitespace-nowrap rounded-full bg-sky-400 px-[0.65em] pb-[0.25em] pt-[0.35em] text-center align-baseline text-[0.75em] font-bold leading-none text-sky-100">Rp30.000</span>
                            <span class="inline-block whitespace-nowrap rounded-full bg-blue-400 px-[0.65em] pb-[0.25em] pt-[0.35em] text-center align-baseline text-[0.75em] font-bold leading-none text-sky-100">New</span>
                        </div>
                      </div>
                    </a>
                    
                  </div>
                </div>
                @endforeach
              
              </div>
        </section>
    </div>
</div>

@endsection