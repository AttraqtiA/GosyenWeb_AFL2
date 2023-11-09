@extends('layouts.main')

@section('content_page')
    <div class="album pt-5 pb-4 bg-dark-subtle">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-3">
                @foreach ($teams as $team)
                    <div class="col">
                        <div class="card shadow-sm h-100 bg-dark border-dark-subtle">
                            <img src="{{ $team->profile_photo }}" alt="{{ $team->profile_photo }}"
                                class="card-img-top object-fit-cover" style="height: 350px;">
                            <div class="card-body d-flex flex-column justify-content-center align-items-center">
                                <h5 class="card-title text-center text-primary fw-bold">{{ $team->name }}</h5>
                                <p class="card-text text-center text-white">{{ $team->expertise }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row mt-5">
                <div class="col d-flex justify-content-center">
                    {{ $teams->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
