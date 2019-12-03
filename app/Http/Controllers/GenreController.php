<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Genre;
use Illuminate\Support\Facades\DB;

class GenreController extends Controller
{

    /**
     * Controller constructor to instance middleware
     */
    public function __construct()
    {
        $this->middleware('auth')->except('show');
    }

    /**
     * Display a listing of the resource to manage them.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $genres = Genre::all();
        return view('genre.list', ['genresList'=>$genres]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('genre.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // form validation
        $request->validate([
            'description' => 'required|unique:genres,description|max:255'
        ]);
        $genre = new Genre($request->all());
        $genre->save();
        return redirect()->route('genre.index');
    }

    /**
     * Display the movies of the specified genre.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $genresList = Genre::all()->sortBy('description');
        $movies = DB::select(DB::raw("SELECT DISTINCT movies.* FROM movies INNER JOIN genres_movies ON movies.id = genres_movies.movie_id WHERE genres_movies.genre_id = $id ORDER BY movies.year DESC"));
        return view('movie.home', ['moviesList'=>$movies, 'genresList'=>$genresList]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data["genre"] = Genre::findOrFail($id);
        return view('genre.form', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $genre = Genre::findOrFail($id);
        // form validation
        if($genre->description != $request->description){
            $request->validate([
                'description' => 'required|unique:genres,description|max:255'
            ]);
        }
        $genre->fill($request->all());
        $genre->save();
        return redirect()->route('genre.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $genre = Genre::findOrFail($id);
        $genre->delete();
        return redirect()->route('genre.index');
    }
}
