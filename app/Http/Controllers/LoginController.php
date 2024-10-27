<?php

namespace App\Http\Controllers;

use Request;


class LoginController extends Controller
{
    public function welcome(){
        return view('loginsignin/welcome');
    }

    public function login(){
        return view('loginsignin/login');
    }

    public function registrationMain(){
        return view('loginsignin/registrationMain');
    }
}
