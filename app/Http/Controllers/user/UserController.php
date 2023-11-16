<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //

    public function UserIndex(){
        return view('user.main.index');
    }
    public function UserSignup(){
        return view('user.control.signup');
    }
    public function UserLogin(){
        return view('user.control.login');
    }
    public function UserSection(){
        return view('user.body.section');
    }
    public function UserAuthentication (Request $request){

         $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required'
         ]);
         if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            $id = Auth::user()->id;
            $profileData = User::find($id);
            return view('random', compact('profileData'));
        }
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');

    }

}
