@extends('layouts/master')

@section('title', 'La review - Películas')


@section('content')
<div class="container-fluid">
    <ul class="nav nav-fill pt-3">
        <li class="nav-item">
        <a class="nav-link" href="{{url("")}}">Todas</a>
        </li>
        @foreach ($genresList as $genre)
            <li class="nav-item">
            <a class="nav-link" href="{{url("genre",$genre->id)}}">{{$genre->description}}</a>
            </li>
        @endforeach
    </ul>
    <div class="row align-items-left">
        @foreach ($moviesList as $movie)
        <div class="col-xl-2 col-lg-3 col-md-3 col-sm-6 col-12 my-3">
            <a href="{{url('movie/'.$movie->id)}}"><img style="width:200px;height:300px;display:block;margin:0 auto" src="{{url('covers/'.$movie->cover)}}" title="{{$movie->title}}" alt="{{basename($movie->cover)}}"></a>
        </div>
        @endforeach
    </div>

</div>

@endsection
