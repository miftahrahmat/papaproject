@extends('layouts.order')

@section('css')
<style>
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
    <a href="{{ url('/home') }}">
    <div class="container px-0 flex items-center">
        <button class="mr-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>
        </button>
        <h2 class="flex-1 truncate font-bold">TopUp Pulsa / Paket Data</h2>
    </div>
    </a>
</div>
<section class="py-4 relative overflow-hidden min-h-screen mb-20 scroll-smooth">
    <div class="px-4 flex justify-items-center mb-4 ">
        <div class=" w-full">
            <label for="user_id" class="block text-xs font-medium pb-2">Nomor Ponsel</label>
            <input maxlength="13" class="relative block w-full appearance-none border-slate-600 bg-slate-700 px-3 py-2 text-xs text-white placeholder-slate-400 focus:z-10 focus:border-primary-500 focus:outline-none focus:ring-primary-500 disabled:cursor-not-allowed disabled:opacity-75 !rounded-md !border-0 !bg-murky-200 !text-murky-800 !placeholder-murky-800 accent-murky-800 !ring-0 placeholder:text-xs focus:!border-transparent focus:bg-slate-600 focus:!ring-transparent" type="number" id="nomor" name="target" min="0" placeholder="08xxxxx">
        </div>
    </div>
    <div class="mb-6">
        <div class="flex-1 px-4 mb-2">
            <h2 class="text-base font-semibold flex items-center gap-1 flex-shrink-0 uppercase judulpulsa">
                
            </h2>
        </div>
        <div class="data grid grid-cols-1 gap-4 px-4">
            
        </div>
    </div>

