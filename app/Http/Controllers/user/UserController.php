<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //

    public function UserIndex()
    {
        return view('user.main.index');
    }
    public function UserSignup()
    {
        return view('user.control.signup');
    }
    public function UserLogin()
    {
        return view('user.control.login');
    }


    public function UserSection()
    {
        $store = DB::table('items')
        ->select('*')
        ->get();
        return view('user.body.section',compact('store'));
    }
    public function UserAuthentication(Request $request)
    {

        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        //single user or row selection
        if (Auth::attempt($credentials)) {
            // only for sensitive data that not allowed to load
            // $request->session()->regenerate();
            // $data = $request->user()->id;
            // $RowData = user::find($data);
            if ($request->user()->role == 'admin') {
                return redirect()->route('admin.panel');


            } elseif ($request->user()->role == 'user') {
                return view('user.main.index');
            }

        }
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');


    }
  
}
