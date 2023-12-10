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
        <h2 class="flex-1 truncate font-bold">TopUp Games</h2>
    </div>
    </a>
</div>
<section class="py-4 relative overflow-hidden md:rounded-lg min-h-screen mb-20 scroll-smooth">
    <div class="grid gap-2 px-2 lg:gap-6 md:grid-cols-4 grid-cols-3 lg:grid-cols-4">
   
        @foreach($data as $category)
        <a href="{{ url('/topup/'.$category->kode) }}" class="group relative transform overflow-hidden rounded-xl bg-orange-700 duration-100 ease-in-out hover:shadow-lg hover:ring-2 hover:ring-sky-500 hover:ring-offset-2 hover:ring-offset-orange-900">
            <img class="aspect-[5/7] object-cover object-center" loading="lazy" src="{{ asset('assets/'. $category->thumbnail) }}" alt="" data-tooltip-target="{{ $category->kode }}">
            <article class="absolute inset-x-0 -bottom-10 z-10 flex transform flex-col transition-all duration-100 ease-in-out group-hover:bottom-2 px-2 sm:px-2 group-hover:sm:bottom-1">
                <h2 class="truncate text-xs font-semibold text-slate-200">{{ $category->nama }}</h2>
                <p class="truncate text-xxs text-slate-400">{{ $category->kode }}</p>
            </article>
            <div class="absolute inset-0 transform bg-gradient-to-t from-transparent transition-all duration-300 group-hover:from-slate-900"></div>
        </a>
        @endforeach
    </div>
</section>
@endsection
@section('js')

@endsection