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
    public function login_check(Request $request){
        dd(Request::input());
    }

    public function registration(){
        return view('loginsignin/registration');
    }

    public function registrationCode(){
        return view('loginsignin/registrationCode');
    }

    public function registrationMain(){
        return view('loginsignin/registrationMain');
    }
}
