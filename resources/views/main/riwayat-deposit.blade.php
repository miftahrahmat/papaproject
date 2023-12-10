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
        <h2 class="flex-1 truncate font-bold">Riwayat Deposit</h2>
    </div>
    </a>
</div>

<div class="bg-white min-h-screen">
    <div class="container mb-12">
        <div class="relative pb-[65px] px-2">
            <ul class="mb-5 flex list-none pl-0 flex-row mt-4" role="tablist" data-te-nav-ref>
                <li role="disabled" class="flex-grow basis-0 text-center">
                    <a href="#pills-disabled02"
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
                    >Pending</a
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
                    >Batal</a
                  >
                </li>

            </ul>

            <!--Pills content-->
            <div class="mb-6">
                <div class="hidden opacity-100 transition-opacity duration-150 ease-linear data-[te-tab-active]:block"
                  id="pills-home02" role="tabpanel" aria-labelledby="pills-home-tab02" data-te-tab-active>
                    <div id="data-pending">
                        @include('data.deposit-pending')
                    </div>
                    <div class="relative top-[10px]">
                        <div class="pesan-pending flex justify-center rounded-[4px] border-[0.5px] border-[#FFBD20] py-5 px-3 text-sm mb-3" style="display: none;">
                            <div class="mx-auto items-center">
                              
                            </div>
                        </div>
                        <div class="flex justify-between">
                            <div class="mx-auto items-center">
                              <button type="button" class="load-pending inline-block rounded-lg border-2 border-primary-100 px-6 pb-[6px] pt-2 text-xs font-medium uppercase leading-normal text-primary-700 transition duration-150 ease-in-out hover:border-primary-accent-100 hover:bg-neutral-500 hover:bg-opacity-10 focus:border-primary-accent-100 focus:outline-none focus:ring-0 active:border-primary-accent-200 dark:text-primary-100 dark:hover:bg-neutral-100 dark:hover:bg-opacity-10"
                              data-te-ripple-init>
                              <div class="inline-block spin-pending h-4 w-4 mr-2 animate-spin rounded-full border-4 border-solid border-current border-r-transparent align-[-0.125em] motion-reduce:animate-[spin_1.5s_linear_infinite]"
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
                        @include('data.deposit-sukses')
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
                        @include('data.deposit-batal')
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
@endsection
@section('js')
<script type="module">
var ENDPOINT = "{{ route('riwayat.deposit') }}";
  var pending = 1;

$(".load-pending").on("click", function() {
    pending++;
    infinteLoadMore(pending);
    
});
function infinteLoadMore(pending) {
    $.ajax({
            url: ENDPOINT + "?page=" + pending,
            datatype: "html",
            type: "get",
            beforeSend: function () {
                $('.spin-pending').show();
            }
        })
        .done(function (response) {
            if (response.pending == '') {
                $('.pesan-pending').show().html("You don't have more data to display :(");
                $('.load-pending').hide();
                return;
            }

            $('.spin-pending').hide();
            $("#data-pending").append(response.pending);
        })
        .fail(function (jqXHR, ajaxOptions, thrownError) {
            console.log('Server error occured');
        });
}
</script>
<script type="module">
    var ENDPOINT = "{{ route('riwayat.deposit') }}";
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
    var ENDPOINT = "{{ route('riwayat.deposit') }}";
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