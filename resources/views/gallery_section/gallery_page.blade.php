@extends('layouts.main')

@section('content_page')
    <div class="mx-auto max-w-screen-xl text-center sm:col-span-2 md:col-span-2 lg:col-span-4 mb-4 pt-16">
        <h1 class="mb-8 text-4xl font-extrabold tracking-tight leading-none text-gray-800 md:text-5xl lg:text-6xl">
            {!! $pageTitle !!}</h1>
        <p class="text-lg font-normal text-gray-800 lg:text-xl sm:px-16 lg:px-48">{!! $pageDescription !!}</p>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 pt-16 px-12 pb-16 mx-auto">

        @foreach ($galleries as $gallery)
            <div class="relative group @if ($loop->index % 4 == 0) sm:col-span-2 lg:col-span-3 @endif">
                <img class="h-full w-full rounded-lg object-cover" src="/images/Galeri/{{ $gallery->image }}"
                    alt="{{ $gallery->image }}">
                <div
                    class="rounded-lg absolute inset-0 flex items-center justify-center bg-black duration-500 bg-opacity-50 opacity-0 transition-opacity group-hover:opacity-100">
                    <div class="text-white text-center">
                        <p class="text-lg font-bold">{{ $gallery->caption }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
