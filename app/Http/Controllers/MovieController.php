<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


use App\Movie;
use App\Genre;
use App\Person;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies = Movie::all();
        return view('movie.list', ['moviesList'=>$movies]);
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
        /*
        $movie->title = $request->title;
        $movie->rating = $request->rating;
        $movie->year = $request->year;
        $movie->filename = $request->filename;
        $movie->filepath = $request->filepath;
        $movie->external_url = $request->external_url;
        $movie->update();
        */

        $request->validate([
            'title' => 'required|max:255',
            'year' => 'required|digits:4',
            'rating' => 'required|digits_between:1,10',
            'cover' => 'image|mimes:jpeg,jpg,png,gif,svg',
            'external_url' => 'url|max:255',
            'filepath' => 'required|max:255',
            'filename' => 'required|max:255',
            'actors' => 'array',
            'directors' => 'array',
            'genres' => 'array'
        ]);

        $movie = new Movie($request->all());
        
        // cover
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
        $movie = Movie::find($id);
        return view('movie.list', ['movie'=>$movie]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data["movie"] = Movie::find($id);
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

        $request->validate([
            'title' => 'required|max:255',
            'year' => 'required|digits:4',
            'rating' => 'required|digits_between:1,10',
            'cover' => 'image|mimes:jpeg,jpg,png,gif,svg',
            'external_url' => 'url|max:255',
            'filepath' => 'required|max:255',
            'filename' => 'required|max:255',
            'actors' => 'array',
            'directors' => 'array',
            'genres' => 'array'
        ]);

        $movie = Movie::find($id);
        $movie->fill($request->all());

        // cover
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
        $movie = Movie::find($id);
        File::delete(public_path('/covers/'.$movie->cover));
        
        $movie->genres()->detach();
        $movie->actors()->detach();
        $movie->directors()->detach();
        $movie->delete();
        
        return redirect()->route('movie.index');
    }
}
