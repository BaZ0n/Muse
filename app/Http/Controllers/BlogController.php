<?php

namespace App\Http\Controllers;

use App\Models\Users;
use App\Providers\ActiveUser;
use Request;


class BlogController extends Controller
{
    
    public function blogMainPost(Request $request){
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
                        ActiveUser::getInstance()->setUser($user);
                        return view('blog/blogMain', ['user' => $user]);
                    }
                }
            }
        }
        else if ((Request::input('inputPassword') != null)&&(Request::input('inputEmail')!= null)){
            foreach ($users->all() as $user){
                if(($user->email == Request::input("inputEmail"))&&($user->password == Request::input("inputPassword"))){
                    ActiveUser::getInstance()->setUser($user);
                    return view('blog/blogMain', ['user' => $user]);
                }
            }
        }
        else if ((Request::input('inputPassword') == null) && (Request::input("password") == null)){
            return view('blog/blogMain');
        }
        return redirect() -> back();
    }

    public function profile(Request $request){
        $user = ActiveUser::getInstance()->getUser();
        return view('blog/profile', ['user' => $user]);
    }

    public function post(){
        $user = ActiveUser::getInstance()->getUser();
        return view('blog/post', ['user' => $user]);
    }
    
    public function news(){
        $user = ActiveUser::getInstance()->getUser();
        return view('blog/news', ['user' => $user]);
    }

    public function blogMain(){
        $user = ActiveUser::getInstance()->getUser();
        return view('blog/blogMain', ['user'=> $user]);
    }
}
