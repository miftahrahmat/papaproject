@extends('layouts.auth')

@section('css')
<style>
</style>
@endsection
@section('content')
<div class="px-4 py-3 z-50 sticky top-0 bg-sky-500 text-white">
    <a href="{{ url('/akun') }}">
    <div class="container px-0 flex items-center">
        <button class="mr-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>
        </button>
        <h2 class="flex-1 truncate font-bold">Riwayat Transaksi</h2>
    </div>
    </a>
</div>
<div class="container mb-12">
    <div class="-mx-4">
        <div class="relative px-2">
@if($pending)
<div class="mx-auto mt-3 hidden w-full items-center rounded-lg bg-warning-100 px-4 py-5 text-base text-warning-800 data-[te-alert-show]:inline-flex"
  role="alert" data-te-alert-init data-te-alert-show>
  <a href="{{ url('/akun/riwayat/transaksi', $pending->order_id) }}">
   <div class="flex justify-between cursor-pointer">
        <div class="flex-1">
            <div class="text-xs mb-2">
                <span class="inline-block whitespace-nowrap rounded-[0.27rem] bg-info-100 px-[1em] pb-[1em] pt-[1em] text-center align-baseline text-[1em] font-bold leading-none text-info-800 uppercase">Menunggu Pembayaran</span>
            </div>
            <div class="mb-2 text-sm">
                <span class="font-semibold text-gray-900 hover:text-gray-600">Pembelian Layanan {{ $pending->layanan }}</span>
            </div>
        </div>
   </div>
   </a>
  <button type="button" class="ml-auto -mt-10 box-content rounded-none border-none p-1 text-warning-900 opacity-50 hover:text-warning-900 hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none"
    data-te-alert-dismiss aria-label="Close">
    <span class="w-[1em] focus:opacity-100 disabled:pointer-events-none disabled:select-none disabled:opacity-25 [&.disabled]:pointer-events-none [&.disabled]:select-none [&.disabled]:opacity-25">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-6 w-6">
        <path fill-rule="evenodd"
          d="M5.47 5.47a.75.75 0 011.06 0L12 10.94l5.47-5.47a.75.75 0 111.06 1.06L13.06 12l5.47 5.47a.75.75 0 11-1.06 1.06L12 13.06l-5.47 5.47a.75.75 0 01-1.06-1.06L10.94 12 5.47 6.53a.75.75 0 010-1.06z"
          clip-rule="evenodd" />
      </svg>
    </span>
  </button>
</div>
@endif

<div class="bg-white min-h-screen">
    <div class="pb-[35px]">
        <div class="pt-2">
           <!--Pills navigation-->
<ul
class="mb-5 flex list-none pl-0 flex-row"
role="tablist"
data-te-nav-ref>
<li role="disabled" class="flex-grow basis-0 text-center">
    <a
      href="#pills-disabled02"
      class="pointer-events-none my-2 block rounded bg-neutral-200 p-2 text-xs font-medium uppercase leading-tight text-neutral-400 dark:bg-neutral-600 dark:text-neutral-500 mr-4"
      id="pills-disabled-tab02"
      data-te-toggle="pill"
      data-te-target="#pills-disabled02"
      role="tab"
      aria-controls="pills-disabled02"
      aria-selected="false"
      >Status</a
    >
  </li>
<li role="presentation" class="flex-grow basis-0 text-center">
  <a
    href="#pills-home02"
    class="my-2 block rounded bg-neutral-100 p-2 text-xs font-medium uppercase leading-tight text-neutral-500 data-[te-nav-active]:!bg-primary-100 data-[te-nav-active]:text-primary-700 dark:bg-neutral-700 dark:text-white dark:data-[te-nav-active]:text-primary-700 mr-4"
    id="pills-home-tab02"
    data-te-toggle="pill"
    data-te-target="#pills-home02"
    data-te-nav-active
    role="tab"
    aria-controls="pills-home02"
    aria-selected="true"
    >Proses</a
  >
