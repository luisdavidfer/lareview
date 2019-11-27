@extends('layouts.master')

@isset($user)
    @section('title', 'Update')
    @section('header', 'Update')
@else
    @section('title', 'Insert')
    @section('header', 'Insert')
@endisset

@section('content')

    @isset($user)
        <form method="post" action="{{route('user.update',['id'=>$user->id])}}">
            @method("PUT")
    @else
        <form method="post" action="{{route('user.store')}}">
    @endisset

            @csrf

            Name:<br><input type="text" name="name" value="{{$user->name ?? ''}}">
            @error('name') {{$message}} @enderror<br>
            Email:<br><input type="email" name="email" value="{{$user->email ?? ''}}">
            @error('email') {{$message}} @enderror<br>
            Password:<br><input type="password" name="password" value="{{$user->password ?? ''}}">
            @error('password') {{$message}} @enderror<br><br>

            <input type="submit">
        </form>
@endsection
