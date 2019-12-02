@extends('layouts/master')

@section('title', 'La review - Usuarios')

@section('content')


<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table">
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Correo</th>
                        <th>Contraseña</th>
                        <th colspan="2"><button title="Añdir" class="btn btn-primary p-2" onclick="location.href='{{route('user.create')}}'"><i class="lni-plus"></i></button></th>
                    </tr>
                    @foreach ($usersList as $user)
                        @if($user->id == $authId)
                            <tr class="text-primary"> 
                        @else
                            <tr>
                        @endif
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->password}}</td>
                            <td>
                                <form action = "{{route('user.edit', $user->id)}}" method="GET">
                                    @csrf
                                    <button title="Modificar" type="submit" class="my-auto p-2 btn btn-success"><i class="lni-pencil"></i></button>
                                </form>
                            </td>
                            <td>
                                <form action = "{{route('user.destroy', $user->id)}}" method="POST">
                                    @csrf
                                    @method("DELETE")
                                    <button onclick="return confirm('¿Estás seguro de eliminar al usuario {{$user->name}}?')" title="Eliminar" type="submit" class="my-auto p-2 btn btn-warning"><i class="lni-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div> 
        </div> 
    </div>
</div>
     
 <!-- DEPURACIÓN -->


@endsection
