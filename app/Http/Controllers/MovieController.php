<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;

use App\Movie;
use App\Genre;
use App\Person;

class MovieController extends Controller
{
    /**
     * Controller constructor to instance middleware
     */
    public function __construct()
    {
        $this->middleware('auth')->except('home','show','search');
    }

    /**
     * Display a listing of the resource to be viewed by the guest.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        $movies = Movie::all()->sortByDesc('year');
        $genres = Genre::all()->sortBy('description');
        return view('movie.home', ['moviesList'=>$movies,'genresList'=>$genres]);
    }

    /**
     * Display a listing of the resource to manage them.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies = Movie::all();
        $genres = Genre::all();
        return view('movie.list', ['moviesList'=>$movies,'genresList'=>$genres]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['genres'] = Genre::all();
        $data['people'] = Person::all();
        return view('movie.form', $data);
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
            'title' => 'required|max:255',
            'synopsis' => 'required|max:1024',
            'year' => 'required|digits:4',
            'rating' => 'required|digits_between:1,10',
            'cover' => 'image|mimes:jpeg,jpg,png,gif,svg',
            'external_url' => 'url',
            'filename' => 'required|max:255',
            'actors' => 'array',
            'directors' => 'array',
            'genres' => 'array'
        ]);

        $movie = new Movie($request->all());
        $movie->filepath='/public/movies/';

        /**
         * If request has got an image It will be moved to 
         * covers in public folder and store image name in DB
         */
        if($request->hasFile('cover')){
            $request->file('cover')->move('covers', $request->file('cover')->getClientOriginalName());
            $movie->cover = $request->file('cover')->getClientOriginalName();
        }

        $movie->save();
        $movie->genres()->attach($request->genres);
        $movie->actors()->attach($request->actors);
        $movie->directors()->attach($request->directors);
        return redirect()->route('movie.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $movie = Movie::findOrFail($id);
        return view('movie.show', ['movie'=>$movie]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data["movie"] = Movie::findOrFail($id);
        $data['genres'] = Genre::all();
        $data['people'] = Person::all();
        return view('movie.form', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        // form validation
        $request->validate([
            'title' => 'required|max:255',
            'synopsis' => 'required|max:1024',
            'year' => 'required|digits:4',
            'rating' => 'required|digits_between:1,10',
            'cover' => 'image|mimes:jpeg,jpg,png,gif,svg',
            'external_url' => 'url',
            'filename' => 'required|max:255',
            'actors' => 'array',
            'directors' => 'array',
            'genres' => 'array'
        ]);

        $movie = Movie::findOrFail($id);
        $movie->fill($request->all());

        /**
         * If request has got an image last image will be removed 
         * and the new one will be moved to covers in public folder 
         * and store image name in DB
         */
        if($request->hasFile('cover')){
            File::delete(public_path('/covers/'.$movie->cover));
            $request->file('cover')->move('covers', $request->file('cover')->getClientOriginalName());
            $movie->cover = $request->file('cover')->getClientOriginalName();
        }
            
        $movie->save();
        $movie->genres()->sync($request->genres);
        $movie->actors()->sync($request->actors);
        $movie->directors()->sync($request->directors);
        return redirect()->route('movie.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $movie = Movie::findOrFail($id);
        File::delete(public_path('/covers/'.$movie->cover));
        File::delete(public_path('/movies/'.$movie->filename));
        $movie->genres()->detach();
        $movie->actors()->detach();
        $movie->directors()->detach();
        $movie->delete();
        
        return redirect()->route('movie.index');
    }

    /**
     * Search movies by columns title, synopsis and year
     * @param  \Illuminate\Http\Request  $request
     */
    public function search(Request $request){
        $search = $request->search;
        $genresList = Genre::all()->sortBy('description');;
        $movies = DB::select(DB::raw("SELECT DISTINCT movies.* FROM movies WHERE title LIKE '%$search%' OR synopsis LIKE '%$search%' OR year LIKE '%$search%' ORDER BY movies.year DESC;"));
        return view('movie.home', ['moviesList'=>$movies, 'genresList'=>$genresList]);
    
    }
}

