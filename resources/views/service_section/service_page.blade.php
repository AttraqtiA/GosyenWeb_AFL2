@extends('layouts.main')

@section('content_page')
    <div class = "grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-2 pt-12 pr-12 pl-12 pb-8 mx-auto">
        <div class="mx-auto max-w-screen-xl text-center sm:col-span-2 md:col-span-2 lg:col-span-2 mb-4">
            <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-800 md:text-5xl lg:text-6xl">
                {!! $pageTitle !!}</h1>
            <p class="text-lg font-normal text-gray-800 lg:text-xl sm:px-16 lg:px-48">{!! $pageDescription !!}</p>
        </div>
        @foreach ($services as $service)
            <a href="/services/{{ $service->id }}">
                <div
                    class="mx-auto flex flex-col justify-center items-center w-full bg-white border border-gray-200 rounded-lg dark:bg-gray-800 dark:border-gray-700 p-6 shadow hover:shadow-xl transform transition duration-500 hover:-translate-y-4 hover:z-40 hover:bg-sky-400">
                    <div class="flex flex-col items-center justify-center h-full">
                        <img class="h-24 mb-3 shadow-lg" src="/images/{{ $service->image }}" alt="{{ $service->image }}" />
                        <h5 class="mb-1 text-2xl font-bold text-sky-400 hover:text-gray-800 text-center">
                            {{ $service->name }}</h5>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
@endsection
