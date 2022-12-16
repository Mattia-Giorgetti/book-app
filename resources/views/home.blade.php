@extends('layouts.app')

@section('main_title')
    <div class="container py-4">
        <h2 class="mb-0">All Movies</h2>
    </div>
@endsection

@section('content')
    <div class="container py-3">
        <div class="row">
            @foreach ($movies as $movie)
                <div class="col-4">
                    <div class="card mb-3 border-0">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{ $movie['image'] }}" class="img-fluid rounded-start"
                                    alt="{{ $movie['original_title'] }}">
                            </div>
                            <div class="col-md-8 bg-black">
                                <div class="card-body">
                                    <h5 class="card-title text-white">{{ $movie['title'] }}</h5>
                                    <p class="card-text text-white">{{ $movie['original_title'] }}</p>
                                    <p class="card-text"><small class="text-muted">{{ $movie['vote'] }}</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
@endsection
