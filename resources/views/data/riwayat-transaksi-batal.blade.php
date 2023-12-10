@foreach($batal->chunk(10) as $a)
  @foreach($a as $pro)
    <a href="{{ url('/akun/riwayat/transaksi', $pro->order_id) }}">
    <div class="flex justify-between border-b mb-3 pb-3 cursor-pointer">
        <div class="flex-shrink-0 mr-4">
            <div class="flex items-center justify-center w-6 h-6 rounded-full bg-danger-400 text-white mt-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
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