</li>
<li role="profile" class="flex-grow basis-0 text-center">
  <a
    href="#pills-profile02"
    class="my-2 block rounded bg-neutral-100 p-2 text-xs font-medium uppercase leading-tight text-neutral-500 data-[te-nav-active]:!bg-primary-100 data-[te-nav-active]:text-primary-700 dark:bg-neutral-700 dark:text-white dark:data-[te-nav-active]:text-primary-700 mr-4"
    id="pills-profile-tab02"
    data-te-toggle="pill"
    data-te-target="#pills-profile02"
    role="tab"
    aria-controls="pills-profile02"
    aria-selected="false"
    >Berhasil</a
  >
</li>
<li role="contact" class="flex-grow basis-0 text-center">
  <a
    href="#pills-contact02"
    class="my-2 block rounded bg-neutral-100 p-2 text-xs font-medium uppercase leading-tight text-neutral-500 data-[te-nav-active]:!bg-primary-100 data-[te-nav-active]:text-primary-700 dark:bg-neutral-700 dark:text-white dark:data-[te-nav-active]:text-primary-700"
    id="pills-contact-tab02"
    data-te-toggle="pill"
    data-te-target="#pills-contact02"
    role="tab"
    aria-controls="pills-contact02"
    aria-selected="false"
    >Gagal</a
  >
</li>

</ul>

<!--Pills content-->
<div class="mb-6">
<div class="hidden opacity-100 transition-opacity duration-150 ease-linear data-[te-tab-active]:block"
  id="pills-home02" role="tabpanel" aria-labelledby="pills-home-tab02" data-te-tab-active>
  <div id="data-proses">
     @include('data.riwayat-transaksi-proses')
  </div>
  <div class="relative top-[10px]">
    <div class="pesan-proses flex justify-center rounded-[4px] border-[0.5px] border-[#FFBD20] py-5 px-3 text-sm mb-3" style="display: none;">
        <div class="mx-auto items-center">
          
        </div>
    </div>
    <div class="flex justify-between">
        <div class="mx-auto items-center">
          <button type="button" class="load-proses inline-block rounded-lg border-2 border-primary-100 px-6 pb-[6px] pt-2 text-xs font-medium uppercase leading-normal text-primary-700 transition duration-150 ease-in-out hover:border-primary-accent-100 hover:bg-neutral-500 hover:bg-opacity-10 focus:border-primary-accent-100 focus:outline-none focus:ring-0 active:border-primary-accent-200 dark:text-primary-100 dark:hover:bg-neutral-100 dark:hover:bg-opacity-10"
          data-te-ripple-init>
          <div class="inline-block spin-proses h-4 w-4 mr-2 animate-spin rounded-full border-4 border-solid border-current border-r-transparent align-[-0.125em] motion-reduce:animate-[spin_1.5s_linear_infinite]"
            role="status" style="display: none;">
          </div> Load More
          </button>
        </div>
    </div>
  </div>
</div>

<div class="hidden opacity-0 transition-opacity duration-150 ease-linear data-[te-tab-active]:block"
  id="pills-profile02" role="tabpanel" aria-labelledby="pills-profile-tab02">
    
  <div id="data-sukses">
     @include('data.riwayat-transaksi-sukses')
  </div>
  <div class="relative top-[10px]">
    <div class="pesan-sukses flex justify-center rounded-[4px] border-[0.5px] border-[#FFBD20] py-5 px-3 text-sm mb-3" style="display: none;">
        <div class="mx-auto items-center">
          
        </div>
    </div>
    <div class="flex justify-between">
        <div class="mx-auto items-center">
          <button type="button" class="load-sukses inline-block rounded-lg border-2 border-primary-100 px-6 pb-[6px] pt-2 text-xs font-medium uppercase leading-normal text-primary-700 transition duration-150 ease-in-out hover:border-primary-accent-100 hover:bg-neutral-500 hover:bg-opacity-10 focus:border-primary-accent-100 focus:outline-none focus:ring-0 active:border-primary-accent-200 dark:text-primary-100 dark:hover:bg-neutral-100 dark:hover:bg-opacity-10"
          data-te-ripple-init>
          <div class="inline-block spin-sukses h-4 w-4 mr-2 animate-spin rounded-full border-4 border-solid border-current border-r-transparent align-[-0.125em] motion-reduce:animate-[spin_1.5s_linear_infinite]"
            role="status" style="display: none;">
          </div> Load More
          </button>
        </div>
    </div>
  </div>

