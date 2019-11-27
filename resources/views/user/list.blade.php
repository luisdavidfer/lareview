@extends('layouts/master')

@isset($usersList)
    @section('title', 'Users')
    @section('header', 'Users list')
@else
    @section('title', 'User')
    @section('header', 'User')
@endisset

@section('content')
<table style="width:100%;border:1px solid black;text-align:center">
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Contraseña</th>
        </tr>
        @isset($usersList)
            @foreach ($usersList as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->password}}</td>
                    <td>
                        <form action = "{{route('user.edit', $user->id)}}" method="GET">
                            @csrf
                            <input type="submit" value="Modificar">
                        </form>
                    </td>
                    <td>
                            <form action = "{{route('user.destroy', $user->id)}}" method="POST">
                                @csrf
                                @method("DELETE")
                                <input type="submit" value="Borrar">
                            </form>
                    </td>
                </tr>
            @endforeach
            </table>
            <button onclick="location.href='{{route('user.create')}}'">Nuevo usuario</button>
        @else
                <tr>
                    <td>{{$usr->id}}</td>
                    <td>{{$usr->name}}</td>
                    <td>{{$usr->email}}</td>
                    <td>{{$usr->password}}</td>
                    <td>
                            <form action = "{{route('user.edit', $usr->id)}}" method="GET">
                                @csrf
                                <input type="submit" value="Modificar">
                            </form>
                        </td>
                        <td>
                                <form action = "{{route('user.destroy', $usr->id)}}" method="POST">
                                    @csrf
                                    @method("DELETE")
                                    <input type="submit" value="Borrar">
                                </form>
                        </td>
                </tr>
            </table>
        @endisset
@endsection
