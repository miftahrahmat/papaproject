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
        <h2 class="flex-1 truncate font-bold">Deposit Saldo</h2>
    </div>
    </a>
</div>
<section class="mb-12 mt-4 p-2">
    <div class="mb-12 alert alert-dismissible fade show items-center justify-between rounded-lg bg-red-500 py-3 px-2 text-center text-white md:flex md:text-left">
      <div class="flex flex-wrap items-center justify-center md:mb-0 md:justify-start">
        <span class="mr-2 [&>svg]:h-5 [&>svg]:w-5">
        <svg class="w-[50px] h-[50px] fill-[#ffffff]" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">

            <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
            <path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"></path>

        </svg>
        </span>
        <a href=""><span class="text-sm"><strong class="mr-1">Klik disini</strong> untuk confirm deposit manual</span></a>
      </div>
      
    </div>

    <form action="{{ route('deposit.post') }}" method="POST">
        @csrf
    <!--E-mail input-->
    <div class="flex flex-col items-start mb-4">
        <label for="nominal" class="block text-sm font-medium pb-2">Nominal Deposit</label>
        <input class="@error('jumlah') is-invalid @enderror relative block w-full appearance-none border-slate-600 bg-slate-700 px-3 py-2 text-xs text-white placeholder-slate-400 focus:z-10 focus:border-primary-500 focus:outline-none focus:ring-primary-500 disabled:cursor-not-allowed disabled:opacity-75 !rounded-md !border-0 !bg-murky-200 !text-murky-800 !placeholder-murky-800 accent-murky-800 !ring-0 placeholder:text-xs focus:!border-transparent focus:bg-slate-600 focus:!ring-transparent" type="number" placeholder="Minimal Rp200.000" id="nominal" name="jumlah">
        @error('jumlah')
            <p class="text-orange-500 text-xs p-2" role="alert">
                <strong>{{ $message }}</strong>
            </p>
        @enderror
    </div>

    <!--Password input-->
    <div class="mb-4" data-te-input-wrapper-init>
    <label for="nominal" class="block text-sm font-medium pb-2">Pilih Pembayaran</label>
      <select name="metode" data-te-select-init class="relative block w-full appearance-none border-slate-600 bg-slate-700 px-3 py-2 text-xs text-white placeholder-slate-400 focus:z-10 focus:border-primary-500 focus:outline-none focus:ring-primary-500 disabled:cursor-not-allowed disabled:opacity-75 rounded !border-0 !bg-murky-200 !text-murky-800 !placeholder-murky-800 accent-murky-800 !ring-0 placeholder:text-xs focus:!border-transparent focus:bg-slate-600 focus:!ring-transparent">
        <optgroup label="Deposit Otomatis">
          <option value="GOPAY">E-Wallet Gopay</option>
          <option value="OVO">E-Wallet Ovo</option>
        </optgroup>
        <optgroup label="Deposit Manual">
          <option value="DANA">E-Wallet Dana</option>
          <option value="MANDIRI">Bank Mandiri</option>
          <option value="BCA">Bank BCA</option>
        </optgroup>
      </select>
    </div>
    
    <div class="flex flex-col items-start mb-6">
        <label for="pengirim" class="block text-sm font-medium pb-2">Pengirim</label>
        <input class="@error('pengirim') is-invalid @enderror uppercase relative block w-full appearance-none border-slate-600 bg-slate-700 px-3 py-2 text-xs text-white placeholder-slate-400 focus:z-10 focus:border-primary-500 focus:outline-none focus:ring-primary-500 disabled:cursor-not-allowed disabled:opacity-75 !rounded-md !border-0 !bg-murky-200 !text-murky-800 !placeholder-murky-800 accent-murky-800 !ring-0 placeholder:text-xs focus:!border-transparent focus:bg-slate-600 focus:!ring-transparent" type="text" placeholder="Nama di Rekening" id="pengirim" name="pengirim">
        @error('pengirim')
            <p class="text-orange-500 text-xs p-2" role="alert">
                <strong>{{ $message }}</strong>
            </p>
        @enderror
    </div>
    <input type="hidden" name="email" value="{{ auth::user()->email }}">
    <!--Submit button-->
    <button type="submit" class="inline-block w-full rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
      data-te-ripple-init
      data-te-ripple-color="light">
      Deposit Sekarang
    </button>
  </form>
  </section>
  
@endsection
@section('js')

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
@endsection