</div>
<div class="hidden opacity-0 transition-opacity duration-150 ease-linear data-[te-tab-active]:block"
  id="pills-contact02" role="tabpanel" aria-labelledby="pills-contact-tab02">
   
  <div id="data-batal">
     @include('data.riwayat-transaksi-batal')
  </div>
  <div class="relative top-[10px]">
    <div class="pesan-batal flex justify-center rounded-[4px] border-[0.5px] border-[#FFBD20] py-5 px-3 text-sm mb-3" style="display: none;">
        <div class="mx-auto items-center">
          
        </div>
    </div>
    <div class="flex justify-between">
        <div class="mx-auto items-center">
          <button type="button" class="load-batal inline-block rounded-lg border-2 border-primary-100 px-6 pb-[6px] pt-2 text-xs font-medium uppercase leading-normal text-primary-700 transition duration-150 ease-in-out hover:border-primary-accent-100 hover:bg-neutral-500 hover:bg-opacity-10 focus:border-primary-accent-100 focus:outline-none focus:ring-0 active:border-primary-accent-200 dark:text-primary-100 dark:hover:bg-neutral-100 dark:hover:bg-opacity-10"
          data-te-ripple-init>
          <div class="inline-block spin-batal h-4 w-4 mr-2 animate-spin rounded-full border-4 border-solid border-current border-r-transparent align-[-0.125em] motion-reduce:animate-[spin_1.5s_linear_infinite]"
            role="status" style="display: none;">
          </div> Load More
          </button>
        </div>
    </div>
  </div>

</div>
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
var ENDPOINT = "{{ route('riwayat.transaksi') }}";
  var proses = 1;

$(".load-proses").on("click", function() {
  proses++;
    infinteLoadMore(proses);
    
});
function infinteLoadMore(proses) {
    $.ajax({
            url: ENDPOINT + "?page=" + proses,
            datatype: "html",
            type: "get",
            beforeSend: function () {
                $('.spin-proses').show();
            }
        })
        .done(function (response) {
            if (response.proses == '') {
                $('.pesan-proses').show().html("You don't have more data to display :(");
                $('.load-proses').hide();
                return;
            }

            $('.spin-proses').hide();
            $("#data-proses").append(response.proses);
        })
        .fail(function (jqXHR, ajaxOptions, thrownError) {
            console.log('Server error occured');
        });
}
</script>
<script type="module">
    var ENDPOINT = "{{ route('riwayat.transaksi') }}";
      var sukses = 1;
    
    $(".load-sukses").on("click", function() {
      sukses++;
        infinteLoadMore(sukses);
        
    });
    function infinteLoadMore(sukses) {
        $.ajax({
                url: ENDPOINT + "?page=" + sukses,
                datatype: "html",
                type: "get",
                beforeSend: function () {
                    $('.spin-sukses').show();
                }
            })
            .done(function (response) {
                if (response.sukses == '') {
                    $('.pesan-sukses').show().html("You don't have more data to display :(");
                    $('.load-sukses').hide();
                    return;
                }
    
                $('.spin-sukses').hide();
                $("#data-sukses").append(response.sukses);
            })
            .fail(function (jqXHR, ajaxOptions, thrownError) {
                console.log('Server error occured');
            });
    }
    </script>
<script type="module">
    var ENDPOINT = "{{ route('riwayat.transaksi') }}";
      var batal = 1;
    
    $(".load-batal").on("click", function() {
        batal++;
        infinteLoadMore(batal);
        
    });
    function infinteLoadMore(batal) {
        $.ajax({
                url: ENDPOINT + "?page=" + batal,
                datatype: "html",
                type: "get",
                beforeSend: function () {
                    $('.spin-batal').show();
                }
            })
            .done(function (response) {
                if (response.batal == '') {
                    $('.pesan-batal').show().html("You don't have more data to display :(");
                    $('.load-batal').hide();
                    return;
                }
    
                $('.spin-batal').hide();
                $("#data-batal").append(response.batal);
            })
            .fail(function (jqXHR, ajaxOptions, thrownError) {
                console.log('Server error occured');
            });
    }
    </script>
@endsection