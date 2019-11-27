@extends('layouts.master')

@isset($genre)
    @section('title', 'Update')
    @section('header', 'Update')
@else
    @section('title', 'Insert')
    @section('header', 'Insert')
@endisset

@section('content')

    @isset($genre)
        <form method="post" action="{{route('genre.update',['genre'=>$genre->id])}}">
                @method("PUT")
    @else
        <form method="post" action="{{route('genre.store')}}">
    @endisset

            @csrf

            Descripción:<br><input type="text" name="description" value="{{$genre->description ?? ''}}">@error('description') {{$message}} @enderror<br>
            
            <input type="submit">
        </form>
@endsection
