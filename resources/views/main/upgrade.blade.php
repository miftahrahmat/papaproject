@extends('layouts.auth')

@section('css')
<style>
  .h-7{
    height: 1rem;
  }
  .w-7{
    width: 3.75rem;
  }
</style>
@endsection
@section('content')
<div class="px-4 py-3 z-50 sticky top-0 bg-sky-500 text-white">
    <a href="{{ url('/akun') }}">
    <div class="container px-0 flex items-center">
        <button class="mr-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>
        </button>
        <h2 class="flex-1 truncate font-bold">Upgrade Level</h2>
    </div>
    </a>
</div>
<section class="mb-32 mt-5">
    <div class="block h-full rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
          <div class="border-b-2 border-neutral-100 border-opacity-100 p-6 text-center dark:border-opacity-10">
            <p class="mb-4 text-sm uppercase">
              <strong>Akun Level Gold</strong>
            </p>
            <h3 class="mb-6 text-3xl">
              <strong>$ 129</strong>
              <small class="text-base text-neutral-500 dark:text-neutral-300">/year</small>
            </h3>

            <button type="button"
              class="inline-block w-full rounded bg-primary-100 px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-primary-700 transition duration-150 ease-in-out hover:bg-primary-accent-100 focus:bg-primary-accent-100 focus:outline-none focus:ring-0 active:bg-primary-accent-200"
              data-te-ripple-init data-te-ripple-color="light" data-te-offcanvas-toggle data-te-target="#offcanvasBottom" aria-controls="offcanvasBottom">
              Upgrade Sekarang
            </button>
          </div>
          <div class="p-6">
            <ol class="list-inside">
              <li class="mb-4 flex">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                  stroke="currentColor" class="mr-3 h-5 w-5 text-primary dark:text-primary-400">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>Unlimited
                updates
              </li>
              <li class="mb-4 flex">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                  stroke="currentColor" class="mr-3 h-5 w-5 text-primary dark:text-primary-400">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>Git
                repository
              </li>
              <li class="mb-4 flex">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                  stroke="currentColor" class="mr-3 h-5 w-5 text-primary dark:text-primary-400">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>npm
                installation
              </li>
            </ol>
          </div>
        </div>

        <div class="invisible rounded-tr-sm rounded-tl-sm fixed bottom-0 mx-auto left-0 right-0 z-[1045] flex h-auto max-h-full max-w-lg translate-y-full flex-col border-none bg-white bg-clip-padding text-neutral-700 shadow-sm outline-none transition duration-300 ease-in-out dark:bg-neutral-800 dark:text-neutral-200 [&[data-te-offcanvas-show]]:transform-none"
  tabindex="-1" id="offcanvasBottom" aria-labelledby="offcanvasBottomLabel" data-te-offcanvas-init>
  <div class="flex items-center justify-between p-4">
    <h5 class="mb-0 font-semibold leading-normal" id="offcanvasBottomLabel">
      Upgrade Level Gold
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
  <form action="{{ route('upgrade.post') }}" method="POST">
  @csrf
    <div class="small flex-grow overflow-y-auto p-4">
      <div class="w-full space-y-4 py-4">
          <div class="flex flex-col">
              <p class="text-sm mb-1">
                  Pilih Level Akun
              </p>
              <div class="relative w-full">
                <select data-te-select-init data-te-select-option-height="52" name="type" data-te-select-auto-select="true">
                  <option>
                    ............
                  </option>
                  <option value="gold" data-te-select-secondary-text="Rp99K">
                    Level Gold
                  </option>
                  <option value="plus" data-te-select-secondary-text="Rp199K">
                    Level Gold Plus
                  </option>
                </select>
              </div>
          </div>

          <div class="flex flex-col">
            <p class="text-sm mb-1">
                Pilih Pembayaran
            </p>
            <div class="relative w-full">
              <select data-te-select-init data-te-select-custom-content-ref name="method">
                @foreach($pay as $p)
                <option value="{{ $p->name }}" data-te-select-icon="{{ asset('/payments/'. $p->images .'') }}">
                  {{ $p->name }}
                </option>
                @endforeach
              </select>
            </div>
        </div>
      </div>
      <hr class="mb-3">
      <div class="sticky bottom-0 space-y-2 bg-white">
          <div class="ds-w-full ds-px-4 ds-py-2 ds-bg-white ds-shadow-top ds-flex ds-flex-col ds-space-y-4">
              <div>
                  <div class="flex flex-col space-y-2px">
                      <p class="text-base text-nero">Subtotal</p>
                      <span class="flex flex-row space-x-2 items-center">
                          <p class="text-xl text-orange-500 font-bold harga"></p>
                      </span>
                  </div>
              </div>
              <div class="flex justify-end items-end">
                  <div class="self-end">
                      <button class="align-middle cursor-pointer text-lg capitalize bg-sky-500 px-5 w-full h-10 rounded-lg text-white font-bold flex justify-self-end items-center">
                          <div class="flex flex-row-reverse">
                              <span class="leading-4 self-center">Lanjutkan</span>
                          </div>
                      </button>
                  </div>
              </div>
          </div>
      </div>
    </div>
  </form> 
</div>
</section>
@endsection
@section('js')
<script type="module">
$(document).ready(function() {
        $("select[name=type]").change(function() {
            var type = $("select[name='type']").val();

            if (type) {
                $.ajax({
                    url: "<?php echo route ('price.up') ?>",
                    dataType: "json",
                    type: "POST",
                    data: {
                        "_token": "<?php echo csrf_token() ?>",
                        "type": type
                    },
                    success: function(res) {
                        changeHarga(res.harga);
                    } 
                })
            }
            
        });
});

function changeHarga(harga)
    {
      $(".harga").html(harga);
    }
</script>
@endsection