@extends('layouts.order')

@section('css')
<style>
.cs-2{
    grid-column: span 2 / span 2;
}
.cs-3{
    grid-column: span 3 / span 3;
}
.input input[type="radio"]:checked+.input-item:after {
        position: absolute;
        top: 0;
        right: 0;
        width: 30px;
        height: 30px;
        content: "";
        background: url(/assets/verified.png) top/cover;
        text-align: center;
        border-radius: 2px 6px 2px 0px;
}
.input1 input[type="radio"]:checked+.input1-item:after {
        position: absolute;
        top: 0;
        right: 0;
        width: 30px;
        height: 30px;
        content: "";
        background: url(/assets/verified.png) top/cover;
        text-align: center;
        border-radius: 2px 6px 2px 0px;
}
.papa-pgimg {
        background-color: white;
        border-radius: 3px;
        border: 1px solid white;
    }
</style>
@endsection
@section('content')
<div class="px-4 py-3 z-50 sticky top-0 bg-sky-500 text-white">
    <a href="{{ route('home') }}">
    <div class="container px-0 flex items-center">
        <button class="mr-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>
        </button>
        <h2 class="flex-1 truncate font-bold">Order Games</h2>
    </div>
    </a>
</div>
<div class="flex-1 relative pb-14">
    <div class="container">
        <div class="w-full pb-5 items-start relative">
            <div class="flex-1 pb-5">
                <div class="flex gap-6 mb-85 mx-1 -scroll-mx-14 md:mx-0 overflow-hidden md:rounded-b-xl relative z-[1] p-4 md:p-8 backdrop-blur-sm shadow-sm border dark:border-b-slate-800 dark:border-r-slate-800 dark:border-t-slate-700 dark:border-l-slate-700">
                    <img src="{{asset('assets/'. $data->thumbnail)}}" class="absolute inset-x-0 -z-[1] opacity-20 w-full top-4 filter blur-xl transform -translate-y-1/2">
                    <div class="w-[120px] md:w-[180px] flex-shrink-0">
                        <figure class="w-full relative z-[1]">
                            <img src="{{asset('assets/'. $data->thumbnail)}}" class="inset-0 rounded-lg overflow-hidden shadow-sm">
                        </figure>
                    </div>
                    <div class="flex flex-col flex-1 min-w-0">
                        <h2 class="text-gray-900 dark:text-slate-100 text-lg md:text-2xl mb-2 md:mb-4 font-bold">
                            {{ $data->nama }}
                        </h2>
                        <div class="flex flex-col gap-2 flex-1 w-full text-sm md:text-base text-gray-600 dark:text-slate-300">
                            <div class="flex gap-2 items-baseline">
                                <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg> 
                                <strong class="font-medium">Moonton</strong>
                            </div>
                            <div class="flex gap-2 dark:text-slate-300 items-baseline">
                                <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><rect x="3" y="3" width="7" height="7"></rect><rect x="14" y="3" width="7" height="7"></rect><rect x="14" y="14" width="7" height="7"></rect><rect x="3" y="14" width="7" height="7"></rect></svg> 
                                <strong class="font-medium">589030 Items Terjual</strong>
                            </div>
                            <div class="mt-auto self-end border border-gray-700 rounded-md py-1 px-3 flex justify-center items-center gap-1 text-sm cursor-pointer">
                                Cara Order
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="rounded-xl bg-slate-500 text-white shadow-2xl mb-4 mx-1">
                <div class="flex border-b border-slate-700">
                    <div class="flex items-center justify-center rounded-tl-xl bg-gradient-to-r from-orange-400 to-orange-500 px-4 py-2 text-xl font-semibold">1</div>
                    <h3 class="flex w-full items-center justify-between rounded-tr-xl bg-gradient-to-b from-slate-700 to-slate-800 px-2 py-2 text-base font-semibold leading-6 text-white sm:px-4">Masukkan Data Akun Anda</h3>
                </div>
                @if($data->kode =="free-fire")
                <div class="grid grid-cols-1 gap-4 p-4 sm:px-6 sm:pb-4">
                    <div><label for="user_id" class="block text-xs font-medium pb-2">ID</label>
                        <div class="flex flex-col items-start">
                            <input class="relative block w-full appearance-none border-slate-600 bg-slate-700 px-3 py-2 text-xs text-white placeholder-slate-400 focus:z-10 focus:border-primary-500 focus:outline-none focus:ring-primary-500 disabled:cursor-not-allowed disabled:opacity-75 !rounded-md !border-0 !bg-murky-200 !text-murky-800 !placeholder-murky-800 accent-murky-800 !ring-0 placeholder:text-xs focus:!border-transparent focus:bg-slate-600 focus:!ring-transparent" type="number" id="user_id" name="id" min="0" placeholder="Ketikan ID">
                        </div>
                    </div>
                </div>
                @else
                <div class="grid grid-cols-2 gap-4 p-4 sm:px-6 sm:pb-4">
                    <div><label for="user_id" class="block text-xs font-medium pb-2">ID</label>
                        <div class="flex flex-col items-start">
                            <input class="relative block w-full appearance-none border-slate-600 bg-slate-700 px-3 py-2 text-xs text-white placeholder-slate-400 focus:z-10 focus:border-primary-500 focus:outline-none focus:ring-primary-500 disabled:cursor-not-allowed disabled:opacity-75 !rounded-md !border-0 !bg-murky-200 !text-murky-800 !placeholder-murky-800 accent-murky-800 !ring-0 placeholder:text-xs focus:!border-transparent focus:bg-slate-600 focus:!ring-transparent" type="number" id="user_id" name="id" min="0" placeholder="Ketikan ID">
                        </div>
                    </div>
                    @if($data->kode == "mobile-legends")
                    <div><label for="zone" class="block text-xs font-medium pb-2">Server</label>
                        <div class="flex flex-col items-start">
                            <input class="relative block w-full appearance-none border-slate-600 bg-slate-700 px-3 py-2 text-xs text-white placeholder-slate-400 focus:z-10 focus:border-primary-500 focus:outline-none focus:ring-primary-500 disabled:cursor-not-allowed disabled:opacity-75 !rounded-md !border-0 !bg-murky-200 !text-murky-800 !placeholder-murky-800 accent-murky-800 !ring-0 placeholder:text-xs focus:!border-transparent focus:bg-slate-600 focus:!ring-transparent" type="number" id="zone" name="server" min="0" placeholder="Ketikan Server">
                        </div>
                    </div>
                    @endif
                    @if($data->kode == "tof")
                    <div><label for="zone" class="block text-xs font-medium pb-2">Pilih Server</label>
                        <div class="flex flex-col items-start">
                            <select class="relative block w-full appearance-none border-slate-600 bg-slate-700 px-3 py-2 text-sm text-white placeholder-slate-400 focus:z-10 focus:border-primary-500 focus:outline-none focus:ring-primary-500 disabled:cursor-not-allowed disabled:opacity-75 !rounded-md !border-0 !bg-murky-200 !text-murky-800 !placeholder-murky-800 accent-murky-800 !ring-0 placeholder:text-xs focus:!border-transparent focus:bg-slate-600 focus:!ring-transparent" id="zone" name="server">
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                                <option value="4">Four</option>
                                <option value="5">Five</option>
                            </select>
                        </div>
                    </div>
                    @endif
                </div>
                @endif
                
            </div>

            
            <div class="rounded-xl bg-slate-500 text-white shadow-2xl mx-1 mb-4">
                <div class="flex border-b border-slate-700">
                    <div class="flex items-center justify-center rounded-tl-xl bg-gradient-to-r from-orange-400 to-orange-500 px-4 py-2 text-xl font-semibold">2</div>
                    <h3 class="flex w-full items-center justify-between rounded-tr-xl bg-gradient-to-b from-slate-700 to-slate-800 px-2 py-2 text-base font-semibold leading-6 text-white sm:px-4">Pilih Nominal</h3>
                </div>
                <div class="flex flex-col space-y-4 p-2 sm:p-6">
                    <div class="mt-4 grid grid-cols-2 gap-4 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-2">
                        @foreach($layanan as $produk)
                        
                        <label for="{{ $produk->id }}" class="input">
                            <div class="relative flex cursor-pointer rounded-xl border border-transparent duration-300 bg-slate-200 p-2.5 shadow-md md:p-2 focus:outline-none">
                                <input type="radio" name="nominal" id="{{ $produk->id }}" value="{{ $produk->id }}" data-type="diamond" style="display:none">
                                
                                <span class="flex flex-1 cursor-pointer input-item leading-4">
                                    <span class="flex flex-col justify-between">
                                        <span class="block text-sm font-semibold text-slate-800">{{ $produk->layanan }}</span>
                                        <div class="relative z-30 pt-2 text-xxs font-semibold leading-4 text-slate-800">
                                            Rp<span class="text-sm">{{ number_format($produk->harga_guest,0,',','.') }}</span>
                                        </div>
                                    </span>
                                </span>
                            </div>
                        </label>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="rounded-xl bg-slate-500 shadow-2xl pb-3 mx-1 mb-4">
                <div class="flex border-b border-slate-700 mb-3 text-white">
                    <div class="flex items-center justify-center rounded-tl-xl bg-gradient-to-b from-orange-400 to-orange-600 px-4 py-2 text-xl font-semibold">3</div>
                    <h3 class="flex w-full items-center justify-between rounded-tr-xl bg-gradient-to-b from-slate-700 to-slate-800 px-2 py-2 text-base font-semibold leading-6 text-white sm:px-4">Pilih Metode Pembayaran</h3>
                </div>

                @auth
                <div class="flex w-full flex-col px-4 py-3 child-box payment-drawwer">
                    <div class="flex w-full transform flex-col justify-between rounded-md border border-orange-500 bg-slate-600 text-left text-sm font-medium text-white duration-300 focus:outline-none">
                        <div>
                            <button class="w-full disabled:opacity-75 short-payment-support-info-head" onclick="openPaymentDrawer(this)" type="button" data-te-ripple-init data-te-ripple-color="light">
                                <div class="flex w-full justify-between px-4 py-2">
                                    <span class="transform text-base font-medium leading-7 duration-300">
                                        <div>Saldo Akun</div>
                                    </span>
                                </div>
                            </button>
                            <div class="overflow-hidden transform max-h-screen">
                                <div class="px-4 button-action-payment pt-2 pb-4 text-sm text-slate-300 overflow-hidden bg-clip-padding" style="display: none;">
                                    <div class="grid grid-cols-2 gap-4">
                                        
                                        <label for="SALDO" class="input1">
                                            <div class="relative animate__animated animate__fast animate__bounceInDown flex cursor-pointer overflow-hidden rounded-xl border border-transparent bg-slate-200 p-2.5 shadow-sm outline-none">
                                                <input type="radio" name="pembayaran" id="SALDO" value="SALDO" style="display:none">
                                                <span class="flex w-full input1-item">
                                                    <span class="flex w-full flex-col justify-between">
                                                        <div>
                                                            <span class="block text-xs font-semibold text-slate-800">PosPay</span>
                                                            <span class="mt-0 flex items-center text-xxs italic whitespace-nowrap text-slate-600">Pembayaran Otomatis</span>
                                                        </div>
                                                        <div class="flex w-full items-center justify-between">
                                                            <div class="mt-1">
                                                                <div class="relative z-30 text-xxs harga font-semibold leading-4 text-slate-800">
                                                                    
                                                                </div>
                                                            </div>
                                                            <div class="relative aspect-[6/2] w-10">
                                                                <img class="object-scale-down" src="{{ asset('assets/logo.png')}}">
                                                            </div>
                                                        </div>
                                                    </span>
                                                </span>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                                <div class="short-payment-support-info w-full rounded-b-md bg-slate-300 px-4 py-2" onclick="openPaymentDrawer(this)">
                                    <div class="flex justify-end gap-x-2">
                                        <div class="relative aspect-[6/2] w-10 pt-1">
                                            <img class="object-scale-down" src="{{ asset('assets/logo.png')}}">
                                        </div>
                                        <a class="open-button-action-payment text-slate-600">
                                            <i class="fa-solid fa-circle-chevron-down fa-xl" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endauth

                <div class="flex w-full flex-col px-4 py-3 child-box payment-drawwer">
                    <div class="flex w-full transform flex-col justify-between rounded-md border border-orange-500 bg-slate-600 text-left text-sm font-medium text-white duration-300 focus:outline-none">
                        <div>
                            <button class="w-full disabled:opacity-75 short-payment-support-info-head" onclick="openPaymentDrawer(this)" type="button" data-te-ripple-init data-te-ripple-color="light">
                                <div class="flex w-full justify-between px-4 py-2">
                                    <span class="transform text-base font-medium leading-7 duration-300">
                                        <div><i class="fas fa-wallet" aria-hidden="true"></i> E-Wallet</div>
                                    </span>
                                    
                                </div>
                            </button>
                            <div class="overflow-hidden transform max-h-screen">
                                <div class="px-4 button-action-payment pt-2 pb-4 text-sm text-slate-300 overflow-hidden bg-clip-padding" style="display: none;">
                                    <div class="grid grid-cols-2 gap-4">
                                        @foreach($pay_method as $p)
                            
                                        @if($p->tipe == 'e-wallet')
                                        <label for="{{$p->code}}" class="input1">
                                            <div class="relative animate__animated animate__fast animate__bounceInDown flex cursor-pointer overflow-hidden rounded-xl border border-transparent bg-slate-200 p-2.5 shadow-sm outline-none">
                                                <input type="radio" name="pembayaran" id="{{$p->code}}" value="{{$p->code}}" style="display:none">
                                                <span class="flex w-full input1-item">
                                                    <span class="flex w-full flex-col justify-between">
                                                        <div>
                                                            <span class="block text-xs font-semibold text-slate-800">{{ $p->name }}</span>
                                                            <span class="mt-0 flex items-center text-xxs italic whitespace-nowrap text-slate-600">Pembayaran {{ $p->keterangan }}</span>
                                                        </div>
                                                        <div class="flex w-full items-center justify-between">
                                                            <div class="mt-1">
                                                                <div class="relative z-30 text-xxs harga font-semibold leading-4 text-slate-800">
                                                                    
                                                                </div>
                                                            </div>
                                                            <div class="relative aspect-[6/2] w-10">
                                                                <img class="object-scale-down" src="{{ asset('payments/'. $p->images)}}">
                                                            </div>
                                                        </div>
                                                    </span>
                                                </span>
                                            </div>
                                        </label>
                                        @endif
                                        @endforeach
                                    </div>
                                </div>
                                <div class="short-payment-support-info w-full rounded-b-md bg-slate-300 px-4 py-2" onclick="openPaymentDrawer(this)">
                                    <div class="flex justify-end gap-x-2">
                                        @foreach($pay_method as $p)
                            
                                        @if($p->tipe == 'e-wallet')
                                        <div class="relative aspect-[6/2] w-10 pt-1">
                                            <img class="object-scale-down" src="{{ asset('payments/'. $p->images)}}">
                                        </div>
                                        @endif
                                        @endforeach
                                        <a class="open-button-action-payment text-slate-600">
                                            <i class="fa-solid fa-circle-chevron-down fa-xl" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex w-full flex-col px-4 py-3 child-box payment-drawwer">
                    <div class="flex w-full transform flex-col justify-between rounded-md border border-orange-500 bg-slate-600 text-left text-sm font-medium text-white duration-300 focus:outline-none">
                        <div>
                            <button class="w-full disabled:opacity-75 short-payment-support-info-head" onclick="openPaymentDrawer(this)" type="button" data-te-ripple-init data-te-ripple-color="light">
                                <div class="flex w-full justify-between px-4 py-2">
                                    <span class="transform text-base font-medium leading-7 duration-300">
                                        <div><i class="fas fa-university" aria-hidden="true"></i> Bank Transfer</div>
                                    </span>
                                    
                                </div>
                            </button>
                            <div class="overflow-hidden transform max-h-screen">
                                <div class="px-4 button-action-payment pt-2 pb-4 text-sm text-slate-300 overflow-hidden bg-clip-padding" style="display: none;">
                                    <div class="grid grid-cols-2 gap-4">
                                        @foreach($pay_method as $p)
                            
                                        @if($p->tipe == 'bank-transfer')
                                        <label for="{{$p->code}}" class="input1">
                                            <div class="relative animate__animated animate__fast animate__bounceInDown flex cursor-pointer overflow-hidden rounded-xl border border-transparent bg-slate-200 p-2.5 shadow-sm outline-none">
                                                <input type="radio" name="pembayaran" id="{{$p->code}}" value="{{$p->code}}" style="display:none">
                                                <span class="flex w-full input1-item">
                                                    <span class="flex w-full flex-col justify-between">
                                                        <div>
                                                            <span class="block text-xs font-semibold text-slate-800">{{ $p->name }}</span>
                                                            <span class="mt-0 flex items-center text-xxs italic whitespace-nowrap text-slate-600">Pembayaran {{ $p->keterangan }}</span>
                                                        </div>
                                                        <div class="flex w-full items-center justify-between">
                                                            <div class="mt-1">
                                                                <div class="relative z-30 text-xxs harga font-semibold leading-4 text-slate-800">
                                                                    
                                                                </div>
                                                            </div>
                                                            <div class="relative aspect-[6/2] w-10">
                                                                <img class="object-scale-down" src="{{ asset('payments/'. $p->images)}}">
                                                            </div>
                                                        </div>
                                                    </span>
                                                </span>
                                            </div>
                                        </label>
                                        @endif
                                        @endforeach
                                    </div>
                                </div>
                                <div class="short-payment-support-info w-full rounded-b-md bg-slate-300 px-4 py-2" onclick="openPaymentDrawer(this)">
                                    <div class="flex justify-end gap-x-2">
                                        @foreach($pay_method as $p)
                            
                                        @if($p->tipe == 'bank-transfer')
                                        <div class="relative aspect-[6/2] w-10 pt-1">
                                            <img class="object-scale-down" src="{{ asset('payments/'. $p->images)}}">
                                        </div>
                                        @endif
                                        @endforeach
                                        <a class="open-button-action-payment text-slate-600">
                                            <i class="fa-solid fa-circle-chevron-down fa-xl" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="rounded-xl bg-slate-500 text-white shadow-2xl mx-1 mb-4">
                <div class="flex border-b border-slate-700">
                    <div class="flex items-center justify-center rounded-tl-xl bg-gradient-to-r from-orange-400 to-orange-500 px-4 py-2 text-xl font-semibold">4</div>
                    <h3 class="flex w-full items-center justify-between rounded-tr-xl bg-gradient-to-b from-slate-700 to-slate-800 px-2 py-2 text-base font-semibold leading-6 text-white sm:px-4">Masukan No Whatsapp</h3>
                </div>
                <div class="mx-4 py-4">
                    <div class="flex flex-col items-start">
                        <input class="relative block w-full appearance-none border-slate-600 bg-slate-700 px-3 py-2 text-xs text-white placeholder-slate-400 focus:z-10 focus:border-primary-500 focus:outline-none focus:ring-primary-500 disabled:cursor-not-allowed disabled:opacity-75 !rounded-md !border-0 !bg-murky-200 !text-murky-800 !placeholder-murky-800 accent-murky-800 !ring-0 placeholder:text-xs focus:!border-transparent focus:bg-slate-400 focus:!ring-transparent" type="number" id="nomor" name="nomor" min="0" placeholder="628xxx" required>
                    </div>
                    <span class="text-xs mb-4">Nomor ini akan dihubungi jika ada masalah</span>
                    <div class="g-recaptcha mt-4" id="g-recaptcha" name="grecaptcha" data-sitekey="6LfQjPMkAAAAAAt9oeCwuRZ-2_v-B5enrhkWFmOx"></div>
                </div>
            </div>
            
            <div class="relative mx-1">
                <button class="items-center justify-center rounded-md bg-orange-500 px-4 py-2 text-sm font-medium text-white duration-300 hover:bg-orange-400 disabled:cursor-not-allowed disabled:opacity-75 relative flex w-full gap-2 overflow-hidden" type="button" id="order">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" class="h-5 w-5"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z"></path></svg>
                    <span>Pesan Sekarang!</span>
                </button>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
