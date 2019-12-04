@extends('layouts/master')

<!-- Title -->
@section('title', 'La review - Películas')

<!-- Content -->
@section('content')

<div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <!-- Table -->
                <div class="table-responsive">
                    <table class="table">
                        <!-- Table header -->
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
                            <th>Ruta externa</th>
                            <th colspan="2"><button title="Añadir" class="btn btn-primary p-2" onclick="location.href='{{route('movie.create')}}'"><i class="lni-plus"></i></button></th>
                        </tr>
                        <!-- Table data -->
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
                                <td><a href="{{url('/search?search='.$movie->year)}}">{{$movie->year}}</a></td>
                                <td>{{$movie->rating}}</td>
                                <td><img style="width:75px" src="{{url('covers/'.$movie->cover)}}" alt="{{basename($movie->cover)}}"></td>
                                <td>{{$movie->filepath}}</td>
                                <td>{{$movie->filename}}</td>
                                <td><a href="{{$movie->external_url}}">{{$movie->external_url}}</a></td>
                                <!-- Modification button -->
                                <td>
                                    <form action = "{{route('movie.edit', $movie->id)}}" method="GET">
                                        @csrf
                                        <button title="Modificar" type="submit" class="my-auto p-2 btn btn-success"><i class="lni-pencil"></i></button>
                                    </form>
                                </td>
                                <!-- Delete button -->
                                <td>
                                    <form action = "{{route('movie.destroy', $movie->id)}}" method="POST">
                                        @csrf
                                        @method("DELETE")
                                        <button onclick="return confirm('¿Estás seguro de eliminar la película {{$movie->title}}?')" title="Eliminar" type="submit" class="my-auto p-2 btn btn-warning"><i class="lni-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            <!-- Table -->
            </div> 
        </div>
</div>

@endsection

<!-- Content -->