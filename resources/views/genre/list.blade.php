@extends('layouts/master')

@isset($genresList)
    @section('title', 'Genres')
    @section('header', 'Genres list')
@else
    @section('title', 'Genre')
    @section('header', 'Genre')
@endisset

@section('content')
<table style="width:100%;border:1px solid black;text-align:center">
        @isset($genresList)
            <tr>
                <th>Id</th>
                <th>Descripción</th>
                 </tr>
            @foreach ($genresList as $genre)
                <tr>
                    <td>{{$genre->id}}</td>
                    <td><a href="{{route('genre.show', $genre->id)}}">{{$genre->description}}</a></td>
                    <td>
                        <form action = "{{route('genre.edit', $genre->id)}}" method="GET">
                            @csrf
                            <input type="submit" value="Modificar">
                        </form>
                    </td>
                    <td>
                            <form action = "{{route('genre.destroy', $genre->id)}}" method="POST">
                                @csrf
                                @method("DELETE")
                                <input type="submit" value="Borrar">
                            </form>
                    </td>
                </tr>
            @endforeach
            </table>
            <button onclick="location.href='{{route('genre.create')}}'">Añadir género</button>
        @else
            <tr>
                <th>{{$genre->description}}</th>
            </tr>
            @foreach ($genre->movies as $movie)
                <tr>
                    <td><a href="{{route('movie.show', $movie->id)}}">{{$movie->title}}</a></td>
                </tr>
            @endforeach
            </table>
        @endisset
@endsection
