@extends('layouts.navbar_pure')

@section('content_page')
    <section style="background-image: url('/images/crop_white_desk.jpg')"
        class="bg-center bg-no-repeat bg-gray-700 bg-blend-multiply">
        <div class="flex flex-col md:flex-row gap-8 md:gap-16 px-8 md:px-16 mx-auto max-w-screen-xl text-center text-white py-16 lg:py-32">
            <img class="aspect-square w-1/4 h-1/2" src="/images/{{ $service_client->image }}" alt="{{ $service_client->image }}" />
            <div class="flex flex-col basis-full">
                <h1
                    class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-left text-white md:text-5xl lg:text-6xl dark:text-white">
                    Our <span class="text-sky-400 dark:text-sky-400">{{ $service_client->name }}</span> Service.</h1>
                <p class="text-md text-left font-normal text-white md:text-lg dark:text-white">
                    {{ $service_client->description }}
                </p>
            </div>
        </div>
    </section>
    @if ($service_client->video_link != '')
    <div class="z-40 pt-16">
        <iframe class="mx-auto aspect-video w-80 md:w-96" src="{{ $service_client->video_link }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>

    <hr class="mt-16 border-gray-200 mx-8 md:mx-16 dark:border-gray-700" />

    @else

    @endif


    <div class="flex flex-col px-8 md:px-16 pb-16 mx-auto">
        <div class="flex flex-row items-center justify-between mt-16 lg:mx-8">
            <h5 class="text-base md:text-xl font-bold italic leading-none text-gray-800 dark:text-gray-800">Trusted by our Clients</h5>
            <a href="/clients" class="text-base text-right font-semibold text-sky-600 hover:underline dark:text-sky-400">
                View all Clients
            </a>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 mt-4">
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
    @include('partial.contact_src')

@endsection
