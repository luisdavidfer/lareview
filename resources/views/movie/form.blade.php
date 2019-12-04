@extends('layouts.master')

<!-- Title -->
@isset($movie)
    @section('title', 'La review - Modificar película')
@else
    @section('title', 'La review - Añadir película')
@endisset
<!-- Title -->

<!-- Content -->
@section('content')

    <div class="container text-center col-12 col-sm-10 col-md-6 my-5">

    <!-- Form -->
    @isset($movie)
        <form enctype="multipart/form-data" method="post" action="{{route('movie.update',['movie'=>$movie->id])}}">
                @method("PUT")
    @else
        <form enctype="multipart/form-data" method="post" action="{{route('movie.store')}}">
    @endisset

            @csrf

            Título
            <input class="my-3 form-control" required type="text" name="title" value="{{$movie->title ?? ''}}" maxlength="255">
            <div class="text-danger my-3">@error('title') {{$message}} @enderror</div>
            Sinopsis
            <textarea rows="5" type="text" class="my-3 form-control" required name="synopsis" maxlength="1024">{{$movie->synopsis ?? ''}}</textarea>
            <div class="text-danger my-3">@error('synopsis') {{$message}} @enderror</div>
            Géneros
            <select class="my-3 form-control custom-select" name="genres[]" multiple>
                @foreach ($genres as $genre)
                    <option value="{{$genre->id}}"
                        @isset($movie)
                            @if (in_array($genre->id, $movie->indexesList('genres')))
                                selected
                            @endif
                        @endisset
                    >{{$genre->description}}</option> 
                @endforeach
            </select>
            Actores
            <select class="my-3 form-control" name="actors[]" multiple>
                @foreach ($people as $person)
                    <option value="{{$person->id}}"
                        @isset($movie)
                            @if (in_array($person->id, $movie->indexesList('actors')))
                                selected
                            @endif
                        @endisset
                    >{{$person->name}}</option> 
                @endforeach
            </select>
            Directores
            <select class="my-3 form-control" name="directors[]" multiple>
                @foreach ($people as $person)
                    <option value="{{$person->id}}"
                        @isset($movie)
                            @if (in_array($person->id, $movie->indexesList('directors')))
                                selected
                            @endif
                        @endisset
                    >{{$person->name}}</option> 
                @endforeach
            </select>
            Año
            <input class="my-3 form-control" required type="number" min="1900" name="year" value="{{$movie->year ?? ''}}">
            <div class="text-danger my-3">@error('year') {{$message}} @enderror</div>
            Puntuación
            <input class="my-3 form-control" required type="number" min="1" max="10" name="rating" value="{{$movie->rating ?? ''}}">
            <div class="text-danger my-3">@error('rating') {{$message}} @enderror</div>
            Portada
            <input class="my-3 form-control" type="file" name="cover">
            <div class="text-danger my-3">@error('cover') {{$message}} @enderror</div>
            Ruta externa
            <input class="my-3 form-control" required type="text" name="external_url" value="{{$movie->external_url ?? ''}}">
            <div class="text-danger my-3">@error('external_url') {{$message}} @enderror</div>
            Nombre del archivo
            <input class="my-3 form-control" required type="text" name="filename" value="{{$movie->filename ?? ''}}">
            <div class="text-danger my-3">@error('filename') {{$message}} @enderror</div>

            <input  class="btn btn-primary" value="Guardar" type="submit">

        </form>
    <!-- Form -->
    </div>
@endsection
<!-- Content -->