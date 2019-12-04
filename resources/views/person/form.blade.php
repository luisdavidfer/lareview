@extends('layouts.master')

<!-- Title -->
@isset($person)
    @section('title', 'La review - Modificar persona')
@else
    @section('title', 'La review - Añadir persona')
@endisset
<!-- Title -->

<!-- Content -->
@section('content')

    <div class="container text-center col-12 col-sm-10 col-md-6 my-5">
    <!-- Form -->
    @isset($person)
        <form enctype="multipart/form-data" method="post" action="{{route('person.update',['person'=>$person->id])}}">
                @method("PUT")
    @else
        <form enctype="multipart/form-data" method="post" action="{{route('person.store')}}">
    @endisset

            @csrf

            Nombre completo
            <input class="my-3 form-control" type="text" required name="name" value="{{$person->name ?? ''}}">
            <div class="text-danger my-3">@error('name') {{$message}} @enderror</div>
            Fotografía
            <input class="my-3 form-control" type="file" name="photo">
            <div class="text-danger my-3">@error('photo') {{$message}} @enderror</div>
            Ruta externa
            <input class="my-3 form-control" required type="text" name="external_url" value="{{$person->external_url ?? ''}}">
            <div class="text-danger my-3">@error('external_url') {{$message}} @enderror</div>
            Actúa en
            <select class="my-3 form-control" name="act[]" multiple>
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
            Ha dirigido
            <select class="my-3 form-control" name="direct[]" multiple>
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
            
            <input  class="btn btn-primary" value="Guardar" type="submit">

        </form>
    <!-- Form -->
    </div>
@endsection
<!-- Content -->