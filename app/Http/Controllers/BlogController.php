<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use App\Models\Users;
use App\Providers\ActiveUser;
use DB;
use Intervention\Image\ImageManager;
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
                $users->avatar = "avatarBase/profileImage.png";
                $users->save();
                foreach ($users->all() as $user){
                    if($user->email == Request::input("email")){
                        ActiveUser::getInstance()->setUser($user);
                        return redirect()->action([BlogController::class, 'blogMain']);
                    }
                }
            }
        }
        else if ((Request::input('inputPassword') != null)&&(Request::input('inputEmail')!= null)){
            foreach ($users->all() as $user){
                if(($user->email == Request::input("inputEmail"))&&($user->password == Request::input("inputPassword"))){
                    ActiveUser::getInstance()->setUser($user);
                    return redirect()->action([BlogController::class, 'blogMain']);
                }
            }
        }
        else if ((Request::input('inputPassword') == null) && (Request::input("password") == null)){
            return view('blog/blogMain');
        }
        return redirect() -> back();
    }

    public function profile_check(Request $request){
        $useractive = ActiveUser::getInstance()->getUser();
        if (Request::input('userName')!= null){
            $usersName = DB::table('users')-> where('id', $useractive->id) -> update(['name_first' => Request::input('userName')]);
        }
        if (Request::input('userLastName')!= null){
            $usersLastName = DB::table('users')-> where('id', $useractive->id) -> update(['name_last' => Request::input('userLastName')]);
        }
        if (Request::input('dateOB')!= null){
            $usersDate = DB::table('users')-> where('id', $useractive->id) -> update(['birthdate' => Request::input('dateOB')]);
        }
        if ((Request::input('oldPassword')!= null)&&(Request::input('passwordNew')!= null)&&((Request::input('oldPassword'))==$useractive->password)){
            $usersPass = DB::table('users')-> where('id', $useractive->id) -> update(['password' => Request::input('passwordNew')]);
        }
        if (Request::input('statusNew')!= null){
            $usersStatus = DB::table('users')-> where('id', $useractive->id) -> update(['status' => Request::input('statusNew')]);
        }
        if (Request::input('aboutNew')!= null){
            $usersAbout = DB::table('users')-> where('id', $useractive->id) -> update(['about' => Request::input('aboutNew')]);
        }

        if (Request::file('photoFile')!= null){

        $imageManager = new ImageManager(new \Intervention\Image\Drivers\Gd\Driver());

            $image = $imageManager->read(Request::file('photoFile'));

            $imageName = time().'-'.Request::file('photoFile')->getClientOriginalName();
            $destinationPath = public_path('images/avatar/avatarUser/');
            $image->save($destinationPath.$imageName);

            $usersAvatar = DB::table('users')-> where('id', $useractive->id) -> update(['avatar' => "avatarUser/".$imageName]);
        }
        $user = Users::find($useractive->id);
        ActiveUser::getInstance()->setUser($user);
        return redirect() -> back();
    }

    public function profile(Request $request){
        $user = ActiveUser::getInstance()->getUser();
        return view('blog/profile', ['user' => $user]);
    }

    public function post($id){
        
        $user = ActiveUser::getInstance()->getUser();
        $post = DB::table('posts')->leftJoin('users', 'posts.user_id', '=', 'users.id') ->where('posts.id', $id) ->select('posts.*', 'users.name_first as author_name_first', 'users.name_last as author_name_last')->first();
        return view('blog/post', ['user' => $user], ['post' => $post] );
    }
    
    public function news(){
        $user = ActiveUser::getInstance()->getUser();
        $posts = DB::table('posts') ->join('users', 'posts.user_id', '=', 'users.id') ->where('posts.stories', 0) ->orderBy('created_at', 'desc') ->select('posts.*', 'users.name_first as author_name_first', 'users.name_last as author_name_last') ->get();
        return view('blog/news', ['user' => $user], ['posts' => $posts]);
    }

    public function blogMain(){
        
        $user = ActiveUser::getInstance()->getUser();
        $posts = DB::table('posts')->  where('user_id', $user->id)-> where( 'posts.stories', 0) ->orderBy('created_at', 'desc') -> select("*")  -> get();
        
        $stories = DB::table('posts')->  where('user_id', $user->id)-> where( 'posts.stories', 1) ->orderBy('created_at', 'desc') -> select("*") -> get();
        return view('blog/blogMain', ['user'=> $user, 'posts' => $posts, 'stories'=> $stories]);
    }


    public function createPost_check(Request $request){
        $user = ActiveUser::getInstance()->getUser();
        $posts = new Posts();
        
        if ((Request::input("title") != null)&&(Request::input("postContent") != null)){
            $posts->user_id = $user->id;
            $posts->date_post = date("d.m.Y");
            $posts->title = Request::input("title");
            $posts->content = Request::input("postContent");
            

            
            if (Request::file('photoPostFile')!= null){

                $imagePostManager = new ImageManager(new \Intervention\Image\Drivers\Gd\Driver());
        
                    $imagePost = $imagePostManager->read(Request::file('photoPostFile'));
        
                    $imagePostName = time().'-'.Request::file('photoPostFile')->getClientOriginalName();
                    $destinationPostPath = public_path('images/post/');
                    $imagePost->save($destinationPostPath.$imagePostName);

                    $posts->img_post = $imagePostName;
            }
            
            $posts->save();    
        }
        return redirect()->action([BlogController::class, 'blogMain']);

    }

    public function createPost(){
        $user = ActiveUser::getInstance()->getUser();
        return view('blog/createPost', ['user'=> $user]);
    }

    public function createStories_check(){
        $user = ActiveUser::getInstance()->getUser();
        $posts = new Posts();

        if ((Request::file('photoStoriesFile')!= null)){
            $posts->user_id = $user->id;
            $posts->date_post = date("d.m.Y");
            if (Request::input("titleStories") != null){
                $posts->title = Request::input("titleStories");
            }
            else {
                $posts->title = "";
            }
            $posts->content = "";
            $posts->stories = true;

            $imageStoriesManager = new ImageManager(new \Intervention\Image\Drivers\Gd\Driver());
        
            $imageStories = $imageStoriesManager->read(Request::file('photoStoriesFile'));
        
            $imageStoriesName = time().'-'.Request::file('photoStoriesFile')->getClientOriginalName();
            $destinationStorisePath = public_path('images/post/');
            $imageStories->save($destinationStorisePath.$imageStoriesName);

            $posts->img_post = $imageStoriesName;
            
            $posts->save();    
        }
        return redirect()->action([BlogController::class, 'blogMain']);

    }

    public function createStories(){
        $user = ActiveUser::getInstance()->getUser();
        return view('blog/createStories', ['user'=> $user]);
    }
}
