@extends('layouts.main')

@section('content_page')
    <div class="mx-auto max-w-screen-xl text-center sm:col-span-2 md:col-span-2 lg:col-span-4 mb-4 pt-16">
        <h1 class="mb-8 text-4xl font-extrabold tracking-tight leading-none text-gray-800 md:text-5xl lg:text-6xl">
            {!! $pageTitle !!}</h1>
        <p class="text-lg font-normal text-gray-800 lg:text-xl sm:px-16 lg:px-48">{!! $pageDescription !!}</p>
    </div>
    <div class = "grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 px-12 pt-16 pb-16 mx-auto">
        @foreach ($teams as $team)
            <div
                class="flex flex-col justify-center items-center w-full h-full bg-white border border-gray-800 rounded-lg dark:bg-gray-800 dark:border-gray-800 mx-auto shadow hover:shadow-xl transform transition duration-500 hover:-translate-y-4 hover:z-40">
                <img class="h-3/4 rounded-t-lg w-full object-cover" src="/images/karyawan_gosyen/{{ $team->profile_photo }}"
                    alt="{{ $team->profile_photo }}" />
                <div class="h-1/4 px-8 pb-2 flex flex-col justify-center items-center">
                    <h5 class="sm:text-lg lg:text-2xl font-bold tracking-tight text-sky-400 text-center">{{ $team->name }}
                    </h5>
                    <p class="fold:text-xs text-base font-normal text-white text-center">{{ $team->expertise }}</p>
                </div>
            </div>
        @endforeach
    </div>
@endsection
@section('pagination')
    <div class="flex justify-center mb-16">
        {{ $teams->links() }}
    </div>
@endsection
