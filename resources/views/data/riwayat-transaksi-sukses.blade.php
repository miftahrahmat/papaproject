@foreach($sukses->chunk(10) as $a)
  @foreach($a as $pro)
    <a href="{{ url('/akun/riwayat/transaksi', $pro->order_id) }}">
    <div class="flex justify-between border-b mb-3 pb-3 cursor-pointer">
        <div class="flex-shrink-0 mr-4">
            <div class="flex items-center justify-center w-6 h-6 rounded-full bg-success-400 text-white mt-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
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
                    @if($pro->spay == "Lunas")
                    <span class="inline-block whitespace-nowrap rounded-full bg-success-100 px-[0.65em] pb-[0.25em] pt-[0.35em] text-center align-baseline text-[1em] font-bold leading-none text-success-700">{{ $pro->spay }}</span>
                    @else
                    <span class="inline-block whitespace-nowrap rounded-full bg-warning-100 px-[0.65em] pb-[0.25em] pt-[0.35em] text-center align-baseline text-[1em] font-bold leading-none text-warning-700">{{ $pro->spay }}</span>
                    @endif
                </div>
            </div>
        </div>
    </div>
    </a>
    @endforeach
    @endforeach