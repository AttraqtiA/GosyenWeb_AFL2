@extends('layouts.main')

@section('content_page')
    <div class = "grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 pt-12 pr-12 pl-12 pb-8 mx-auto">
        <div class="mx-auto max-w-screen-xl text-center sm:col-span-2 md:col-span-2 lg:col-span-4 mb-4">
            <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-blue-500 md:text-5xl lg:text-6xl">
                {!! $pageTitle !!}</h1>
            <p class="text-lg font-normal text-gray-800 lg:text-xl sm:px-16 lg:px-48">{!! $pageDescription !!}</p>
        </div>
        @foreach ($teams as $team)
            <div
                class="flex flex-col justify-center items-center w-full h-full bg-white border border-gray-800 rounded-lg shadow dark:bg-gray-800 dark:border-gray-800 mx-auto shadow hover:shadow-xl">
                <img class="rounded-t-lg h-full w-full object-cover" src="/images/karyawan_gosyen/{{ $team->profile_photo }}"
                    alt="{{ $team->profile_photo }}" />
                <div class="p-3 flex flex-col items-center">
                    <h5 class="text-2xl font-bold tracking-tight text-blue-500 text-center">{{ $team->name }}</h5>
                    <p class="font-normal text-white text-center">{{ $team->expertise }}</p>
                </div>
            </div>
        @endforeach
    </div>
    <div class="flex justify-center mb-12">
        {{ $teams->links() }}
    </div>
@endsection
