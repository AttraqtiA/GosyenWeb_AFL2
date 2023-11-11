@extends('layouts.main')

@section('content_page')
    <div class="flex flex-col p-12 mx-auto">
        <div
            class="flex flex-col sm:flex-col lg:flex-row justify-center text-center sm:text-center lg:text-left items-center gap-10">
            <img class="w-1/4" src="/images/{{ $service_client->image }}" alt="{{ $service_client->image }}" />
            <div class="flex flex-col basis-full">
                <h1
                    class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-800 md:text-5xl lg:text-6xl dark:text-gray-800">
                    Our <span class="text-sky-400 dark:text-sky-400">{{ $service_client->name }}</span> Service.</h1>
                <p class="text-lg font-normal text-gray-800 lg:text-xl dark:text-gray-800">{{ $service_client->description }}
                </p>
            </div>
        </div>
        <div class="flex flex-row items-center justify-between mt-12">
            <h5 class="text-xl font-bold italic leading-none text-gray-800 dark:text-gray-800">Trusted by our Clients</h5>
            <a href="/clients" class="text-base font-medium text-sky-400 hover:underline dark:text-sky-400">
                View all Clients
            </a>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-1 mt-4 h-[660px] overflow-y-auto scroll-smooth">
            @foreach ($service_client->client as $client)
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
                        <h5 class="mb-1 text-2xl font-bold text-sky-400 text-center">{{ $client->company_name }}</h5>
                        <span class="text-sm text-white font-normal text-center">{{ $client->location }}</span>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
