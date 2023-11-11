@extends('layouts.main')

@section('content_page')
    <div class = "grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 px-12 pt-12 pb-16 mx-auto">
        @foreach ($teams as $team)
            <div
                class="flex flex-col justify-center items-center w-full h-full bg-white border border-gray-800 rounded-lg shadow dark:bg-gray-800 dark:border-gray-800 mx-auto shadow hover:shadow-xl">
                <img class="h-3/4 rounded-t-lg w-full object-cover" src="/images/karyawan_gosyen/{{ $team->profile_photo }}"
                    alt="{{ $team->profile_photo }}" />
                <div class="h-1/4 px-8 pb-2 flex flex-col justify-center items-center">
                    <h5 class="sm:text-lg lg:text-2xl font-bold tracking-tight text-sky-400 text-center">{{ $team->name }}</h5>
                    <p class="fold:text-xs text-base font-normal text-white text-center">{{ $team->expertise }}</p>
                </div>
            </div>
        @endforeach
    </div>
    <div class="flex justify-center mb-12">
        {{ $teams->links() }}
    </div>
@endsection
