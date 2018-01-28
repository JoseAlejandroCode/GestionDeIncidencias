<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class UserController extends Controller
{
    public function index(){
    	$users = User::where('role', 1)->get();
    	return view('admin.users.index')->with(compact('users'));
    }

    public function store(Request $request){

    	$rules = [
    		'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8'
    	];

    	$messages = [
    	
    	];

    	$this->validate($request, $rules, $messages);

    	$user = new User();
    	$user->name = $request->input('name');
    	$user->email = $request->input('email');
    	$user->password = bcrypt($request->input('password'));
    	$user->role = 1;
    	$user->save();

    	return back()->with('notification', 'Usuario registrado exitosamente.');
    }

    public function edit($id){
    	$user = User::find($id);
    	return view('admin.users.edit')->with(compact('user'));
    }

    public function update($id, Request $request){

		$rules = [
    		'name' => 'required|string|max:255',
            'password' => 'nullable|min:8'
    	];

    	$messages = [
    	
    	];
		$this->validate($request, $rules, $messages);

    	$user = User::find($id);
    	$user->name = $request->input('name');

    	$password = $request->input('password');
    	if($password){
    		$user->password = bcrypt($password);
    	}

    	$user->save();

    	return back()->with('notification', 'Usuario mofificado exitosamente.');	
    }

    public function delete($id){
        $user = User::find($id);
        $user->delete();

        return back()->with('notification', 'Usuario se ha dado de baja exitosamente.');
    }

}
