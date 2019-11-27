@extends('layouts.master')

@isset($person)
    @section('title', 'Update')
    @section('header', 'Update Person')
@else
    @section('title', 'Insert')
    @section('header', 'Insert Person')
@endisset

@section('content')

    @isset($person)
        <form enctype="multipart/form-data" method="post" action="{{route('person.update',['person'=>$person->id])}}">
                @method("PUT")
    @else
        <form enctype="multipart/form-data" method="post" action="{{route('person.store')}}">
    @endisset

            @csrf

            Nombre completo:<br><input type="text" name="name" value="{{$person->name ?? ''}}">
            @error('name') {{$message}} @enderror<br>
            Fotografía:<br><input type="file" name="photo">
            @error('photo') {{$message}} @enderror<br><br>
            Ruta externa (metadatos):<br><input type="text" name="external_url" value="{{$person->external_url ?? ''}}">
            @error('external_url') {{$message}} @enderror<br>
            Actúa en:<br>
            <select name="act[]" multiple>
                @foreach ($movies as $movie)
                    <option value="{{$movie->id}}"
                        @isset($person)
                            @if (in_array($person->id, $movie->indexesList('actors')))
                                selected
                            @endif
                        @endisset
                    >{{$movie->title}}</option> 
                @endforeach
            </select><br>
            Ha dirijido:<br>
            <select name="direct[]" multiple>
                @foreach ($movies as $movie)
                    <option value="{{$movie->id}}"
                        @isset($person)
                            @if (in_array($person->id, $movie->indexesList('directors')))
                                selected
                            @endif
                        @endisset
                    >{{$movie->title}}</option> 
                @endforeach
            </select><br>

            <input type="submit">
        </form>
@endsection
