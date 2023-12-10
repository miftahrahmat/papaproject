@extends('layouts.auth')

@section('css')
<style>
</style>
@endsection
@section('content')
<div class="px-4 py-3 z-50 sticky top-0 bg-sky-500 text-white">
    <a href="{{ url('/home') }}">
    <div class="container px-0 flex items-center">
        <button class="mr-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>
        </button>
        <h2 class="flex-1 truncate font-bold">Kotak Masuk</h2>
    </div>
    </a>
</div>

<div class="container mb-12">
    <div class="-mx-4">
        <div class="relative px-2">
<div class="bg-white min-h-screen">
    <div class="pb-[65px]">
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
      >Filter</a
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
    >Semua</a
  >
</li>
<li role="profile" class="flex-grow basis-0 text-center">
  <a href="#pills-profile02"
    class="my-2 block rounded bg-neutral-100 p-2 text-xs font-medium uppercase leading-tight text-neutral-500 data-[te-nav-active]:!bg-primary-100 data-[te-nav-active]:text-primary-700 dark:bg-neutral-700 dark:text-white dark:data-[te-nav-active]:text-primary-700 mr-4"
    id="pills-profile-tab02"
    data-te-toggle="pill"
    data-te-target="#pills-profile02"
    role="tab"
    aria-controls="pills-profile02"
    aria-selected="false"
    >Mutasi</a
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
    >Transaksi</a
  >
</li>

</ul>

<!--Pills content-->
<div class="mb-6">
<div class="hidden opacity-100 transition-opacity duration-150 ease-linear data-[te-tab-active]:block"
  id="pills-home02" role="tabpanel" aria-labelledby="pills-home-tab02" data-te-tab-active>
  <div id="data-semua">
    @include('data.semua')
  </div>

  <div class="relative top-[10px]">
    <div class="pesan-semua flex justify-center rounded-[4px] border-[0.5px] border-[#FFBD20] py-5 px-3 text-sm mb-3" style="display: none;">
        <div class="mx-auto items-center">
          
        </div>
    </div>
    <div class="flex justify-between">
        <div class="mx-auto items-center">
          <button type="button" class="load-semua read inline-block rounded-lg border-2 border-primary-100 px-6 pb-[6px] pt-2 text-xs font-medium uppercase leading-normal text-primary-700 transition duration-150 ease-in-out hover:border-primary-accent-100 hover:bg-neutral-500 hover:bg-opacity-10 focus:border-primary-accent-100 focus:outline-none focus:ring-0 active:border-primary-accent-200 dark:text-primary-100 dark:hover:bg-neutral-100 dark:hover:bg-opacity-10"
          data-te-ripple-init>
          <div class="inline-block spin-semua h-4 w-4 mr-2 animate-spin rounded-full border-4 border-solid border-current border-r-transparent align-[-0.125em] motion-reduce:animate-[spin_1.5s_linear_infinite]"
            role="status" style="display: none;">
          </div> Load More
          </button>
        </div>
    </div>
  </div>
  
</div>

<div class="hidden opacity-0 transition-opacity duration-150 ease-linear data-[te-tab-active]:block"
  id="pills-profile02" role="tabpanel" aria-labelledby="pills-profile-tab02">
  <div id="data-mutasi">
      @include('data.mutasi')
  </div>

  <div class="relative top-[10px]">
    <div class="pesan-mutasi flex justify-center rounded-[4px] border-[0.5px] border-[#FFBD20] py-5 px-3 text-sm mb-3" style="display: none;">
        <div class="mx-auto items-center">
          
        </div>
    </div>
    <div class="flex justify-between">
        <div class="mx-auto items-center">
          <button type="button" class="load-mutasi read inline-block rounded-lg border-2 border-primary-100 px-6 pb-[6px] pt-2 text-xs font-medium uppercase leading-normal text-primary-700 transition duration-150 ease-in-out hover:border-primary-accent-100 hover:bg-neutral-500 hover:bg-opacity-10 focus:border-primary-accent-100 focus:outline-none focus:ring-0 active:border-primary-accent-200 dark:text-primary-100 dark:hover:bg-neutral-100 dark:hover:bg-opacity-10"
          data-te-ripple-init>
          <div class="inline-block spin-mutasi h-4 w-4 mr-2 animate-spin rounded-full border-4 border-solid border-current border-r-transparent align-[-0.125em] motion-reduce:animate-[spin_1.5s_linear_infinite]"
            role="status" style="display: none;">
          </div> Load More
          </button>
        </div>
    </div>
  </div>

