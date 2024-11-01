@extends('blog/profileLayout')

@section("main_content")

    {{-- Поиск --}}
    <div class="searchBarContainer mx-2 my-5 px-5" style="max-width: fit-content;">
        <form method="GET"  action="blogMain">
            <div class="input-group mx-4" style="background: #121212; border-radius:50px; min-width: 690px; max padding-left:10px">
                @csrf
                <input id="searchBar" name="searchBar" type="text" class="form-control fs-3" placeholder="Поиск" aria-label="Search" aria-describedby="search-addon" style="padding-right:0; background: transparent; border:0; border-radius:50px; color:white;">
                <button type="submit" class="searchBTN" style="padding-right:20px; background-color:transparent; border: 0">
                    <img src="{{ asset('images/search_icon.png') }}" class="image mx-2 my-2" style="width: 30.63px; height:31px">
                </button>
            </div>
        </form>
    </div>

    {{-- Сторисы --}}
    <div class="container mx-2 px-5" style="overflow-y: hidden;">
        <div class="row align-items-center mx-3 px-2" style="justify-content: space-between; text-align: center; display: flex; flex-wrap: nowrap; overflow-x: auto; white-space: nowrap; max-width:732px; max-height:420px;">  {{-- При желании можно использовать шрифт Lato( font-family:Lato ) --}}
            <a href="/createStories" class="storiesBtn" style="text-decoration:none; width: fit-content; height:fit-content;">
                <img src="{{ asset('images/plus-icon.png') }}" style="width: 50px; height:50px;">
            </a>

            @foreach ($stories as $postStories)
            <div class="col my-5" style="width: fit-content">
                <a href="/post/{{$postStories->id}}" class="storiesOpen" style="border-radius: 10px;">
                    <div class="stories" style="position: relative">
                        <img src="images/post/{{$postStories->img_post}}" alt="stories1" class="img" style="width:200px; height:300px; object-fit:cover; border-radius:10px">
                        <div class="container" style="border-radius: 10px; position: absolute; top:0; left:0; background: linear-gradient(rgba(0, 0, 0, 0.8), 50%, rgba(0, 0, 0, 0))">
                            <p id="storiesText1" class="text my-3" style="color:white;">{{$postStories->title}}</p>
                        </div>
                        <div class="container" style="border-radius: 10px; position: absolute; bottom:0; right:0; background: linear-gradient(rgba(0, 0, 0, 0), 60%, rgba(0, 0, 0, 0.8))">
                            <p id="storiesDate1" class="text my-3" style="color:white;">{{$postStories->date_post}}</p>
                        </div>
                    </div>
                </a>
            </div>
            
            @endforeach
        </div>
        
    </div>

    {{-- Панель для написания постов --}}
    <div class="container mx-2 my-5 px-5" style="max-width: fit-content;">
        <a href="/createPost" class="barBtn" style="text-decoration:transparent">
            <div class="container mx-3" style="background: #121212; border-radius:50px; min-width: 720px; display:flex; justify-content:space-between">
                {{-- <input id="newPost" type="newPost" class="form-control fs-3" placeholder="Напишите что-нибудь" aria-label="newPost" 
                    aria-describedby="newPost-addon" style="background: transparent; border:0; border-radius:50px; color:white;"> --}}
                <p class="text fs-3 my-2 px-3">Напишите что-нибудь</p>
                <img src="images/newPostIcon.png" class="image mx-2 my-2" style="border-radius: 50%">
                
            </div>
        </a>
    </div>

    {{-- Посты --}}
    
    <ul class="posts-container px-5">
        @foreach ($posts as $post)
        <a class="postRead" href="/post/{{$post->id}}">
            <li id="post" class="postCont">
                @if ($post->img_post != null)
                    <img class="img w-100" src="images/post/{{$post->img_post}}" alt="Image" id="postImage">
                    <div class="postText py-2">
                        <h3 id="postTitle">{{$post->title}}</h4>
                        <p id="postContent" class="text text-truncate">{!! Str::limit($post->content, 255, '...') !!}</p>
                        <div class="bottom-cont">
                            <h6 id="postDate" class="text">{{$post->date_post}}</h6>
                            <h6 id="postAuthor" class="text">{{$user->name_first}} {{$user->name_last}}</h6>
                        </div>
                    </div>
                @else
                    <div class="postText py-2" style="border-radius: 15px">
                        <h3 id="postTitle">{{$post->title}}</h4>
                        <p id="postContent" class="text-truncate">{!! Str::limit($post->content, 255, '...') !!}</p>
                        <div class="bottom-cont">
                            <h6 id="postDate" class="text">{{$post->date_post}}</h6>
                            <h6 id="postAuthor" class="text">{{$user->name_first}} {{$user->name_last}}</h6>
                        </div>
                    </div>
                @endif
                
            </li>
        </a>
        @endforeach
        
        
        
    </ul>
    

@endsection