<script async src="https://www.google.com/recaptcha/api.js"></script>
<script type="module">
    $(document).ready(function() {
        $("input[type=radio][name=nominal]").change(function() {
            var nominal = $("input[name='nominal']:checked").val();

            if (nominal) {
                $.ajax({
                    url: "<?php echo route('ajax.price.game') ?>",
                    dataType: "json",
                    type: "POST",
                    data: {
                        "_token": "<?php echo csrf_token() ?>",
                        "nominal": nominal
                    },
                    success: function(res) {
                        changeHarga(res.harga);
                    }
                })
            }
            
        });
        $("#order").on("click", function() {
            var uid = $("#user_id").val();
            var zone = $("#zone").val();
            var service = $("input[name='nominal']:checked").val();
            var pembayaran = $("input[name='pembayaran']:checked").val();
            var nomor = $("input[name='nomor']").val();
            var email = $("input[name='email']").val();
            var voucher = $("#voucher").val();
            $.ajax({
                url: "<?php echo route('ajax.confirm-data.game') ?>",
                dataType: "JSON",
                type: "POST",
                data: {
                    '_token': '<?php echo csrf_token(); ?>',
                    'uid': uid,
                    'zone': zone,
                    'service': service,
                    'payment_method': pembayaran,
                    'nomor': nomor,
                    'email': email,
                    'voucher': voucher
                },
                beforeSend: function() {
                    Swal.fire({
                        icon: "info",
                        width: 400,
                        title: "Mohon Tunggu",
                        background: '#222831',
                        color: '#fff',
                        showConfirmButton: false,
                        allowOutsideClick: false,
                    });
                },
                success: function(res) {
                    if (res.status == true) {
                        Swal.fire({
                            background: '#222831',
                            color: '#fff',
                            width: 400,
                            icon: 'warning',
                            html: `${res.data}`,
                            showCancelButton: true,
                            cancelButtonText: 'Batalkan',
                            confirmButtonText: 'Pesan Sekarang!',
                            customClass: {
                                title: 'swal-title',
                                htmlContainer: 'swal-text'
                            }

                        }).then(resp => {
                            if (resp.isConfirmed) {
                                var nickname = $("#nick").text();
                                var nohp = $("input[name='nomor']").val();
                                var email = $("input[name='email']").val();
                                $.ajax({
                                    url: "<?php echo route('order.game') ?>",
                                    dataType: "JSON",
                                    type: "POST",
                                    data: {
                                        '_token': '<?php echo csrf_token() ?>',
                                        'nickname': nickname,
                                        'uid': uid,
                                        'zone': zone,
                                        'service': service,
                                        'payment_method': pembayaran,
                                        'nomor': nohp,
                                        'email': email,

                                    },
                                    beforeSend: function() {
                                        Swal.fire({
                                            icon: "info",
                                            width: 400,
                                            title: "Mohon Tunggu",
                                            background: '#222831',
                                            color: '#fff',
                                            showConfirmButton: false,
                                            allowOutsideClick: false,
                                        });
                                    },
                                    success: function(resOrder) {
                                        if (resOrder.status) {
                                            Swal.fire({
                                                width: 400,
                                                title: 'Berhasil memesan!',
                                                text: `Order ID : ${resOrder.order_id}`,
                                                icon: 'success',
                                                background: '#222831',
                                                color: '#fff'
                                            });
                                            window.location = `/riwayat/transaksi/${resOrder.order_id}`;
                                        } else {
                                            Swal.fire({
                                                title: 'Oops...',
                                                width: 400,
                                                text: `${resOrder.data}`,
                                                icon: 'error',
                                                background: '#222831',
                                                color: '#fff'
                                            });
                                        }
                                    }
                                })
                            }
                        })
                    } else if (res.status == false) {
                        Swal.fire({
                            title: 'Oops...',
                            width: 400,
                            text: res.data,
                            icon: 'error',
                            background: '#222831',
                            color: '#fff'
                        });
                    } else {
                        Swal.fire({
                            title: 'Oops...',
                            width: 400,
                            text: 'User ID tidak ditemukan.',
                            icon: 'error',
                            background: '#222831',
                            color: '#fff'
                        });
                    }
                },
                error: function(e) {
                    if (e.status == 422) {
                        Swal.fire({
                            title: 'Oops...',
                            width: 400,
                            text: 'Pastikan anda sudah mengisi semua data yang diperlukan.',
                            icon: 'error',
                            background: '#222831',
                            color: '#fff'
                        });
                    }
                }
            })
        })
    });

    function changeHarga(harga)
    {
        $(".harga").html(harga);
    }
    
