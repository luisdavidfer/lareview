@extends('layouts/master')

@isset($peopleList)
    @section('title', 'People')
    @section('header', 'People list')
@else
@section('header', $person->name)
    @section('title', 'Person')
@endisset

@section('content')

<table style="width:100%;border:1px solid black;text-align:center">
        @isset($peopleList)
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Fotografía</th>
                <th>Ruta externa (metadatos)</th>
                 </tr>
            @foreach ($peopleList as $person)
                <tr>
                    <td>{{$person->id}}</td>
                    <td><a href="{{route('person.show', $person->id)}}">{{$person->name}}</a></td>
                    <td><img style="width:100px" src="{{url('photos/'.$person->photo)}}" alt="{{basename($person->photo)}}"></td>
                    <td><a href="{{route('person.show', $person->id)}}">{{$person->external_url}}</a></td>
                    <td>
                        <form action = "{{route('person.edit', $person->id)}}" method="GET">
                            @csrf
                            <input type="submit" value="Modificar">
                        </form>
                    </td>
                    <td>
                            <form action = "{{route('person.destroy', $person->id)}}" method="POST">
                                @csrf
                                @method("DELETE")
                                <input type="submit" value="Borrar">
                            </form>
                    </td>
                </tr>
            @endforeach
            </table>
            <button onclick="location.href='{{route('person.create')}}'">Añadir persona</button>
        @else
        <img style="width:100px" src="{{url('photos/'.$person->photo)}}" alt="{{basename($person->photo)}}">
            <caption><a href="{{$person->external_url}}">{{$person->external_url}}</a></caption>
            <tr>
                <th>Actor</th>
            </tr>
            
            @foreach ($person->act as $movie)
                <tr>
                    <td><a href="{{route('movie.show', $movie->id)}}">{{$movie->title}}</a></td>
                </tr>
            @endforeach
        </table>
        <table style="width:100%;border:1px solid black;text-align:center;border-top:none">
            <tr>
                <th>Director</th>
            </tr>
            
            @foreach ($person->direct as $movie)
                <tr>
                    <td><a href="{{route('movie.show', $movie->id)}}">{{$movie->title}}</a></td>
                </tr>
            @endforeach
        </table>
            
        @endisset
@endsection
