@extends('layouts.main-layout')

@section('content')
    <div class="d-flex my-3 mx-4 justify-content-between">
        <h1 class="text-center my-3">Comics disponibili</h1>
        <a class="fs-1 fw-bold" href="{{ route('comic.create') }}">+</a>
    </div>

    <div class="container-fluid d-flex flex-wrap justify-content-between">


        @foreach ($comics as $comic)
            <div class="card">
                <div class="titolo">
                    <h3>
                        <a href="{{ route('comic.show', $comic->id) }}"> {{ $comic->title }}</a>
                    </h3>

                </div>

                <div class="card-img">
                    <img src="{{ $comic->thumb }}" alt="immagine non trovata">
                </div>

                <div class="edit">
                    <a href="{{ route('comic.edit', $comic->id) }}">Edit</a>
                </div>


                <form class="delete" method="POST" action="{{ route('delete', $comic->id) }}"
                >

                    @csrf
                    @method('DELETE')

                    <input type="submit" value="DELETE">

                </form>


            </div>
        @endforeach

    </div>
@endsection

