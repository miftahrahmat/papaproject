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
        <h2 class="flex-1 truncate font-bold">Transfer Saldo</h2>
    </div>
    </a>
</div>
<div class="container mb-12">
    <div class="-mx-4">
        <div class="relative pb-3 px-2">
             <div class="relative top-[30px]">
              <div class="flex justify-between rounded-[4px] border-[0.5px] border-[#FFBD20] py-5 px-3 text-sm">
                  <div>
                      <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" role="img"><path fill-rule="evenodd" clip-rule="evenodd" d="M22 12c0 5.523-4.477 10-10 10S2 17.523 2 12 6.477 2 12 2s10 4.477 10 10ZM10.333 7.556a1.667 1.667 0 1 1 3.334 0V12a1.667 1.667 0 0 1-3.334 0V7.556ZM12 14.778a1.667 1.667 0 1 0 0 3.333 1.667 1.667 0 0 0 0-3.333Z" fill="#FFBD20"></path></svg>
                  </div>
                  <div class="ml-[10px]">
                      <span class="mr-1 font-bold">INFORMAIS!</span>
                      <span>Minimal transfer Rp15.000 ke semua level akun. Jika ada kendala silahkan hubungi Customer Service kami. </span>
                  </div>
              </div>
              
            </div>
            <section class="mb-12 mt-20">
                <form action="{{ route('transfer.post') }}" method="POST">
                  @csrf
                <!--E-mail input-->
                <div class="flex flex-col items-start mb-4">
                    <label for="user" class="block text-sm font-medium pb-2">Email Penerima</label>
                    <input class="@error('email') is-invalid @enderror relative block w-full appearance-none border-slate-600 bg-slate-700 px-3 py-2 text-xs text-white placeholder-slate-400 focus:z-10 focus:border-primary-500 focus:outline-none focus:ring-primary-500 disabled:cursor-not-allowed disabled:opacity-75 !rounded-md !border-0 !bg-murky-200 !text-murky-800 !placeholder-murky-800 accent-murky-800 !ring-0 placeholder:text-xs focus:!border-transparent focus:bg-slate-600 focus:!ring-transparent" type="email" placeholder="dadang@gmail.com" id="user" name="email">
                    @error('email')
                    <p class="text-orange-500 text-xs p-2" role="alert">
                        <strong>{{ $message }}</strong>
                    </p>
                  @enderror    
                </div>
            
                <div class="flex flex-col items-start mb-10">
                    <label for="nominal" class="block text-sm font-medium pb-2">Nominal Transfer</label>
                    <input class="@error('nominal') is-invalid @enderror relative block w-full appearance-none border-slate-600 bg-slate-700 px-3 py-2 text-xs text-white placeholder-slate-400 focus:z-10 focus:border-primary-500 focus:outline-none focus:ring-primary-500 disabled:cursor-not-allowed disabled:opacity-75 !rounded-md !border-0 !bg-murky-200 !text-murky-800 !placeholder-murky-800 accent-murky-800 !ring-0 placeholder:text-xs focus:!border-transparent focus:bg-slate-600 focus:!ring-transparent" type="number" placeholder="Minimal Rp10.000" id="nominal" name="nominal">
                    @error('nominal')
                    <p class="text-orange-500 text-xs p-2" role="alert">
                        <strong>{{ $message }}</strong>
                    </p>
                  @enderror
                </div>
            
            
                <!--Submit button-->
                <button type="submit" class="inline-block w-full rounded bg-primary px-6 pb-2 pt-2.5 text-sm font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
                  data-te-ripple-init
                  data-te-ripple-color="light">
                  Transfer Sekarang
                </button>
              </form>
            </section>
        </div>
    </div>
</div>  
@endsection
@section('js')
<script type="module">
    @if(session('error'))

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
            icon: 'error',
            title: '{{ session("error") }}'
        });

    @endif
</script>
@endsection