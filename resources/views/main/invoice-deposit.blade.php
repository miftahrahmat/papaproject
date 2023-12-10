@extends('layouts.auth')

@section('css')
<style>
</style>
@endsection
@section('content')
<div class="px-4 py-3 z-50 sticky top-0 bg-sky-500 text-white">
    <a href="{{ url('/akun/riwayat/deposit') }}">
    <div class="container px-0 flex items-center">
        <button class="mr-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>
        </button>
        <h2 class="flex-1 truncate font-bold">Riwayat Deposit</h2>
    </div>
    </a>
</div>

    <div class="relative h-[500px] w-full">
        @if($data->status == "Pending")
        <div class="absolute z-auto h-[200px] w-full bg-gradient-to-r from-[#10A8E5] via-[#53CAFA] to-[#53CAFA] px-[14px] pt-[33px] text-white">
            <span class="font-[300]">Batas waktu pembayaran</span>
            <div class="flex justify-between py-[8px] font-bold text-sm">
                <span>{{ \Carbon\Carbon::parse($exp)->translatedFormat('l, j F Y H:m') }}</span>
                <div>
                    <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" role="img" class="inline"><path fill-rule="evenodd" clip-rule="evenodd" d="M10.5 20.5a7.5 7.5 0 1 0 0-15 7.5 7.5 0 0 0 0 15Zm0-12.25a.75.75 0 0 1 .75.75v3.75H14a.75.75 0 0 1 0 1.5h-3.5a.75.75 0 0 1-.75-.75V9a.75.75 0 0 1 .75-.75ZM17.724 5.315a1 1 0 0 1 1.411.09 11.498 11.498 0 0 1 2.098 3.457 1 1 0 1 1-1.866.72 9.497 9.497 0 0 0-1.733-2.856 1 1 0 0 1 .09-1.411Z" fill="#FEFEFE"></path><rect x="6.5" y="2" width="8" height="2" rx="1" fill="#FEFEFE"></rect></svg>
                    <span id="counter"></span>
                </div>
            </div>
            <span class="inline-block whitespace-nowrap rounded-full bg-warning-100 px-[0.65em] pb-[0.25em] pt-[0.35em] text-center align-baseline text-[0.75em] font-bold leading-none text-warning-700">
                Pending
            </span>
        </div>
        @else
        <div class="absolute z-auto h-[200px] w-full bg-gradient-to-r from-[#10A8E5] via-[#53CAFA] to-[#53CAFA] px-[14px] pt-[33px] text-white">
            <span class="font-[300]">Batas waktu pembayaran</span>
            <div class="flex justify-between py-[8px] font-bold text-sm">
                <span>{{ \Carbon\Carbon::parse($exp)->translatedFormat('l, j F Y H:m') }}</span>
                <svg width="24px" height="24px" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 496 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M248 43.4C130.6 43.4 35.4 138.6 35.4 256S130.6 468.6 248 468.6 460.6 373.4 460.6 256 365.4 43.4 248 43.4zm-97.4 132.9c0-53.7 43.7-97.4 97.4-97.4s97.4 43.7 97.4 97.4v26.6c0 5-3.9 8.9-8.9 8.9h-17.7c-5 0-8.9-3.9-8.9-8.9v-26.6c0-82.1-124-82.1-124 0v26.6c0 5-3.9 8.9-8.9 8.9h-17.7c-5 0-8.9-3.9-8.9-8.9v-26.6zM389.7 380c0 9.7-8 17.7-17.7 17.7H124c-9.7 0-17.7-8-17.7-17.7V238.3c0-9.7 8-17.7 17.7-17.7h248c9.7 0 17.7 8 17.7 17.7V380zm-248-137.3v132.9c0 2.5-1.9 4.4-4.4 4.4h-8.9c-2.5 0-4.4-1.9-4.4-4.4V242.7c0-2.5 1.9-4.4 4.4-4.4h8.9c2.5 0 4.4 1.9 4.4 4.4zm141.7 48.7c0 13-7.2 24.4-17.7 30.4v31.6c0 5-3.9 8.9-8.9 8.9h-17.7c-5 0-8.9-3.9-8.9-8.9v-31.6c-10.5-6.1-17.7-17.4-17.7-30.4 0-19.7 15.8-35.4 35.4-35.4s35.5 15.8 35.5 35.4zM248 8C111 8 0 119 0 256s111 248 248 248 248-111 248-248S385 8 248 8zm0 478.3C121 486.3 17.7 383 17.7 256S121 25.7 248 25.7 478.3 129 478.3 256 375 486.3 248 486.3z"/></svg>
            </div>
            @if($data->status == "Sukses")
                <span class="inline-block whitespace-nowrap rounded-full bg-success-100 px-[0.65em] pb-[0.25em] pt-[0.35em] text-center align-baseline text-[0.75em] font-bold leading-none text-success-700">
                    Berhasil
                </span>
            @elseif($data->status == "Batal")
                <span class="inline-block whitespace-nowrap rounded-full bg-red-100 px-[0.65em] pb-[0.25em] pt-[0.35em] text-center align-baseline text-[0.75em] font-bold leading-none text-red-700">
                    Batal
                </span>
            @endif
        </div>
        @endif
        <div class="absolute top-[130px] z-0 w-full rounded-[10px] bg-white px-[16px] py-[20px]">
            <div class="flex justify-between">
                <span class="pt-[8px] font-bold text-[#3a3a3a]">Pembayaran</span>
                <img alt="payment method logo" class="h-[35px] w-[72px] rounded border border-[#F2F3F4] p-[3px]" width="72" height="100" src="{{ asset('/payments/'. $pay->images .'') }}">
            </div>
            <div class="mt-[15px] flex justify-between bg-[#f9f9f9] p-[20px]">
                <div class="text-[#4a4a4a]">
                    <span class="block">{{ $an }}</span>
                    <span class="block text-[16px] font-bold" id="nomor">{{ $no }}</span>
                </div>
                <span class="mt-[10px] h-full cursor-pointer rounded-[15px] border border-[#00afef] px-[20px] py-[2px] text-sm font-bold leading-4 text-cerulean50" onclick="copyNomor()">
                    Salin
                </span>
            </div>
            <div class="flex justify-between p-[20px] leading-6">
                <div>
                    <span class="block text-[12px] text-[#6A6A6A]">Nominal Permintaan Deposit</span>
                    <span class="block text-lg font-bold" id="nominal">Rp{{ number_format($data->jumlah,0,',','.') }}</span>
                </div>
                <button class="mt-[20px] h-full cursor-pointer rounded-[15px] border border-[#00afef] px-[20px] py-[2px] text-sm font-bold leading-4 text-cerulean50" onclick="copyContent()">
                    Salin
                </button>
            </div>
            <div class="relative top-[-30px]">
                <div class="ml-[22%] -mb-[5px] inline-block w-4 ">
                    <div class="h-3 w-3 origin-bottom-left rotate-45 transform border-t-[0.5px] border-l-[0.5px]  border-t-[#FFBD20] border-l-[#FFBD20] bg-white"></div>
                </div>
                <div class="flex justify-between rounded-[4px] border-[0.5px] border-[#FFBD20] bg-[#FFF8E8] py-5 px-3 text-sm">
                    <div>
                        <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" role="img"><path fill-rule="evenodd" clip-rule="evenodd" d="M22 12c0 5.523-4.477 10-10 10S2 17.523 2 12 6.477 2 12 2s10 4.477 10 10ZM10.333 7.556a1.667 1.667 0 1 1 3.334 0V12a1.667 1.667 0 0 1-3.334 0V7.556ZM12 14.778a1.667 1.667 0 1 0 0 3.333 1.667 1.667 0 0 0 0-3.333Z" fill="#FFBD20"></path></svg>
                    </div>
                    <div class="ml-[10px]">
                        <span class="mr-1 font-bold">PENTING!</span>
                        <span>Pastikan transfer tepat sampai 3 angka terakhir agar deposit terverifikasi otomatis maksimal 1x24 jam.</span>
                    </div>
                </div>
            </div>
            <div class="p-4 -mt-4 text-gray-600">
                <div class="flex justify-between text-sm mb-4">
                    <div>
                        <span class="block text-[12px] text-[#6A6A6A]">No. Invoice</span>
                        <span class="block text-lg font-bold" id="invoice">{{ $data->invoice }}</span>
                    </div>
                    <button class="mt-[20px] h-full cursor-pointer rounded-[15px] border border-[#00afef] px-[20px] py-[2px] text-sm font-bold leading-4 text-cerulean50" onclick="copyInv()">
                        Salin
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="p-4 border-y-8 border-gray-100 mt-[4rem]">
        <div class="flex justify-between">
            <h2 class="text-gray-900 font-bold">Cara Pembayaran</h2>
            <div class="mt-[4px] cursor-pointer">
                <svg class="w-[18px] h-[24px] mese fill-[#949494]" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">

                    <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                    <path d="M256 0a256 256 0 1 0 0 512A256 256 0 1 0 256 0zM135 241c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l87 87 87-87c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9L273 345c-9.4 9.4-24.6 9.4-33.9 0L135 241z"></path>
                  
                </svg>
                <svg class="w-[18px] h-[24px] up fill-[#949494]" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">

                    <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                    <path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM377 271c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0l-87-87-87 87c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9L239 167c9.4-9.4 24.6-9.4 33.9 0L377 271z"></path>
                  
                  </svg>
            </div>
        </div>
        <div class="px-[4px] pesana">
            <div class="mt-[15px] p-[3px]">
                <h5 class="mb-[10px] text-[14px] font-bold text-[#3A3A3A]">Panduan Pembayaran</h5>
                <ol class="my-[5px] mx-2 list-decimal text-sm font-normal">
                    @if($pay->tipe != "e-wallet")
                    <li class="my-[5px] leading-[25px]">Lakukan pembayaran melalui ATM / mobile banking / internet banking / SMS banking / kantor bank terdekat.</li>
                    @else
                    <li class="my-[5px] leading-[25px]">Buka aplikasi e-wallet Kamu.</li>
                    @endif
                    <li class="my-[5px] leading-[25px]">Isi 
                        <span class="font-bold">nomor rekening</span>
                        tujuan sesuai yang ada di halaman pembayaran 
                        <span class="font-bold">(a.n {{ $an }})</span>.
                    </li>
                    <li class="my-[5px] leading-[25px]">Masukan 
                        <span class="font-bold">nominal deposit </span>
                        sesuai jumlah, termasuk <span class="font-bold">3 digit terakhir</span>
                    </li>
                    <li class="my-[5px] leading-[25px]">Pembayaran akan diverifikasi oleh Papa Official Store. Waktu verikasi paling lambat 1x24 jam untuk sesama bank, dan 2x24 jam dihari kerja jika antar bank yang berbeda.</li>
                </ol>
            </div>
        </div>
    </div>

    <div class="p-4 border-gray-100 mb-20">
        <div class="mb-6">
            <div>
                <h2 class="text-gray-900 font-bold mb-1">Punya Kendala Disini?</h2>
                <p class="text-gray-600 text-sm">Yuk tanyakan admin, siapkan juga bukti transfernya ya</p>
            </div>
        </div>
        <a href="https://api.whatsapp.com/send/?phone=6287717196514" target="_blank" class="flex items-center border py-3 px-4 border-gray-300 rounded text-gray-600">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-3"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
            <div>
                <h4 class="font-semibold text-sm text-gray-900 leading-relaxed">Hubungi kami lewat WhatsApp</h4>
                <p class="text-sm">Lapor kendala melalui chat WhatsApp</p>
            </div>
        </a>
    </div>