<div class="detail invisible flex rounded-tr-sm rounded-tl-sm fixed bottom-[100%] mx-auto left-0 right-0 z-[1045] h-full max-h-full max-w-[460px] translate-y-full flex-col border-none bg-white bg-clip-padding text-neutral-700 shadow-sm outline-none transition duration-300 ease-in-out dark:bg-neutral-800 dark:text-neutral-200">
        <div class="flex items-center justify-between p-4">
            <h5 class="mb-0 font-semibold leading-normal">
            Informasi Pesanan
            </h5>
            <button type="button" class="close box-content rounded-none border-none opacity-50 hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none">
          <span class="w-[1em] focus:opacity-100 disabled:pointer-events-none disabled:select-none disabled:opacity-25 [&.disabled]:pointer-events-none [&.disabled]:select-none [&.disabled]:opacity-25">
            <svg xmlns="http://www.w3.org/2000/svg"
              fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M6 18L18 6M6 6l12 12" />
            </svg>
          </span>
        </button>
        </div>

        <div class="relative overflow-y-auto">
            <div class="grid grid-cols-3 gap-2 font-bold text-sm text-left leading-relaxed rounded-md p-4">
                <div>Nomor Ponsel</div>
                <div class="col-span-2 target"></div>
                <div>Layanan</div>
                <div class="col-span-2 produk"></div>
                <div>Brand</div>
                <div class="col-span-2 brand"></div>
                <div>Harga</div>
                <div class="col-span-2 harga"></div>
            </div>
        </div>
        

  <div class="small flex-grow overflow-y-auto p-4">
    
    <div class="w-full space-y-4 py-4">
        <div class="flex flex-col">
            <p class="font-semibold leading-normal mb-1">
                Bayar dengan
            </p>
            <div class="relative w-full mx-auto">
                <button
                  class="flex payment items-center whitespace-nowrap rounded-md w-full bg-sky-400 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] motion-reduce:transition-none dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
                  type="button" data-te-offcanvas-toggle data-te-target="#offcanvasRight" aria-controls="offcanvasRight"
                data-te-ripple-init data-te-ripple-color="light">
                  Pilih metode pembayaran
                    <span class="ml-auto w-2">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 20 20"
                          fill="currentColor"
                          class="h-5 w-5">
                          <path
                            fill-rule="evenodd"
                            d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                            clip-rule="evenodd" />
                        </svg>
                      </span>
                </button>
                <div class="min-h-screen invisible fixed bottom-0 right-0 top-0 z-[1045] flex w-96 max-w-full translate-x-full flex-col border-none bg-white bg-clip-padding text-neutral-700 shadow-sm outline-none transition duration-300 ease-in-out dark:bg-neutral-800 dark:text-neutral-200 [&[data-te-offcanvas-show]]:transform-none"
                    tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel" data-te-offcanvas-init>
                    <div class="flex items-center justify-between p-4">
                        <h5 class="mb-0 font-semibold leading-normal" id="offcanvasRightLabel">
                            Pilih Metode Pembayaran
                        </h5>
                        <button id="modalpembayaran" type="button" class="box-content rounded-none border-none opacity-50 hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none"
                        data-te-offcanvas-dismiss>
                        <span class="w-[1em] focus:opacity-100 disabled:pointer-events-none disabled:select-none disabled:opacity-25 [&.disabled]:pointer-events-none [&.disabled]:select-none [&.disabled]:opacity-25">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="h-6 w-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </span>
                        </button>
                    </div>
                    <div class="offcanvas-body flex-grow overflow-y-auto p-4">
                        @auth
                        <div class="flex w-full">
                            <div class="bg-slate-200 w-full text-base font-bold px-4 py-5">
                                Pembayaran Instan
                            </div>
                        </div>
                        <label for="saldo">
                            <div class="flex justify-between p-4 leading-6 border-b-2">
                                <input type="radio" name="pembayaran" id="saldo" value="saldo" style="display:none">
                                <div>
                                    <img alt="payment method logo" class="h-[35px] w-[72px] rounded border border-[#F2F3F4] p-[3px]" width="72" height="100" src="{{ asset('/assets/logo.png') }}">
                                </div>
                                <div>
                                    <span class="block font-bold text-sm">Saldo Pospay</span>
                                    <span class="block font-bold text-xs">Rp{{ number_format(auth::user()->saldo,0,',','.') }}</span>
                                </div>
                                <button class="mt-3 h-full cursor-pointer rounded-[15px] border border-[#00afef] px-[20px] py-[2px] text-sm font-bold leading-4 text-cerulean50">
                                    Pilih
                                </button>
                            </div>
                        </label>
                        @endauth
                        <div class="flex w-full">
                            <div class="bg-slate-200 w-full text-base font-bold px-4 py-5">
                                Pembayaran E-Wallet
                            </div>
                        </div>
                        @foreach($pay as $met)
                        @if($met->tipe == 'e-wallet')
                        
                        <div class="flex justify-between p-4 leading-6 border-b-2">
                            <div>
                                <img alt="payment method logo" class="h-[35px] w-[72px] rounded border border-[#F2F3F4] p-[3px]" width="72" height="100" src="{{ asset('/payments/'. $met->images .'') }}">
                            </div>
                            <span class="mt-2 font-bold text-sm">{{ $met->keterangan }}</span>
                            <label type="button" for="{{ $met->code }}" class="labelpembayaran-item mt-3 h-full cursor-pointer rounded-[15px] border border-[#00afef] px-[20px] py-[2px] text-sm font-bold leading-4 text-cerulean50">
                                <input class="pembayaran" type="radio" name="pembayaran" id="{{ $met->code }}" value="{{ $met->code }}" style="display:none">
                                Pilih
                            </label>
                        </div>
                        @endif
                        @endforeach

                        <div class="flex w-full">
                            <div class="bg-slate-200 w-full text-base font-bold px-4 py-5">
                                Pembayaran Transfer Bank
                            </div>
                        </div>
                        @foreach($pay as $met)
                        @if($met->tipe == 'bank-transfer')
                        <div class="flex justify-between p-4 leading-6 border-b-2">
                            <div>
                                <img alt="payment method logo" class="h-[35px] w-[72px] rounded border border-[#F2F3F4] p-[3px]" width="72" height="100" src="{{ asset('/payments/'. $met->images .'') }}">
                            </div>
                            <span class="mt-2 font-bold text-sm">{{ $met->keterangan }}</span>
                            <label type="button" for="{{ $met->code }}" class="labelpembayaran-item mt-3 h-full cursor-pointer rounded-[15px] border border-[#00afef] px-[20px] py-[2px] text-sm font-bold leading-4 text-cerulean50">
                                <input class="pembayaran" type="radio" name="pembayaran" id="{{ $met->code }}" value="{{ $met->code }}" style="display:none">
                                Pilih
                            </label>
                        </div>
                        @endif
                        @endforeach

                        <div class="flex w-full">
                            <div class="bg-slate-200 w-full text-base font-bold px-4 py-5">
                                Pembayaran Virtual Account
                            </div>
                        </div>
                        @foreach($pay as $met)
                        @if($met->tipe == 'virtual-account')
                        <div class="flex justify-between p-4 leading-6 border-b-2">
                            <div>
                                <img alt="payment method logo" class="h-[35px] w-[72px] rounded border border-[#F2F3F4] p-[3px]" width="72" height="100" src="{{ asset('/payments/'. $met->images .'') }}">
                            </div>
                            <span class="mt-2 font-bold text-sm">{{ $met->keterangan }}</span>
                            <button class="mt-3 h-full cursor-pointer rounded-[15px] border border-[#00afef] px-[20px] py-[2px] text-sm font-bold leading-4 text-cerulean50">
                                Pilih
                            </button>
                        </div>
                        @endif
                        @endforeach
                    </div>
                </div>
            </div>

    </div>

    <div class="catatan sticky bottom-0 space-y-2 bg-white hidden">
        <div class="ds-w-full ds-px-4 ds-py-2 ds-bg-white ds-shadow-top ds-flex ds-flex-col ds-space-y-4">
            <div>
                <div class="flex flex-col space-y-[5px]">
                    <p class="text-base text-nero">
                        <span class="mr-1 font-bold">CATATAN!</span>
                    </p>
                    <span class="flex flex-row space-x-2 items-center">
                        <p class="text-xxs text-orange-500 font-bold">
                            Harga belum termasuk biaya admin.
                        </p>
                    </span>
                </div>
            </div>
            <input type="hidden" name="email" value="{{ (auth::check()) ? auth::user()->email : ''}}">
            <input type="hidden" name="phone" value="{{ (auth::check()) ? auth::user()->phone : ''}}">
            <div class="flex justify-end items-end mt-2">
                <div class="self-end">
                    <button class="align-middle cursor-pointer text-lg capitalize bg-orange-500 px-5 w-full h-10 rounded-lg text-white font-bold flex justify-self-end items-center" id="beli">
                        <div class="flex flex-row">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" class="h-5 w-5 mr-2"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z"></path></svg>
                            <span class="leading-4 self-center">Pesan Sekarang!</span>
                        </div>
                    </button>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>

