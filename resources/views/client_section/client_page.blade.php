@extends('layouts.main')

@section('content_page')
    <div class = "grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-2 pt-12 pr-12 pl-12 pb-8 mx-auto">
        <div class="mx-auto max-w-screen-xl text-center sm:col-span-2 md:col-span-2 lg:col-span-4 mb-4">
            <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-blue-500 md:text-5xl lg:text-6xl">
                {!! $pageTitle !!}</h1>
            <p class="text-lg font-normal text-gray-800 lg:text-xl sm:px-16 lg:px-48">{!! $pageDescription !!}</p>
        </div>
        @foreach ($clients as $client)
            <div
                class="mx-auto flex flex-col justify-center items-center w-full max-w-sm bg-white border border-gray-200 rounded-lg dark:bg-gray-800 dark:border-gray-700 p-6 shadow hover:shadow-xl">
                <div class="flex flex-col items-center justify-center h-full">
                    @if ($client->company_logo != '')
                        <img class="h-24 mb-3 shadow-lg" src="/images/{{ $client->company_logo }}"
                            alt="{{ $client->company_logo }}" />
                    @else
                        <h3
                            class="mb-4 text-3xl text-gray-400 text-center font-bold rounded-lg border-2 border-gray-400 p-2">
                            No Company Logo</h3>
                    @endif

                    <h5 class="mb-1 text-xl font-medium text-blue-500 text-center">{{ $client->company_name }}</h5>
                    <span class="text-sm text-white text-center">{{ $client->location }}</span>
                </div>
            </div>
        @endforeach
    </div>
    <div class="flex justify-center mb-12">
        {{ $clients->links() }}
    </div>
@endsection
