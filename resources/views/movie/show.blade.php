@extends('layouts/master')

<!-- Title -->
@section('title', 'La review - '.$movie->title)

<!-- Content -->
@section('content')

    <div class="container">
        <div class="row my-5">
            <!-- Cover -->
            <div class="col-md-6 col-12 mx-md-0">
                <img style="width:300px;height:400px;display:block;margin:0 auto" src="{{url('covers/'.$movie->cover)}}" title="{{$movie->title}}" alt="{{basename($movie->cover)}}"></a>
            </div>

            <!-- Movie info -->
            <div class="col-md-6 col-12 mx-md-0">
                <!-- Title, year -->
                <h1 class="text-primary my-md-2 mt-5 ">{{$movie->title}} 
                    <span style="font-size:15px"><a class="text-secondary" href="{{url('/search?search='.$movie->year)}}">{{$movie->year}}</a></span>
                </h1>
                <!-- Rating -->
                <div class="my-2 col-12" title="{{$movie->rating}}/10">
                    @for ($i = 0; $i < $movie->rating; $i++)
                        <i class="text-warning lni-star-filled"></i>
                    @endfor
                    @for ($i = $movie->rating; $i < 10; $i++)
                        <i class="text-warning lni-star"></i>
                    @endfor
                    
                </div>
                <!-- Synopsis, external info -->
                <p class="text-body">{{$movie->synopsis}}  <a href="{{$movie->external_url}}" class="text-info">Más información</a></p>
                
                <!-- Genres -->
                @if (count($movie->genres)>=1)
                    <p>
                        <span>Géneros</span>
                        @foreach ($movie->genres as $genre)
                            <a href="{{url('genre/'.$genre->id)}}" class="text-secondary">{{$genre->description}}</a>
                        @endforeach
                    </p>
                @endif
                
                <!-- Directors -->    
                @if (count($movie->directors)>=1)
                    <p>
                        <span>Dirección</span>
                        @foreach ($movie->directors as $director)
                            <a href="{{url('person/'.$director->id)}}" class="text-secondary">{{$director->name}}</a>
                        @endforeach
                    </p>
                @endif

                <!-- Actors -->
                @if (count($movie->actors)>=1)
                    <p>
                        <span>Reparto</span>
                        @foreach ($movie->actors as $actor)
                            <a href="{{url('person/'.$actor->id)}}" class="text-secondary">{{$actor->name}}</a>
                        @endforeach
                    </p>
                @endif

                <!-- Play button -->
                <a href="#movie"><button id="play" class="my-3 btn btn-danger">Reproducir</button></a>
                @auth
                    <!-- Delete button -->
                    <form style="display:contents" action = "{{route('movie.destroy', $movie->id)}}" method="POST">
                        @csrf
                        @method("DELETE")
                        <button onclick="return confirm('¿Estás seguro de eliminar la película {{$movie->title}}?')" title="Eliminar" type="submit" class="float-right ml-2 my-3 p-2 btn btn-warning"><i class="lni-trash"></i></button>
                    </form>
                    <!-- Modification button -->
                    <form style="display:contents" action = "{{route('movie.edit', $movie->id)}}" method="GET">
                        @csrf
                        <button title="Modificar" type="submit" class="float-right my-3 p-2 btn btn-success"><i class="lni-pencil"></i></button>    
                    </form>
                @endauth
            </div>
            <!-- Movie info -->
        </div>
        
        <!-- Video player -->
        <div id="movie" style="display:none" class="embed-responsive embed-responsive-16by9">
            <video controls src="{{url('movies/'.$movie->filename)}}"></video>
        </div>

        <!-- Related movies -->
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
<!-- Content -->

<!-- Scripts -->
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
<!-- Scripts -->