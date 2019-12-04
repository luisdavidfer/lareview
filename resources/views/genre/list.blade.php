@extends('layouts/master')

<!-- Title -->
@section('title', 'La review - Géneros')

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
                            <th>Descripción</th>
                            <th colspan="2"><button title="Añadir" class="btn btn-primary p-2" onclick="location.href='{{route('genre.create')}}'"><i class="lni-plus"></i></button></th>
                        </tr>
                        <!-- Table data -->
                        @foreach ($genresList as $genre)
                            <tr>
                                <td>{{$genre->id}}</td>
                                <td><a href="{{route('genre.show', $genre->id)}}">{{$genre->description}}</a></td>
                                <!-- Modify button -->
                                <td>
                                    <form action = "{{route('genre.edit', $genre->id)}}" method="GET">
                                        @csrf
                                        <button title="Modificar" type="submit" class="my-auto p-2 btn btn-success"><i class="lni-pencil"></i></button>
                                    </form>
                                </td>
                                <!-- Delete button -->
                                <td>
                                    <form action = "{{route('genre.destroy', $genre->id)}}" method="POST">
                                        @csrf
                                        @method("DELETE")
                                        <button onclick="return confirm('¿Estás seguro de eliminar el género {{$genre->description}}?')" title="Eliminar" type="submit" class="my-auto p-2 btn btn-warning"><i class="lni-trash"></i></button>
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
