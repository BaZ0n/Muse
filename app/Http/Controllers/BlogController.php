<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Request;


class BlogController extends Controller
{
    public function blogMain(Request $request){
        $users = new Users();
        if ((Request::input("password") == Request::input("passwordRepeat"))&& (Request::input("password") != null)){
            $flag = false;
            foreach ($users->all() as $user){
                if($user->email == Request::input("email")){
                    $flag = true;
                }
            }
            if(!$flag){
                $users->name_first = Request::input("userName"); 
                $users->name_last = Request::input("userLastName");
                $users->email = Request::input("email");
                $users->password = Request::input("password");
                $users->birthdate = Request::input("dateOB");
                $users->save();
                foreach ($users->all() as $user){
                    if($user->email == Request::input("email")){
                        return view('blog/blogMain', ['user' => $user]);
                    }
                }
            }
            return redirect() -> back();
        }

        foreach ($users->all() as $user){
            if(($user->email == Request::input("inputEmail"))&&($user->password == Request::input("inputPassword"))){
                return view('blog/blogMain', ['user' => $user]);
            }
        }
        return redirect() -> back();
    }

    public function profile(){
        return view('blog/profile');
    }

    public function post(){
        return view('blog/post');
    }
    
    public function news(){
        return view('blog/news');
    }
}
