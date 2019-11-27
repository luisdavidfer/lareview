@extends('layouts.master')

@isset($movie)
    @section('title', 'Update')
    @section('header', 'Update')
@else
    @section('title', 'Insert')
    @section('header', 'Insert')
@endisset

@section('content')

    @isset($movie)
        <form enctype="multipart/form-data" method="post" action="{{route('movie.update',['movie'=>$movie->id])}}">
                @method("PUT")
    @else
        <form enctype="multipart/form-data" method="post" action="{{route('movie.store')}}">
    @endisset

            @csrf

            Título:<br><input type="text" name="title" value="{{$movie->title ?? ''}}">
            @error('title') {{$message}} @enderror<br>
            Géneros:<br>
            <select name="genres[]" multiple>
                @foreach ($genres as $genre)
                    <option value="{{$genre->id}}"
                        @isset($movie)
                            @if (in_array($genre->id, $movie->indexesList('genres')))
                                selected
                            @endif
                        @endisset
                    >{{$genre->description}}</option> 
                @endforeach
            </select><br>
            Actores:<br>
            <select name="actors[]" multiple>
                @foreach ($people as $person)
                    <option value="{{$person->id}}"
                        @isset($movie)
                            @if (in_array($person->id, $movie->indexesList('actors')))
                                selected
                            @endif
                        @endisset
                    >{{$person->name}}</option> 
                @endforeach
            </select><br>
            Directores:<br>
            <select name="directors[]" multiple>
                @foreach ($people as $person)
                    <option value="{{$person->id}}"
                        @isset($movie)
                            @if (in_array($person->id, $movie->indexesList('directors')))
                                selected
                            @endif
                        @endisset
                    >{{$person->name}}</option> 
                @endforeach
            </select><br>
            Año:<br><input type="number" min="1900" name="year" value="{{$movie->year ?? ''}}">
            @error('year') {{$message}} @enderror<br>
            Puntuación:<br><input type="number" min="1" max="10" name="rating" value="{{$movie->rating ?? ''}}">
            @error('rating') {{$message}} @enderror<br><br>
            Portada:<br><input type="file" name="cover">
            @error('cover') {{$message}} @enderror<br><br>
            Ruta del archivo:<br><input type="text" name="filepath" value="{{$movie->filepath ?? ''}}">
            @error('filepath') {{$message}} @enderror<br><br>
            Ruta externa (metadatos):<br><input type="text" name="external_url" value="{{$movie->external_url ?? ''}}">
            @error('external_url') {{$message}} @enderror<br><br>
            Nombre del archivo:<br><input type="text" name="filename" value="{{$movie->filename ?? ''}}">
            @error('filename') {{$message}} @enderror<br><br>

            <input type="submit">
        </form>
@endsection
