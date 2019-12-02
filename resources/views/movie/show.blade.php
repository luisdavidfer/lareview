@extends('layouts/master')

    @section('title', 'La review - '.$movie->title)

@section('content')

    <div class="container">
        <div class="row my-5">
            <div class="col-md-6 col-12 mx-md-0">
                <img style="width:300px;height:400px;display:block;margin:0 auto" src="{{url('covers/'.$movie->cover)}}" title="{{$movie->title}}" alt="{{basename($movie->cover)}}"></a>
            </div>
            <div class="col-md-6 col-12 mx-md-0">
                <h1 class="text-primary my-md-2 mt-5 ">{{$movie->title}} 
                    <span style="font-size:15px"><a class="text-secondary" href="{{url('/search?search='.$movie->year)}}">{{$movie->year}}</a></span>
                </h1>
                
                <div class="my-2 col-12" title="{{$movie->rating}}/10">
                    @for ($i = 0; $i < $movie->rating; $i++)
                        <i class="text-warning lni-star-filled"></i>
                    @endfor
                    @for ($i = $movie->rating; $i < 10; $i++)
                        <i class="text-warning lni-star"></i>
                    @endfor
                    
                </div>

                <p class="text-body">{{$movie->synopsis}}  <a href="{{$movie->external_url}}" class="text-info">Más información</a></p>
        
                <p>
                    @if (count($movie->genres)>=1)
                    <span>Géneros</span>
                        @foreach ($movie->genres as $genre)
                            <a href="{{url('genre/'.$genre->id)}}" class="text-secondary">{{$genre->description}}</a>
                        @endforeach
                    @endif
                </p>
                        
                <p>
                    @if (count($movie->directors)>=1)
                    <span>Dirección</span>
                        @foreach ($movie->directors as $director)
                            <a href="{{url('person/'.$director->id)}}" class="text-secondary">{{$director->name}}</a>
                        @endforeach
                    @endif
                </p>

                <p>
                    @if (count($movie->actors)>=1)
                    <span>Reparto</span>
                        @foreach ($movie->actors as $actor)
                            <a href="{{url('person/'.$actor->id)}}" class="text-secondary">{{$actor->name}}</a>
                        @endforeach
                    @endif
                </p>

                <a href="#movie"><button id="play" class="my-3 btn btn-danger">Reproducir</button></a>
                @auth
                    <form style="display:contents" action = "{{route('movie.destroy', $movie->id)}}" method="POST">
                        @csrf
                        @method("DELETE")
                        <button title="Eliminar" type="submit" class="float-right ml-2 my-3 p-2 btn btn-warning"><i class="lni-trash"></i></button>
                    </form>
                    <form style="display:contents" action = "{{route('movie.edit', $movie->id)}}" method="GET">
                        @csrf
                        <button title="Modificar" type="submit" class="float-right my-3 p-2 btn btn-success"><i class="lni-pencil"></i></button>    
                    </form>
                @endauth
            </div>
        </div>
        <div id="movie" style="display:none" class="embed-responsive embed-responsive-16by9">
            <video controls src="{{url('movies/'.$movie->filename)}}"></video>
        </div>
        @if (count($movie->related(4)) > 0)
            <h2 class="text-primary my-2">Películas relacionadas</h2>
            
            <div class="row align-items-center">
                @foreach ($movie->related(4) as $relatedMovie)
                <div class="col-lg-3 col-sm-6 col-12">     
                    <a href="{{url('movie/'.$relatedMovie->id)}}"><img style="width:200px;height:300px;display:block;margin:20px auto" src="{{url('covers/'.$relatedMovie->cover)}}" title="{{$relatedMovie->title}}" alt="{{basename($relatedMovie->cover)}}"></a>
                </div>    
                @endforeach
            </div>
        @endif
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function(){
            $("#play").click(function(event){
                $("#movie").show();
                $("video")[0].play();
            });
        });
    </script>
@endsection