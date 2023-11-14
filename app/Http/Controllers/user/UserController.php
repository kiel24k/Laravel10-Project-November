<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    public function UserIndex(){
        return view('user.main.index');
    }
    public function UserSignup(){
        return view('user/control/signup');
    }
    public function UserLogin(){
        return view('user/control/login');
    }
    public function UserSection(){
        return view('user/body/section');
    }
}
