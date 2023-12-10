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
        <h2 class="flex-1 truncate font-bold">Edit Profil</h2>
    </div>
    </a>
</div>
<div class="bg-gray-100 flex flex-col mb-20 justify-center min-h-screen">
    <div class="p-5 xs:p-0 mx-auto md:w-full">
        <div class="bg-white shadow w-full rounded-lg divide-y divide-gray-200">
            <div class="px-5 py-4">
                <form method="POST" action="{{ route('saveprofil') }}" enctype="multipart/form-data">
                @csrf
                <div class="w-full mb-6 text-center">
                    <div class="block mx-auto overflow-hidden relative w-[70px] h-[70px]">
                        <div class="relative overflow-hidden rounded-full border shadow-sm mx-auto " style="width:70px;height:70px">
                            <img id="output" class="absolute inset-0 w-full h-full" src="{{ ($data->avatar != null) ? asset('storage/' . $data->avatar) : ''}} " width="70" height="70" alt="{{ $data->name }}">
                        </div>
                    </div>
                    <input id="avatar-file" type="file" accept="image/*" name="avatar" class="hidden" onchange="loadFile(event)">
                    <label for="avatar-file" class="block mt-2">
                        <span class="text-darkblue-500 text-sm underline cursor-pointer">Ubah avatar</span>
                    </label>
                </div>

                <div class="flex flex-col items-start mb-4">
                    <label for="Nama" class="block text-sm font-medium pb-2">Nama Lengkap</label>
                    <input class="relative block w-full appearance-none border-slate-600 bg-slate-700 px-3 py-2 text-xs text-white placeholder-slate-400 focus:z-10 focus:border-primary-500 focus:outline-none focus:ring-primary-500 disabled:cursor-not-allowed disabled:opacity-75 !rounded-md !border-0 !bg-murky-200 !text-murky-800 !placeholder-murky-800 accent-murky-800 !ring-0 placeholder:text-xs focus:!border-transparent focus:bg-slate-600 focus:!ring-transparent" type="text" value="{{ auth::user()->name }}" id="Nama" name="name" required>
                </div>

                <div class="flex flex-col items-start mb-4">
                    <label for="Email" class="block text-sm font-medium pb-2">Email</label>
                    <input class="relative block w-full appearance-none border-slate-600 bg-slate-700 px-3 py-2 text-xs text-white placeholder-slate-400 focus:z-10 focus:border-primary-500 focus:outline-none focus:ring-primary-500 disabled:opacity-75 !rounded-md !border-0 !bg-murky-200 !text-murky-800 !placeholder-murky-800 accent-murky-800 !ring-0 placeholder:text-xs focus:!border-transparent focus:bg-slate-600 focus:!ring-transparent cursor-not-allowed" type="email" value="{{ auth::user()->email }}" id="Email" name="email" readonly>
                </div>
                
                <div class="flex flex-col items-start mb-4">
                    <label for="Username" class="block text-sm font-medium pb-2">Whatsapp</label>
                    @if(auth::user()->phone != null)
                    <input class="relative block w-full appearance-none border-slate-600 bg-slate-700 px-3 py-2 text-xs text-white placeholder-slate-400 focus:z-10 focus:border-primary-500 focus:outline-none focus:ring-primary-500 disabled:opacity-75 !rounded-md !border-0 !bg-murky-200 !text-murky-800 !placeholder-murky-800 accent-murky-800 !ring-0 placeholder:text-xs focus:!border-transparent focus:bg-slate-600 focus:!ring-transparent cursor-not-allowed" type="number" id="Whatsapp" value="{{ auth::user()->phone }}" name="phone" readonly>
                    @else
                    <input class="relative block w-full appearance-none border-slate-600 bg-slate-700 px-3 py-2 text-xs text-white placeholder-slate-400 focus:z-10 focus:border-primary-500 focus:outline-none focus:ring-primary-500 disabled:cursor-not-allowed disabled:opacity-75 !rounded-md !border-0 !bg-murky-200 !text-murky-800 !placeholder-murky-800 accent-murky-800 !ring-0 placeholder:text-xs focus:!border-transparent focus:bg-slate-600 focus:!ring-transparent" type="number" id="Whatsapp" name="phone" required>
                    @endif
                </div>

                <div class="flex flex-col items-start mb-8">
                    <label for="password" class="block text-sm font-medium pb-2">Password (opsional)</label>
                    <input class="relative block w-full border-slate-600 bg-slate-700 px-3 py-2 text-xs text-white placeholder-slate-400 focus:z-10 focus:border-primary-500 focus:outline-none focus:ring-primary-500 disabled:cursor-not-allowed disabled:opacity-75 !rounded-md !border-0 !bg-murky-200 !text-murky-800 !placeholder-murky-800 accent-murky-800 !ring-0 placeholder:text-xs focus:!border-transparent focus:bg-slate-600 focus:!ring-transparent" type="password" id="password" name="password" >
                </div>
                @if(auth::user()->phone != null)
                <div class="relative top-[10px] mb-10">
                    <div class="flex justify-center rounded-[4px] border-[0.5px] border-[#FFBD20] py-5 px-3 text-sm mb-3">
                        <div>
                            <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" role="img"><path fill-rule="evenodd" clip-rule="evenodd" d="M22 12c0 5.523-4.477 10-10 10S2 17.523 2 12 6.477 2 12 2s10 4.477 10 10ZM10.333 7.556a1.667 1.667 0 1 1 3.334 0V12a1.667 1.667 0 0 1-3.334 0V7.556ZM12 14.778a1.667 1.667 0 1 0 0 3.333 1.667 1.667 0 0 0 0-3.333Z" fill="#FFBD20"></path></svg>
                        </div>
                        <div class="ml-[10px]">
                            <span class="mr-1 font-bold">PENGUMUMAN!</span>
                            <span>Demi menjaga keamanan akun, silahkan hubungi admin untuk perubahan data.</span>
                        </div>
                    </div>
                </div>
                @endauth
                    <button type="submit" class="transition duration-200 bg-blue-500 hover:bg-blue-600 focus:bg-blue-700 focus:shadow-sm focus:ring-4 focus:ring-blue-500 focus:ring-opacity-50 text-white w-full py-2.5 rounded-lg text-sm shadow-sm hover:shadow-md font-semibold text-center inline-block">
                        <span class="inline-block mr-2">Simpan Perubahan</span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-4 h-4 inline-block">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </button>
                </form>
            
        </div>
    </div>
</div>
@endsection
@section('js')
<script type="module">
    @error('avatar')
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
        title: '{{ $message }}'
    });
    @enderror
</script>
<script>
  var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
      URL.revokeObjectURL(output.src)
    }
  };
</script>
@endsection