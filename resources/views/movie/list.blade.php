@extends('layouts/master')

@isset($moviesList)
    @section('title', 'movies')
    @section('header', 'movies list')
@else
    @section('title', 'movie')
    @section('header', 'movie')
@endisset

@section('content')
<table style="width:100%;border:1px solid black;text-align:center">
        <tr>
            <th>Id</th>
            <th>Título</th>
            <th>Géneros</th>
            <th>Actores</th>
            <th>Directores</th>
            <th>Año</th>
            <th>Puntuación</th>
            <th>Portada</th>
            <th>Ruta del archivo</th>
            <th>Nombre del archivo</th>
            <th>Ruta externa (metadatos)</th>
        </tr>

        @isset($moviesList)
            @foreach ($moviesList as $movie)
                <tr>
                    <td>{{$movie->id}}</td>
                    <td><a href="{{route('movie.show', $movie->id)}}">{{$movie->title}}</a></td>
                    <td>
                        @foreach(($movie->genres) as $genre)
                            <a href="{{route('genre.show', $genre->id)}}">{{$genre->description}}</a>
                        @endforeach
                    </td>
                    <td>
                        @foreach ($movie->actors as $person)
                            <a href="{{route('person.show', $person->id)}}">{{$person->name}}</a>
                        @endforeach
                    </td>
                    <td>
                        @foreach ($movie->directors as $person)
                            <a href="{{route('person.show', $person->id)}}">{{$person->name}}</a>
                        @endforeach
                    </td>
                    <td>{{$movie->year}}</td>
                    <td>{{$movie->rating}}</td>
                    <td><a href="{{url('movies/'.$movie->filename)}}"><img style="width:100px" src="{{url('covers/'.$movie->cover)}}" alt="{{basename($movie->cover)}}"></a></td>
                    <td>{{$movie->filepath}}</td>
                    <td>{{$movie->filename}}</td>
                    <td><a href="{{$movie->external_url}}">{{$movie->external_url}}</a></td>
                    <td>
                        <form action = "{{route('movie.edit', $movie->id)}}" method="GET">
                            @csrf
                            <input type="submit" value="Modificar">
                        </form>
                    </td>
                    <td>
                            <form action = "{{route('movie.destroy', $movie->id)}}" method="POST">
                                @csrf
                                @method("DELETE")
                                <input type="submit" value="Borrar">
                            </form>
                    </td>
                </tr>
            @endforeach
            </table>
            <button onclick="location.href='{{route('movie.create')}}'">Añadir película</button>
        @else
                <tr>
                    <td>{{$movie->id}}</td>
                    <td>{{$movie->title}}</td>
                    <td>
                        @foreach(($movie->genres) as $genre)
                            <a href="{{route('genre.show', $genre->id)}}">{{$genre->description}}</a>
                        @endforeach
                    </td>
                    <td>
                        @foreach ($movie->actors as $person)
                            <a href="{{route('person.show', $person->id)}}">{{$person->name}}</a>
                        @endforeach
                    </td>
                    <td>
                        @foreach ($movie->directors as $person)
                            <a href="{{route('person.show', $person->id)}}">{{$person->name}}</a>
                        @endforeach
                    </td>
                    <td>{{$movie->year}}</td>
                    <td>{{$movie->rating}}</td>
                    <td><img style="width:100px" src="{{url('covers/'.$movie->cover)}}" alt="{{basename($movie->cover)}}"></td>
                    <td>{{$movie->filepath}}</td>
                    <td>{{$movie->filename}}</td>
                    <td><a href="{{$movie->external_url}}">{{$movie->external_url}}</a></td>
                {{-- 
                    <td>
                            <form action = "{{route('movie.edit', $movie->id)}}" method="GET">
                                @csrf
                                <input type="submit" value="Modificar">
                            </form>
                        </td>
                        <td>
                                <form action = "{{route('movie.destroy', $movie->id)}}" method="POST">
                                    @csrf
                                    @method("DELETE")
                                    <input type="submit" value="Borrar">
                                </form>
                        </td>
                --}}
                </tr>
            </table>
        @endisset
@endsection
