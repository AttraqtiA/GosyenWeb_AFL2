@extends('layouts.main')

@section('content_page')
    <div class="mx-auto max-w-screen-xl text-center sm:col-span-2 md:col-span-2 lg:col-span-4 mb-4 pt-16">
        <h1 class="mb-8 text-4xl font-extrabold tracking-tight leading-none text-gray-800 md:text-5xl lg:text-6xl">
            {!! $pageTitle !!}</h1>
        <p class="text-lg font-normal text-gray-800 lg:text-xl sm:px-16 lg:px-48">{!! $pageDescription !!}</p>
    </div>
    <div class = "grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-2 pt-16 px-8 pb-16 mx-auto">
        @foreach ($clients as $client)
            <div
                class="mx-auto flex flex-col justify-center items-center w-full max-w-sm bg-white border border-gray-200 rounded-lg dark:bg-gray-800 dark:border-gray-700 p-6 shadow hover:shadow-xl transform transition duration-500 hover:-translate-y-4 hover:z-40">
                <div class="h-1/2 flex flex-col items-center justify-center">
                    @if ($client->company_logo != '')
                        <img class="h-24 mb-3 shadow-lg" src="/images/{{ $client->company_logo }}"
                            alt="{{ $client->company_logo }}" />
                    @else
                        <h3
                            class="mb-4 text-3xl text-gray-400 text-center font-bold rounded-lg border-2 border-gray-400 p-2">
                            No Company Logo</h3>
                    @endif
                </div>
                <div class="h-1/2 flex flex-col items-center justify-center">
                    <h5 class="mb-1 text-md md:text-xl font-bold text-sky-400 text-center">{{ $client->company_name }}
                    </h5>
                    <span class="text-sm text-white font-normal text-center">{{ $client->location }}</span>

                    <div class="mt-2 flex flex-row justify-center items-center">
                        @foreach ($client->service as $service)
                            <a href="/services/{{ $service->id }}"
                                class="bg-sky-300 h-10 w-10 rounded-full mx-1 mt-4 p-2 w-1/4">
                                <img src="/images/{{ $service->image }}" alt="{{ $service->image }}">
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
@section('pagination')
    <div class="flex justify-center mb-16">
        {{ $clients->links() }}
    </div>
@endsection