</script>
<script>
    function openPaymentDrawer(elem) {
        var $this = $(elem);

        $('.payment-drawwer').not(this).each(function() {
            var $parents = $(this);
            $parents.find('.button-action-payment').slideUp(function() {
                $parents.removeClass('active');
            });

            $parents.find('.short-payment-support-info').find('img').slideDown(1000);
            $parents.find('.short-payment-support-info').find('i').removeClass('fa-circle-chevron-up').addClass(
                'fa-circle-chevron-down');
        });

        var $parents = $this.parents('.child-box');

        if (!$parents.find('.button-action-payment').is(":hidden")) {
            $parents.find('.button-action-payment').slideUp(function() {
                $parents.removeClass('active');
            });

            $parents.find('.short-payment-support-info').find('img').slideDown(1000);
            $parents.find('.short-payment-support-info').find('.fa-circle-chevron-up').removeClass('fa-circle-chevron-up').addClass(
                'fa-circle-chevron-down');

        } else {
            $parents.find('.button-action-payment').slideDown(function() {
                $parents.addClass('active');
            });
            $parents.find('.short-payment-support-info').find('img').slideUp();
            $parents.find('.short-payment-support-info').find('.fa-circle-chevron-down').addClass('fa-circle-chevron-up').removeClass(
                'fa-circle-chevron-down');

        }
    }
</script>
@endsection