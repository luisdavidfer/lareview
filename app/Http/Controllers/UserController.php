<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        return view('user.list', ['usersList'=>$users]); // compact($users) , view()->with(['userList'=>$users])
    }

    public function show($id){
        $usr = User::find($id);
        return view('user.list', ['usr'=>$usr]);
    }

    public function create(){
        return view('user.form');
    }

    public function store(Request $r){
        
        $r->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users,email|max:255',
            'password' => 'required|max:255'
        ]);
        
        $usr = new User();
        $usr->fill($r->all());
        /*
        $usr->name = $r->name;
        $usr->email = $r->email;
        $usr->password = $r->password;
        */
        $usr->save();
        return redirect()->route('user.index');  //  redirect(route('user.list'))
        // ->with(['mensaje'=>'usuario insertado']) para mandar variables
    }

    public function edit($id){
        $data["user"] = User::find($id);
        return view('user.form', $data);
    }

    public function update(Request $r){

        $r->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users,email|max:255',
            'password' => 'required|max:255'
        ]);

        $usr = User::find($r->id);
        // $usr->fill(r->all())
        $usr->name = $r->name;
        $usr->email = $r->email;
        $usr->password = $r->password;
        $usr->save();
        return redirect()->route('user.index');
    }

    public function destroy($id){
        $usr = User::find($id);
        $usr->delete();
        return redirect()->route('user.index');
    }

}
