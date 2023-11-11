@extends('layouts.main')

@section('content_page')
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 pt-12 px-12 pb-16 mx-auto">

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
