@extends('layouts.main')

@section('content_page')
    <div class = "grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-2 pt-12 pr-12 pl-12 pb-8">
        @foreach ($teams as $team)
            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 h-fit">
                <a href="#">
                    <img class="rounded-t-lg h-4/5 object-cover " src="{{ $team->profile_photo }}" alt="{{ $team->profile_photo }}" />
                </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-blue-500 text-center">{{ $team->name }}</h5>
                    </a>
                    <p class="mb-3 font-normal text-white text-center">{{ $team->expertise }}</p>
                </div>
            </div>
        @endforeach
    </div>
    <div class="flex justify-center mb-12">
        {{ $teams->links() }}
    </div>
@endsection
