@extends('layouts.main')

@section('content_page')
    <div class = "grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 pt-12 pr-12 pl-12 pb-8 mx-auto">
        <div class="mx-auto max-w-screen-xl text-center sm:col-span-2 md:col-span-2 lg:col-span-4 mb-4">
            <h1 class="mb-4 text-4xl text-gray-800 font-extrabold tracking-tight leading-none md:text-5xl lg:text-6xl">
                {!! $pageTitle !!}</h1>
            <p class="text-lg font-normal text-gray-800 lg:text-xl sm:px-16 lg:px-48">{!! $pageDescription !!}</p>
        </div>
        @foreach ($teams as $team)
            <div
                class="flex flex-col justify-center items-center w-full h-full bg-white border border-gray-800 rounded-lg shadow dark:bg-gray-800 dark:border-gray-800 mx-auto shadow hover:shadow-xl">
                <img class="h-3/4 rounded-t-lg w-full object-cover" src="/images/karyawan_gosyen/{{ $team->profile_photo }}"
                    alt="{{ $team->profile_photo }}" />
                <div class="h-1/4 px-8 pb-2 flex flex-col justify-center items-center">
                    <h5 class="text-2xl font-bold tracking-tight text-sky-400 text-center">{{ $team->name }}</h5>
                    <p class="text-sm font-normal text-white text-center">{{ $team->expertise }}</p>
                </div>
            </div>
        @endforeach
    </div>
@endsection
@section('pagination')
    <div class="flex justify-center mb-12">
        {{ $teams->links() }}
    </div>
@endsection
