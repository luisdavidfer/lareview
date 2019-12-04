@extends('layouts.master')

<!-- Title -->
@isset($genre)
    @section('title', 'La review - Modificar género')
@else
    @section('title', 'La review - Añadir género')
@endisset
<!-- Title -->

<!-- Content -->
@section('content')

    <div class="container text-center col-12 col-sm-10 col-md-6 my-5">
    <!-- Form -->
    @isset($genre)
        <form method="post" action="{{route('genre.update',['genre'=>$genre->id])}}">
                @method("PUT")
    @else
        <form method="post" action="{{route('genre.store')}}">
    @endisset

            @csrf

            Descripción
            <input class="my-3 form-control" required type="text" name="description" value="{{$genre->description ?? ''}}">
            <div class="text-danger my-3">@error('description') {{$message}} @enderror</div>
            
            <input class="btn btn-primary" value="Guardar" type="submit">
        </form>
    <!-- Form -->
    </div>

@endsection
<!-- Content -->