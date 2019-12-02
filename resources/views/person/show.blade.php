@extends('layouts/master')

    @section('title', 'La review - '.$person->name)

@section('content')

    <div class="container">
        <div class="row my-5">
            <div class="col-md-6 col-12 mx-md-0">
                <img style="width:300px;height:400px;display:block;margin:0 auto" src="{{url('photos/'.$person->photo)}}" title="{{$person->name}}" alt="{{basename($person->photo)}}"></a>
            </div>
            <div class="col-md-6 col-12 mx-md-0  align-items-center">
                <h1 class="text-primary my-md-2 mt-5 ">{{$person->name}} <a href="{{$person->external_url}}" class="text-info"> <span style="font-size:15px">Más información</span></a>
                    @auth
                        <form style="display:contents" action = "{{route('person.destroy', $person->id)}}" method="POST">
                            @csrf
                            @method("DELETE")
                            <button title="Eliminar" type="submit" class="float-right ml-2 my-3 p-2 btn btn-warning"><i class="lni-trash"></i></button>
                        </form>
                        <form style="display:contents" action = "{{route('person.edit', $person->id)}}" method="GET">
                            @csrf
                            <button title="Modificar" type="submit" class="float-right my-3 p-2 btn btn-success"><i class="lni-pencil"></i></button>    
                        </form>      
                    @endauth
                </h1>
            @if (count($person->direct)>=1) 
                <span>Ha dirigido</span>
                <div class="row">
                    @foreach ($person->direct as $movie)
                        <div class="col-md-2 col-sm-3 col-4 mx-2">
                            <a href="{{url('movie/'.$movie->id)}}"><img style="width:100px;height:150px;display:block;margin:10px auto" src="{{url('covers/'.$movie->cover)}}" title="{{$movie->title}}" alt="{{basename($movie->cover)}}"></a>
                        </div>
                    @endforeach
                </div>
            @endif
                        
        
            @if (count($person->act)>=1)
                <span>Ha actuado en</span>
                <div class="row">
                    @foreach ($person->act as $movie)
                        <div class="col-2 mx-2">
                            <a href="{{url('movie/'.$movie->id)}}"><img style="width:100px;height:150px;display:block;margin:10px auto" src="{{url('covers/'.$movie->cover)}}" title="{{$movie->title}}" alt="{{basename($movie->cover)}}"></a>
                        </div>
                    @endforeach
                </div>
            @endif
            </div>
        </div>
    </div>
@endsection