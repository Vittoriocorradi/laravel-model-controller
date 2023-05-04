@extends('layouts.app')

@section('page-title')
    Laravel Model Controller
@endsection

@section('page-main')
    <section class="movie-list">
        <div class="row big-container">
            @foreach ($movies as $movie)
                <div class="col-6 col-sm-4 col-lg-3">
                    <div class="card ms-card">
                        <h2 class="card-header">{{ $movie->title }}</h2>
                        <div class="card-body">
                        <h3 class="card-title">Titolo originale: {{ $movie->original_title }}</h3>
                        <div>Nazionalità: {{ $movie->nationality }}</div>
                        <div>Data di rilascio: {{ $movie->date }}</div>
                        <div>Punteggio: {{ $movie->vote }}</div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection