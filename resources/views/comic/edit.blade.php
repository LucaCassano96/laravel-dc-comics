@extends('layouts.main-layout')

@section('content')

<div class="create">

    <h2>New Comic</h2>

    <form class="d-flex flex-column text-center"
    method="POST"
    action="{{route("comic.update", $comic -> id)}}">

        @csrf
        @method("PUT")

        <label for="title">Titlo</label>
        <input type="text" name="title" value="{{$comic -> title}}">

        <label for="thumb">Immagine</label>
        <input type="text" name="thumb" value="{{$comic -> thumb}}">

        <label for="description">description</label>
        <textarea name="description" cols="30" rows="10">{{$comic -> description}}</textarea>

        <label for="price">Prezzo</label>
        <input type="text" name="price" value="{{$comic -> price}}">

        <label for="series">Serie</label>
        <input type="text" name="series" value="{{$comic -> series}}">

        <label for="sale_date">Data di rilascio</label>
        <input type="date" name="sale_date" value="{{$comic -> sale_date}}">

        <label for="type">Tipo</label>
        <input type="text" name="type" value="{{$comic -> type}}">

        <input class="send" type="submit" value="Update">

    </form>

</div>


@endsection

