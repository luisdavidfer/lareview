@extends('layouts.master')

<!-- Ttile -->
@isset($user)
    @section('title', 'La review - Modificar usuario')
@else
    @section('title', 'La review - Añadir usuario')
@endisset
<!-- Title -->

<!-- Content -->
@section('content')

    <div class="container text-center col-12 col-sm-10 col-md-6 my-5">

    <!-- Form -->
    @isset($user)
        <form method="post" enctype="multipart/form-data" action="{{route('user.update',['user'=>$user->id])}}">
            @method("PUT")
    @else
        <form method="post" enctype="multipart/form-data" action="{{route('user.store')}}">
    @endisset

            @csrf

            Nombre
            <input class="my-3 form-control" required type="text" name="name" value="{{$user->name ?? ''}}">
            <div class="text-danger my-3">@error('name') {{$message}} @enderror</div>
            Correo electrónico
            <input class="my-3 form-control" required type="email" name="email" value="{{$user->email ?? ''}}">
            <div class="text-danger my-3">@error('email') {{$message}} @enderror</div>
            Contraseña
            <input class="my-3 form-control" required type="password" name="password" value="{{$user->password ?? ''}}">
            <div class="text-danger my-3">@error('password') {{$message}} @enderror</div>

            <input  class="btn btn-primary" value="Guardar" type="submit">
        </form>
    <!-- Form -->
    </div>
@endsection
<!-- Content -->