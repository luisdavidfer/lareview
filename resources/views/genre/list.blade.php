@extends('layouts/master')

@section('title', 'La review - Géneros')


@section('content')


<div class="container-fluid">
        <div class="row">
            <div class="col-12">
               <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <th>Id</th>
                            <th>Descripción</th>
                            <th colspan="2"><button title="Añadir" class="btn btn-primary p-2" onclick="location.href='{{route('genre.create')}}'"><i class="lni-plus"></i></button></th>
                        </tr>
                        @foreach ($genresList as $genre)
                            <tr>
                                <td>{{$genre->id}}</td>
                                <td><a href="{{route('genre.show', $genre->id)}}">{{$genre->description}}</a></td>
                                <td>
                                    <form action = "{{route('genre.edit', $genre->id)}}" method="GET">
                                        @csrf
                                        <button title="Modificar" type="submit" class="my-auto p-2 btn btn-success"><i class="lni-pencil"></i></button>
                                    </form>
                                </td>
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
            </div> 
        </div>
</div>
      






<div class="modal fade" id="genreModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header border-bottom-0">
                  <h5 class="modal-title text-primary">Añadir género</h5>
                  <button type="button" class="close" data-dismiss="modal">
                    <i class="lni-close"></i>
                  </button>
                </div>
                <form enctype="multipart/form-data" method="post" action="{{route('genre.store')}}">
                    @csrf
                  <div class="modal-body">
                    <div class="form-group">
                        Descripción
                        <input class="form-control"  type="text" name="description" maxlength="255">
                        @error('description') {{$message}} @enderror
                    </div>
                  </div>
                  <div class="modal-footer border-top-0 d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                  </div>
                </form>
            </div>
        </div>
    </div>





@endsection