@endsection
@section('js')
<script>
        
    var countDownDate = new Date(" {{ $exp }} ").getTime();
    
    var x = setInterval(function() {
        var now = new Date().getTime();
        
        var distance = countDownDate - now;
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);
        
        document.getElementById("counter").innerHTML = hours + ":" + minutes + ":" + seconds + "";
         
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("counter").innerHTML = "Expired";
        }
    }, 1000);
</script>
<script type="module">
    $(document).ready(function() {
      $(".pesana").hide();
      $(".up").hide();
      $(".mese").click(function(){
        $(".pesana").slideDown('slow').addClass('animate__animated animate__fast animate__bounceInDown');
        $(".mese").hide();
        $(".up").slideDown('slow');
      }),
      $(".up").click(function(){
        $(".mese").slideDown('slow');
        $(".pesana").hide('slow');
        $(".up").hide();
      })
    });
</script>
<script>
    let text = document.getElementById('nominal').innerHTML;
    const copyContent = async () => {
        try {
        await navigator.clipboard.writeText(text);
            Swal.fire({
                text: "Nominal Berhasil disalin",
                icon: "success",
                width: 400,
                showClass: {
                    popup: `
                    animate__animated
                    animate__fadeInUp
                    animate__faster
                    `
                },
                hideClass: {
                    popup: `
                    animate__animated
                    animate__fadeOutDown
                    animate_faster
                    `
                }
            });
        } catch (err) {
        console.error('Failed to copy: ', err);
        }
    }

    let no = document.getElementById('nomor').innerHTML;
    const copyNomor = async () => {
        try {
        await navigator.clipboard.writeText(no);
            Swal.fire({
                text: "Nomor Rekening Berhasil disalin",
                icon: "success",
                width: 400,
                showClass: {
                    popup: `
                    animate__animated
                    animate__fadeInUp
                    animate__faster
                    `
                },
                hideClass: {
                    popup: `
                    animate__animated
                    animate__fadeOutDown
                    animate_faster
                    `
                }
            });
        } catch (err) {
        console.error('Failed to copy: ', err);
        }
    }

    let inv = document.getElementById('invoice').innerHTML;
    const copyInv = async () => {
        try {
        await navigator.clipboard.writeText(inv);
            Swal.fire({
                text: "Nomor Invoice Berhasil disalin",
                icon: "success",
                width: 400,
                showClass: {
                    popup: `
                    animate__animated
                    animate__fadeInUp
                    animate__faster
                    `
                },
                hideClass: {
                    popup: `
                    animate__animated
                    animate__fadeOutDown
                    animate_faster
                    `
                }
            });
        } catch (err) {
        console.error('Failed to copy: ', err);
        }
    }
</script>
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