@foreach($pending->chunk(10) as $a)
    @foreach($a as $depo)
    <a href="{{ url('/akun/riwayat/deposit', $depo->invoice) }}">
    <div class="flex justify-between border-b mb-3 pb-3 cursor-pointer">
        <div class="flex-shrink-0 mr-4">
            <div class="flex items-center justify-center w-6 h-6 rounded-full bg-warning-400 text-white mt-2">
                <svg class="fill-[#ffffff]" width="18" height="24" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">

                  <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                  <path d="M464 256A208 208 0 1 1 48 256a208 208 0 1 1 416 0zM0 256a256 256 0 1 0 512 0A256 256 0 1 0 0 256zM232 120V256c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2V120c0-13.3-10.7-24-24-24s-24 10.7-24 24z"></path>
                
                </svg>
            </div>
        </div>
        <div class="flex-1">
            <div class="flex-1">
                <div class="text-xs mb-2">
                    <span class="text-gray-500">INV-{{ $depo->invoice }}</span>
                </div>
                <div class="mb-2 text-sm">
                    <span class="font-semibold text-gray-900 hover:text-gray-600">Permintaan Deposit Saldo Sebesar Rp{{ number_format($depo->jumlah,0,',','.') }}</span>
                </div>
                <div class="text-xs text-gray-500 flex items-center">
                    <span class="mr-2">{{ \Carbon\Carbon::parse($depo->created_at)->translatedFormat('l, j F Y H:m') }}</span>
                    <span class="inline-block whitespace-nowrap rounded-full bg-warning-100 px-[0.65em] pb-[0.25em] pt-[0.35em] text-center align-baseline text-[1em] font-bold leading-none text-warning-700">Rp{{ number_format($depo->jumlah,0,',','.') }}</span>
                </div>
            </div>
        </div>
    </div>
    </a>
    @endforeach
    @endforeach