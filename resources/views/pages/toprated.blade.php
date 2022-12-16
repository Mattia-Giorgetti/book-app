@extends('layouts.app')

@section('titolo', 'Top Rated')
@section('main_title')
    <div class="container py-4">
        <h2 class="mb-0">Top Rated</h2>
    </div>
@endsection
@section('content')
    <section id="toprated">
        <div class="container py-3">
            <div class="row justify-content-center">
                @foreach ($moviesTopRated as $filtMovie)
                    <div class="card text-bg-dark mb-4 fs-2">
                        <img src="{{ $filtMovie['image'] }}" class="card-img" alt="{{ $filtMovie['title'] }}">
                        <div class="card-img-overlay">
                            <h5 class="card-title">{{ $filtMovie['title'] }}</h5>
                            <p class="card-text">{{ $filtMovie['original_title'] }}</p>
                            <p class="card-text">{{ $filtMovie['nationality'] }}</p>
                            <p class="card-text"><small>{{ $filtMovie['vote'] }}</small></p>
                        </div>
                    </div>
                @endforeach
            </div>
    </section>
@endsection