</section>
@endsection
@section('js')
<script type="module">
$("#nomor").change(function() {
    var target = $("input[name='target']").val();
    
    if (target) {
        $.ajax({
            url: "<?php echo route('ajax.cek.nomor.ppob') ?>",
            dataType: "json",
            type: "POST",
            data: {
                "_token": "<?php echo csrf_token() ?>",
                "target": target,
            },
            success: function(res) {
                if (res.status == false) {
                    Swal.fire({
                        title: 'Oops...',
                        width: 400,
                        text: 'Layanan tidak tersedia',
                        icon: 'error',
                        background: '#222831',
                        color: '#fff'
                    }).then(resp => {
                        if (resp.isConfirmed) {
                            location.reload();
                        }
                    });
                }
                else{
                    $('.data').html('');
                    const formatter = new Intl.NumberFormat('id-ID', {
                        style: 'currency',
                        currency: 'IDR',
                        minimumFractionDigits: 2,
                        maximumFractionDigits: 2,
                        trailingZeroDisplay: 'stripIfInteger'
                    });
                    $.each(res.datas, function(key, val) {
                        
                        $('.data').append('<label for="'+val.id+'" class="input1">\
                            <div class="relative flex cursor-pointer overflow-hidden w-full rounded-xl border border-transparent bg-slate-200 p-6 shadow-xl outline-none">\
                                <input class="service" type="radio" name="service" id="'+val.id+'" value="'+val.id+'" style="display:none">\
                                <span class="flex w-full input1-item">\
                                    <span class="flex w-full flex-col justify-between">\
                                        <div>\
                                            <span class="block text-xs font-semibold text-slate-800">'+val.layanan+'</span>\
                                            <span class="whitespace-nowrap text-xxs italic text-slate-800">'+val.brand+'</span>\
                                        </div>\
                                        <div class="flex w-full items-center justify-between">\
                                            <div class="mt-1">\
                                                <div class="relative z-30 text-xs font-semibold leading-4 text-slate-800">'+formatter.format(val.harga_guest)+'</div>\
                                            </div>\
                                            <div class="mt-1 relative z-30 text-xxs font-semibold leading-4 text-slate-800">\
                                                <span class="inline-block whitespace-nowrap rounded-full bg-success-100 px-[0.65em] pb-[0.25em] pt-[0.35em] text-center align-baseline text-[1em] font-bold leading-none text-success-700">'+val.status+'</span>\
                                            </div>\
                                        </div>\
                                    </span>\
                                </span>\
                            </div>\
                        </label>'); 
                    });

                    $(".service").change(function() {
                        var layanan = $("input[name='service']:checked").val();
                        var target = $("input[name='target']").val();
                        if(target){ 
                            $('.detail').removeClass('invisible');
                            $.ajax({
                                url: "<?php echo route('ajax.detail.pesanan') ?>",
                                dataType: "json",
                                type: "POST",
                                data: {
                                    "_token": "<?php echo csrf_token() ?>",
                                    "target": target,
                                    "layanan": layanan,
                                },
                                success: function(res) {
                                    $(".target").html(res.target);
                                    $(".brand").html(res.brand);
                                    $(".produk").html(res.produk);
                                    $(".harga").html(res.harga);
                                }
                            });
                        }else{
                            Swal.fire({
                                title: 'Oops...',
                                width: 400,
                                text: 'Nomor ponsel tidak boleh kosong!',
                                icon: 'error',
                                background: '#222831',
                                color: '#fff'
                            }).then(resp => {
                                if (resp.isConfirmed) {
                                    location.reload();
                                }
                            });
                        }
                    });

                    $(".pembayaran").change(function() {
                        $(".payment").html('');
                        var cekpembayaran = $("input[name='pembayaran']:checked").val();
                        var layanan = $("input[name='service']:checked").val();
                        var radio = $(this).closest('label').find("input[name='pembayaran']:checked");
                        
                        if(cekpembayaran){
                            
                            $('#modalpembayaran')[0].click(function(){});
                            $('label').css('background-color','white');
                            radio.closest('label').css('background-color','#9ED4E6');
                            
                            $('.payment').append(cekpembayaran);
                            $('.catatan').slideDown("slow");
                        }
                    });

                    $("#beli").on("click", function() {
                        var layanan = $("input[name='service']:checked").val();
                        var target = $("#nomor").val();
                        var pembayaran = $("input[name='pembayaran']:checked").val();
                        var phone = $("input[name='phone']").val();
                        var email = $("input[name='email']").val();
                        $.ajax({
                            url: "<?php echo route('order.ppob') ?>",
                            dataType: "JSON",
                            type: "POST",
                            data: {
                                '_token': '<?php echo csrf_token() ?>',
                                'layanan': layanan,
                                'target': target,
                                'pembayaran': pembayaran,
                                'phone': phone,
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
                            },
                        
                        });
                    });
                }
            }

        });
    }     
});

</script>
<script type="module">
$(document).ready(function() {
    $(".close").click(function(){
        $(".detail").addClass('invisible');
    });
});
</script>
@endsection