<?php

namespace App\Http\Controllers;

use Request;


class BlogController extends Controller
{
    public function blogMain(Request $request){
        if ((Request::input("inputEmail") == "123@mail.ru")&&(Request::input("inputPassword") == "1234")){
            return view('blog/blogMain');
        }
        else{
            return redirect() -> back();
        }
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
