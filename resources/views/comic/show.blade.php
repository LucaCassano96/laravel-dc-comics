@extends('layouts.main-layout')

@section('content')
    <h2 class="text-center my-3">{{ $comic->title }}</h2>

    <div class="comic d-flex">

        <div class="thumb">

            <img src="{{ $comic->thumb }}" alt="l'immagine non è presente">

        </div>

        <div class="description">

            <h5>Description:</h5>
            <p> {{ $comic->description }}</p>

            <div>Prezzo: {{ $comic->price }}</div>

            <div> Serie:{{ $comic->series }}</div>

            <div>Data di uscita: {{ $comic->sale_date }}</div>

            <div>Tipologia: {{ $comic->type }}</div>

        </div>



    </div>
@endsection
