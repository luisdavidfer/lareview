<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    /**
     * Controller constructor to instance middleware
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $users = User::all();
        return view('user.list', ['usersList'=>$users,'authId' => Auth::id()]); // compact($users) , view()->with(['userList'=>$users])
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        $usr = User::findOrFail($id);
        $usersList = array($usr);
        return view('user.list', ['usersList'=>$usersList]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        return view('user.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $r){
        
        $r->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users,email|max:255',
            'password' => 'required|max:255'
        ]);
        
        $usr = new User();
        $usr->name = $r->name;
        $usr->email = $r->email;
        $usr->password = Hash::make($r->password);

        $usr->save();
        return redirect()->route('user.index');  //  redirect(route('user.list'))
        // ->with(['mensaje'=>'usuario insertado']) para mandar variables
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        $data["user"] = User::find($id);
        return view('user.form', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $r, $id){

        $usr = User::find($id);
        
        if($usr->email != $r->email){
            $r->validate([
                'name' => 'required|max:255',
                'email' => 'required|email|unique:users,email|max:255',
                'password' => 'required|max:255'
            ]);
        }else{
            $r->validate([
                'name' => 'required|max:255',
                'password' => 'required|max:255'
            ]);
        }
        
        $usr->name = $r->name;
        $usr->email = $r->email;
        $usr->password = Hash::make($r->password);

        $usr->save();
        return redirect()->route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $usr = User::find($id);
        $usr->delete();
        return redirect()->route('user.index');
    }

}
