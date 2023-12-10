@foreach($proses->chunk(10) as $a)
  @foreach($a as $pro)
    <a href="{{ url('/akun/riwayat/transaksi', $pro->order_id) }}">
    <div class="flex justify-between border-b mb-3 pb-3 cursor-pointer">
        <div class="flex-shrink-0 mr-4">
            <div class="flex items-center justify-center w-6 h-6 rounded-full bg-yellow-400 text-white mt-2">
                <svg class="fill-[#ffffff] animate-spin" width="18" height="24" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">

                  <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                  <path d="M464 256A208 208 0 1 1 48 256a208 208 0 1 1 416 0zM0 256a256 256 0 1 0 512 0A256 256 0 1 0 0 256zM232 120V256c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2V120c0-13.3-10.7-24-24-24s-24 10.7-24 24z"></path>
                
                </svg>
            </div>
        </div>
        <div class="flex-1">
            <div class="flex-1">
                <div class="text-xs mb-2">
                    <span class="text-gray-500">INV-{{ $pro->order_id }}</span>
                </div>
                <div class="mb-2 text-sm">
                    <span class="font-semibold text-gray-900 hover:text-gray-600">Pembelian Layanan {{ $pro->layanan }}</span>
                </div>
                <div class="text-xs text-gray-500 flex items-center">
                    <span class="mr-2">{{ \Carbon\Carbon::parse($pro->created_at)->translatedFormat('l, j F Y H:m') }}</span>
                    <span>{{ $pro->spay }}</span>
                </div>
            </div>
        </div>
    </div>
    </a>
    @endforeach
    @endforeach