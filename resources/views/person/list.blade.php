@extends('layouts/master')

@section('title', 'La review - Personas')


@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">    
                <div class="table-responsive">
                    <table class="table">
                        <tr>
                                <th>Id</th>
                            <th>Nombre</th>
                            <th>Fotografía</th>
                            <th>Ruta externa</th>
                            <th colspan="2"><button title="Añadir" class="btn btn-primary p-2" onclick="location.href='{{route('person.create')}}'"><i class="lni-plus"></i></button></th>
                        </tr>
                        @foreach ($peopleList as $person)
                        <tr>
                            <td>{{$person->id}}</td>
                                <td><a href="{{route('person.show', $person->id)}}">{{$person->name}}</a></td>
                                <td><img style="width:75px" src="{{url('photos/'.$person->photo)}}" alt="{{basename($person->photo)}}"></td>
                                <td><a href="{{route('person.show', $person->id)}}">{{$person->external_url}}</a></td>
                                <td>
                                    <form action = "{{route('person.edit', $person->id)}}" method="GET">
                                            @csrf
                                        <button title="Modificar" type="submit" class="my-auto p-2 btn btn-success"><i class="lni-pencil"></i></button>
                                    </form>
                                </td>
                                <td>
                                    <form action = "{{route('person.destroy', $person->id)}}" method="POST">
                                        @csrf
                                        @method("DELETE")
                                        <button onclick="return confirm('¿Estás seguro de eliminar a {{$person->name}}?')" title="Eliminar" type="submit" class="my-auto p-2 btn btn-warning"><i class="lni-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div> 
        </div>
    </div>
@endsection
