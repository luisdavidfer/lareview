<!-- Modals -->
<div class="modal fade" id="movieModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header border-bottom-0">
              <h5 class="modal-title text-primary">Añadir película</h5>
              <button type="button" class="close" data-dismiss="modal">
                <i class="lni-close"></i>
              </button>
            </div>
            <form enctype="multipart/form-data" method="post" action="{{route('movie.store')}}">
                @csrf
              <div class="modal-body">
                <div class="form-group">
                    Título
                    <input class="form-control"  type="text" name="title" maxlength="255">
                    @error('title') {{$message}} @enderror
                </div>
                <div class="form-group">
                    Sinopsis
                    <input class="form-control" type="text" name="synopsis"maxlength="1024">
                    @error('synopsis') {{$message}} @enderror
                </div>
                <div class="form-group">
                    Géneros
                    <select class="form-control" name="genres[]" multiple>
                        @foreach ($genresList as $genre)
                            <option value="{{$genre->id}}">{{$genre->description}}</option> 
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    Actores
                    <select class="form-control" name="actors[]" multiple>
                        @foreach ($peopleList as $person)
                            <option value="{{$person->id}}">{{$person->name}}</option> 
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    Directores
                    <select class="form-control" name="directors[]" multiple>
                        @foreach ($peopleList as $person)
                            <option value="{{$person->id}}">{{$person->name}}</option> 
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    Año
                    <input class="form-control" type="number" min="1900" name="year">
                    @error('year') {{$message}} @enderror
                </div>
                <div class="form-group">
                    Puntuación
                    <input class="form-control" type="number" min="1" max="10" name="rating">
                    @error('rating') {{$message}} @enderror
                </div>
                <div class="form-group">
                    Portada
                    <input class="form-control" type="file" name="cover">
                    @error('cover') {{$message}} @enderror
                </div>
                <div class="form-group">
                    Ruta externa (metadatos)
                    <input class="form-control" type="text" name="external_url">
                    @error('external_url') {{$message}} @enderror
                </div>
                <div class="form-group">
                    Nombre del archivo
                    <input class="form-control" type="text" name="filename">
                    @error('filename') {{$message}} @enderror
                </div>
                <div class="form-group">
                    Ruta del archivo
                    <input class="form-control" type="text" name="filepath">
                    @error('filepath') {{$message}} @enderror
                </div>
              </div>
              <div class="modal-footer border-top-0 d-flex justify-content-center">
                <button type="submit" class="btn btn-primary">Guardar</button>
              </div>
            </form>
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
<div class="modal fade" id="userModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header border-bottom-0">
              <h5 class="modal-title text-primary">Añadir usuario</h5>
              <button type="button" class="close" data-dismiss="modal">
                <i class="lni-close"></i>
              </button>
            </div>
            <form enctype="multipart/form-data" method="post" action="{{route('user.store')}}">
                @csrf
              <div class="modal-body">
                <div class="form-group">
                    Nombre
                    <input class="form-control"  type="text" name="name" maxlength="255">
                    @error('name') {{$message}} @enderror
                </div>
                <div class="form-group">
                    Correo electrónico
                    <input class="form-control"  type="email" name="email" maxlength="255">
                    @error('email') {{$message}} @enderror
                </div>
                <div class="form-group">
                    Contraseña
                    <input class="form-control"  type="password" name="password" maxlength="255">
                    @error('password') {{$message}} @enderror
                </div>
              </div>
              <div class="modal-footer border-top-0 d-flex justify-content-center">
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </form>
    </div>
</div>
</div>
<div class="modal fade" id="personModal" tabindex="-1">
<div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
        <div class="modal-header border-bottom-0">
              <h5 class="modal-title text-primary">Añadir persona</h5>
              <button type="button" class="close" data-dismiss="modal">
                <i class="lni-close"></i>
              </button>
            </div>
            <form enctype="multipart/form-data" method="post" action="{{route('person.store')}}">
                @csrf
              <div class="modal-body">
                <div class="form-group">
                    Nombre completo
                    <input class="form-control"  type="text" name="name" maxlength="255">
                    @error('name') {{$message}} @enderror
                </div>
                <div class="form-group">
                    Fotografía
                    <input class="form-control" type="file" name="photo">
                    @error('photo') {{$message}} @enderror
                </div>

                <div class="form-group">
                    Actúa en
                    <select class="form-control" name="act[]" multiple>
                        @foreach ($moviesList as $movie)
                            <option value="{{$movie->id}}">{{$movie->title}}</option> 
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    Ha dirigido
                    <select class="form-control" name="direct[]" multiple>
                        @foreach ($moviesList as $movie)
                            <option value="{{$movie->id}}">{{$movie->title}}</option> 
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    Ruta externa (metadatos)
                    <input class="form-control" type="text" name="external_url">
                    @error('external_url') {{$message}} @enderror
                </div>
              <div class="modal-footer border-top-0 d-flex justify-content-center">
                <button type="submit" class="btn btn-primary">Guardar</button>
              </div>
        </form>
    </div>
</div>
</div>
  <!-- Modals -->