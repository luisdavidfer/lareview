<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\Person;
use App\Movie;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $people = Person::all();
        return view('person.list', ['peopleList'=>$people]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['movies'] = Movie::all();
        return view('person.form', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|max:255',
            'photo' => 'image|mimes:jpeg,jpg,png,gif,svg',
            'external_url' => 'url|max:255',
            'act' => 'array',
            'direct' => 'array'
        ]);

        $person = new Person($request->all());
        if($request->hasFile('photo')){
            $request->file('photo')->move('photos', $request->file('photo')->getClientOriginalName());
            $person->photo = $request->file('photo')->getClientOriginalName();
        }
        $person->save();
        $person->act()->attach($request->act);
        $person->direct()->attach($request->direct);
        return redirect()->route('person.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $person = Person::find($id);
        return view('person.list',['person'=>$person]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['person'] = Person::find($id);
        $data['movies'] = Movie::all();
        return view('person.form', $data);
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

        $request->validate([
            'name' => 'required|max:255',
            'photo' => 'image|mimes:jpeg,jpg,png,gif,svg',
            'external_url' => 'url|max:255',
            'act' => 'array',
            'direct' => 'array'
        ]);

        $person = Person::find($id);
        $person->fill($request->all());
        if($request->hasFile('photo')){
            File::delete(public_path('/photos/'.$person->photo));
            $request->file('photo')->move('photos', $request->file('photo')->getClientOriginalName());
            $person->photo = $request->file('photo')->getClientOriginalName();
        }
            
        $person->save();
        $person->act()->sync($request->act);
        $person->direct()->sync($request->direct);
        return redirect()->route('person.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $person = Person::find($id);
        File::delete(public_path('/photos/'.$person->photo));
        $person->act()->detach();
        $person->direct()->detach();
        $person->delete();
        return redirect()->route('person.index');
    }
}
