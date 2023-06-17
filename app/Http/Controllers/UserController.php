<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function create(){
        return view('users.registration');
    }
		public function store(Request $request){

			$validated = $request->validate([
        'user_name' => 'required|unique:users|max:255',
        'user_email' => 'required|unique:users|max:255',
		'password'=>'required|confirmed|min:6'
    ]);
			$validated['password']= bcrypt($validated['password']);
			$user=User::create($validated);
			auth()->login($user);
			return redirect('/')->with('message','User created and logged in');
		}
		public function login(){
			return view ('users.login');
		}
		public function authentication(Request $request){
			$validated = $request->validate([
                'user_name' => 'required',
				'password'=>'required'
    	    ]);

			if(auth()->attempt($validated)){

				$request->session()->regenerate();
				return redirect('/')->with('message','You are now logged in');
			}

			return back()->withErrors(['user_name'=>'Invalid credentials'])->onlyInput('user_name');
		}
		public function logout (Request $request){
			auth()->logout();
			return redirect('/')->with('message','User logged out');

		}
}
