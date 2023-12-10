@extends('layouts.auth')

@section('content')
<div class="bg-gray-100 flex mb-12 flex-col justify-center sm:py-12">
    <div class="p-5 xs:p-0 mx-auto md:w-full md:max-w-md">
    <img src="{{ asset('assets/logo.png') }}" class="w-[180px] mb-5 mx-auto">
        <div class="bg-white shadow w-full rounded-lg divide-y divide-gray-200">
            <div class="px-5 py-7">
                <form method="POST" action="{{ route('register') }}">
                @csrf
                    <label class="font-semibold text-sm text-gray-600 pb-1 block">Nama Lengkap</label>
                    <input type="text" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus class="border rounded-lg px-3 py-2 mt-1 mb-5 text-sm w-full" />
                    
                    <label class="font-semibold text-sm text-gray-600 pb-1 block">E-mail</label>
                    <input type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus class="border rounded-lg px-3 py-2 mt-1 mb-5 text-sm w-full" />
                    
                    <label class="font-semibold text-sm text-gray-600 pb-1 block">Password</label>
                    <input type="password" name="password" class="border rounded-lg px-3 py-2 mt-1 mb-5 text-sm w-full" />
                    
                    <label class="font-semibold text-sm text-gray-600 pb-1 block">Confirm Password</label>
                    <input type="password" name="password_confirmation" required autocomplete="new-password" class="border rounded-lg px-3 py-2 mt-1 mb-5 text-sm w-full" />
                    
                    <button type="submit" class="transition duration-200 bg-blue-500 hover:bg-blue-600 focus:bg-blue-700 focus:shadow-sm focus:ring-4 focus:ring-blue-500 focus:ring-opacity-50 text-white w-full py-2.5 rounded-lg text-sm shadow-sm hover:shadow-md font-semibold text-center inline-block">
                        <span class="inline-block mr-2">Lanjutkan</span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-4 h-4 inline-block">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </button>
                </form>
            <div class="my-4 flex items-center before:mt-0.5 before:flex-1 before:border-t before:border-neutral-300 after:mt-0.5 after:flex-1 after:border-t after:border-neutral-300">
            <p
              class="mx-4 mb-0 text-center font-semibold dark:text-neutral-200">
              OR LOGIN WITH
            </p>
            </div>
            <div class="py-4">
                <div class="grid grid-cols-3 gap-1">
                    <button type="button" class="transition duration-200 border border-gray-200 text-gray-500 w-full py-2.5 rounded-lg text-sm shadow-sm hover:shadow-md font-normal text-center inline-block">Facebook</button>
                    <a href="{{ route('auth.google') }}"><button type="button" class="transition duration-200 border border-gray-200 text-gray-500 w-full py-2.5 rounded-lg text-sm shadow-sm hover:shadow-md font-normal text-center inline-block">Google</button></a>
                    <button type="button" class="transition duration-200 border border-gray-200 text-gray-500 w-full py-2.5 rounded-lg text-sm shadow-sm hover:shadow-md font-normal text-center inline-block">Github</button>
                </div>
            </div>
        </div>
        <div class="py-5">
            <div class="grid grid-cols-2 gap-1">
                <div class="text-center sm:text-left whitespace-nowrap">
                    <button class="transition duration-200 mx-5 px-5 py-4 cursor-pointer font-normal text-sm rounded-lg text-gray-500 hover:bg-gray-200 focus:outline-none focus:bg-gray-300 focus:ring-2 focus:ring-gray-400 focus:ring-opacity-50 ring-inset">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-4 h-4 inline-block align-text-top">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                </svg>
                <span class="inline-block ml-1">Back to home</span>
            </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
<script type="module">
    @error('email')

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
    @error('password')

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
@endsection
