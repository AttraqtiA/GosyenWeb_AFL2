@extends('layouts.main')

@section('content_page')
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 p-12 mx-auto">
        <div class="mx-auto max-w-screen-xl text-center sm:col-span-2 md:col-span-2 lg:col-span-3 mb-4">
            <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-blue-500 md:text-5xl lg:text-6xl">
                {!! $pageTitle !!}
            </h1>
            <p class="text-lg font-normal text-gray-800 lg:text-xl sm:px-16 lg:px-48">{!! $pageDescription !!}</p>
        </div>

        @foreach ($galleries as $gallery)
            @if (($loop->index + 1) % 4 == 0)
                <div class="sm:col-span-2 lg:col-span-3 shadow hover:shadow-xl"><img
                        class="h-full w-full rounded-lg object-cover" src="/images/Galeri/{{ $gallery->image }}"
                        alt="{{ $gallery->image }}"></div>
            @else
                <div class="shadow hover:shadow-xl"><img class="h-full w-full rounded-lg object-cover"
                        src="/images/Galeri/{{ $gallery->image }}" alt="{{ $gallery->image }}"></div>
            @endif
        @endforeach

    </div>
@endsection
