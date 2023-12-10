  @foreach($datamutasi->chunk(10) as $a)
  @foreach($a as $data)
    <div class="flex justify-between border-b mb-3 pb-3 cursor-not-allowed">
        <div class="flex-shrink-0 mr-4">
        @if($data->type == "Credit")
            <div class="flex items-center justify-center ml-2 w-6 h-6 rounded-full bg-red-500 text-white mt-2">
                <svg xmlns="http://www.w3.org/2000/svg" height="24" width="18" viewBox="0 0 512 512"><path fill="#fafafa" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM184 232H328c13.3 0 24 10.7 24 24s-10.7 24-24 24H184c-13.3 0-24-10.7-24-24s10.7-24 24-24z"/></svg>  
            </div>
          @else
          <div class="flex items-center justify-center ml-2 w-6 h-6 rounded-full bg-green-500 text-white mt-2">
                <svg xmlns="http://www.w3.org/2000/svg" height="24" width="18" viewBox="0 0 512 512"><path fill="#ffffff" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM232 344V280H168c-13.3 0-24-10.7-24-24s10.7-24 24-24h64V168c0-13.3 10.7-24 24-24s24 10.7 24 24v64h64c13.3 0 24 10.7 24 24s-10.7 24-24 24H280v64c0 13.3-10.7 24-24 24s-24-10.7-24-24z"/></svg>
            </div>
        @endif
        </div>
        <div class="flex-1">
            <div class="flex-1">
                <div class="mb-2 mt-2 text-sm">
                    <span class="font-semibold text-gray-900 hover:text-gray-600">{{ $data->pesan }}</span>
                </div>
                <div class="text-xs text-gray-500 flex items-center justify-between">
                    <span class="mr-2">{{ \Carbon\Carbon::parse($data->created_at)->translatedFormat('l, j F Y') }}</span>
                    @if($data->type == "Credit")
                    <span class="inline-block whitespace-nowrap rounded-full bg-red-100 px-[0.65em] pb-[0.25em] pt-[0.35em] text-center align-baseline text-[1em] font-bold leading-none text-red-700">{{ $data->type }}</span>
                    @else
                    <span class="inline-block whitespace-nowrap rounded-full bg-success-100 px-[0.65em] pb-[0.25em] pt-[0.35em] text-center align-baseline text-[1em] font-bold leading-none text-success-700">{{ $data->type }}</span>
                    @endif
                </div>
            </div> 
        </div>
    </div>
  @endforeach
  @endforeach