</div>

<div class="hidden opacity-0 transition-opacity duration-150 ease-linear data-[te-tab-active]:block"
  id="pills-contact02" role="tabpanel" aria-labelledby="pills-contact-tab02">
  <div id="data-transaksi">
    @include('data.transaksi')
  </div>

  <div class="relative top-[10px]">
    <div class="pesan-transaksi flex justify-center rounded-[4px] border-[0.5px] border-[#FFBD20] py-5 px-3 text-sm mb-3" style="display: none;">
        <div class="mx-auto items-center">
          
        </div>
    </div>
    <div class="flex justify-between">
        <div class="mx-auto items-center">
          <button type="button" class="load-transaksi read inline-block rounded-lg border-2 border-primary-100 px-6 pb-[6px] pt-2 text-xs font-medium uppercase leading-normal text-primary-700 transition duration-150 ease-in-out hover:border-primary-accent-100 hover:bg-neutral-500 hover:bg-opacity-10 focus:border-primary-accent-100 focus:outline-none focus:ring-0 active:border-primary-accent-200 dark:text-primary-100 dark:hover:bg-neutral-100 dark:hover:bg-opacity-10"
          data-te-ripple-init>
          <div class="inline-block spin-transaksi h-4 w-4 mr-2 animate-spin rounded-full border-4 border-solid border-current border-r-transparent align-[-0.125em] motion-reduce:animate-[spin_1.5s_linear_infinite]"
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
    @if(session('success'))

        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        });
        
        Toast.fire({
            icon: 'success',
            title: '{{ session("success") }}'
        });

    @endif
</script>
<script type="module">
    $(".read").on("click", function() {
        $.ajax({
            url: "<?php echo route('ajax.read.inbox') ?>",
            type: "POST",
            data: {
                '_token': '<?php echo csrf_token(); ?>',
            }
        })
    });
</script>

<script type="module">
  var ENDPOINT = "{{ route('inbox') }}";
  var semua = 1;

$(".load-semua").on("click", function() {
  semua++;
    infinteLoadMore(semua);
    
});
function infinteLoadMore(semua) {
    $.ajax({
            url: ENDPOINT + "?page=" + semua,
            datatype: "html",
            type: "get",
            beforeSend: function () {
                $('.spin-semua').show();
            }
        })
        .done(function (response) {
            if (response.semua == '') {
                $('.pesan-semua').show().html("You don't have more data to display :(");
                $('.load-semua').hide();
                return;
            }

            $('.spin-semua').hide();
            $("#data-semua").append(response.semua);
        })
        .fail(function (jqXHR, ajaxOptions, thrownError) {
            console.log('Server error occured');
        });
}
</script>

<script type="module">
  var ENDPOINT = "{{ route('inbox') }}";
  var mutasi = 1;

$(".load-mutasi").on("click", function() {
    mutasi++;
    infinteLoadMore(mutasi);
    
});
function infinteLoadMore(mutasi) {
    $.ajax({
            url: ENDPOINT + "?page=" + mutasi,
            datatype: "html",
            type: "get",
            beforeSend: function () {
                $('.spin-mutasi').show();
            }
        })
        .done(function (response) {
            if (response.mutasi == '') {
                $('.pesan-mutasi').show().html("You don't have more data to display :(");
                $('.load-mutasi').hide();
                return;
            }

            $('.spin-mutasi').hide();
            $("#data-mutasi").append(response.mutasi);
        })
        .fail(function (jqXHR, ajaxOptions, thrownError) {
            console.log('Server error occured');
        });
}
</script>

<script type="module">
  var ENDPOINT = "{{ route('inbox') }}";
  var transaksi = 1;

$(".load-transaksi").on("click", function() {
    transaksi++;
    infinteLoadMore(transaksi);
    
});
function infinteLoadMore(transaksi) {
    $.ajax({
            url: ENDPOINT + "?page=" + transaksi,
            datatype: "html",
            type: "get",
            beforeSend: function () {
                $('.spin-transaksi').show();
            }
        })
        .done(function (response) {
            if (response.transaksi == '') {
                $('.pesan-transaksi').show().html("You don't have more data to display :(");
                $('.load-transaksi').hide();
                return;
            }

            $('.spin-transaksi').hide();
            $("#data-transaksi").append(response.transaksi);
        })
        .fail(function (jqXHR, ajaxOptions, thrownError) {
            console.log('Server error occured');
        });
}
</script>
@endsection