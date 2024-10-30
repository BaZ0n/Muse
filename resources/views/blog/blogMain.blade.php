@extends('blog/profileLayout')

@section("main_content")

    {{-- Поиск --}}
    <div class="container mx-2 my-5 px-5" style="max-width: fit-content;">
        <div class="input-group mx-5" style="background: #121212; border-radius:50px; min-width: 150%">
            <input id="searchBar" type="search" class="form-control fs-3" placeholder="Поиск" aria-label="Search" aria-describedby="search-addon" style="background: transparent; border:0; border-radius:50px; color:white;">
        </div>
    </div>

    {{-- Сторисы --}}
    <div class="container mx-2 px-5 dragscroll" style="overflow-y: hidden; ">
        <div class="row align-items-center mx-5 px-5" style="justify-content: space-between; text-align: center; display: flex; flex-wrap: nowrap; overflow-x: auto; white-space: nowrap; width:650px; height:400px;">  {{-- При желании можно использовать шрифт Lato( font-family:Lato ) --}}
            <div class="col justify-content-center align-items-center">
                <a href="/post" class="storiesOpen" style="border-radius: 10px">
                    <div class="stories" style="position: relative">
                        <img src="images/storiesOne.jpg" alt="stories1" class="img" style="width:200px; height:300px; border-radius:10px">
                        <div class="container" style="border-radius: 10px; position: absolute; top:0; left:0; background: linear-gradient(rgba(0, 0, 0, 0.8), 50%, rgba(0, 0, 0, 0))">
                            <p id="storiesText1" class="text my-3" style="color:white;">Отдыхаю на природе</p>
                        </div>
                        <div class="container" style="border-radius: 10px; position: absolute; bottom:0; right:0; background: linear-gradient(rgba(0, 0, 0, 0), 60%, rgba(0, 0, 0, 0.8))">
                            <p id="storiesDate1" class="text my-3" style="color:white;">21.09.2020</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col justify-content-center align-items-center">
                <a href="/post" class="storiesOpen" style="border-radius: 10px">
                    <div class="stories" style="position: relative">
                        <img src="images/storiesOne.jpg" alt="stories1" class="img" style="width:200px; height:300px; border-radius:10px">
                        <div class="container" style="border-radius: 10px; position: absolute; top:0; left:0; background: linear-gradient(rgba(0, 0, 0, 0.8), 50%, rgba(0, 0, 0, 0))">
                            <p id="storiesText1" class="text my-3" style="color:white;">Отдыхаю на природе</p>
                        </div>
                        <div class="container" style="border-radius: 10px; position: absolute; bottom:0; right:0; background: linear-gradient(rgba(0, 0, 0, 0), 60%, rgba(0, 0, 0, 0.8))">
                            <p id="storiesDate1" class="text my-3" style="color:white;">21.09.2020</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col justify-content-center align-items-center">
                <a href="/post" class="storiesOpen" style="border-radius: 10px">
                    <div class="stories" style="position: relative">
                        <img src="images/storiesOne.jpg" alt="stories1" class="img" style="width:200px; height:300px; border-radius:10px">
                        <div class="container" style="border-radius: 10px; position: absolute; top:0; left:0; background: linear-gradient(rgba(0, 0, 0, 0.8), 50%, rgba(0, 0, 0, 0))">
                            <p id="storiesText1" class="text my-3" style="color:white;">Отдыхаю на природе</p>
                        </div>
                        <div class="container" style="border-radius: 10px; position: absolute; bottom:0; right:0; background: linear-gradient(rgba(0, 0, 0, 0), 60%, rgba(0, 0, 0, 0.8))">
                            <p id="storiesDate1" class="text my-3" style="color:white;">21.09.2020</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col justify-content-center align-items-center">
                <a href="/post" class="storiesOpen" style="border-radius: 10px">
                    <div class="stories" style="position: relative">
                        <img src="images/storiesOne.jpg" alt="stories1" class="img" style="width:200px; height:300px; border-radius:10px">
                        <div class="container" style="border-radius: 10px; position: absolute; top:0; left:0; background: linear-gradient(rgba(0, 0, 0, 0.8), 50%, rgba(0, 0, 0, 0))">
                            <p id="storiesText1" class="text my-3" style="color:white;">Отдыхаю на природе</p>
                        </div>
                        <div class="container" style="border-radius: 10px; position: absolute; bottom:0; right:0; background: linear-gradient(rgba(0, 0, 0, 0), 60%, rgba(0, 0, 0, 0.8))">
                            <p id="storiesDate1" class="text my-3" style="color:white;">21.09.2020</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col justify-content-center align-items-center">
                <a href="/post" class="storiesOpen" style="border-radius: 10px">
                    <div class="stories" style="position: relative">
                        <img src="images/storiesOne.jpg" alt="stories1" class="img" style="width:200px; height:300px; border-radius:10px">
                        <div class="container" style="border-radius: 10px; position: absolute; top:0; left:0; background: linear-gradient(rgba(0, 0, 0, 0.8), 50%, rgba(0, 0, 0, 0))">
                            <p id="storiesText1" class="text my-3" style="color:white;">Отдыхаю на природе</p>
                        </div>
                        <div class="container" style="border-radius: 10px; position: absolute; bottom:0; right:0; background: linear-gradient(rgba(0, 0, 0, 0), 60%, rgba(0, 0, 0, 0.8))">
                            <p id="storiesDate1" class="text my-3" style="color:white;">21.09.2020</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col justify-content-center align-items-center">
                <a href="/post" class="storiesOpen" style="border-radius: 10px">
                    <div class="stories" style="position: relative">
                        <img src="images/storiesOne.jpg" alt="stories1" class="img" style="width:200px; height:300px; border-radius:10px">
                        <div class="container" style="border-radius: 10px; position: absolute; top:0; left:0; background: linear-gradient(rgba(0, 0, 0, 0.8), 50%, rgba(0, 0, 0, 0))">
                            <p id="storiesText1" class="text my-3" style="color:white;">Отдыхаю на природе</p>
                        </div>
                        <div class="container" style="border-radius: 10px; position: absolute; bottom:0; right:0; background: linear-gradient(rgba(0, 0, 0, 0), 60%, rgba(0, 0, 0, 0.8))">
                            <p id="storiesDate1" class="text my-3" style="color:white;">21.09.2020</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col justify-content-center align-items-center">
                <a href="/post" class="storiesOpen" style="border-radius: 10px">
                    <div class="stories" style="position: relative">
                        <img src="images/storiesOne.jpg" alt="stories1" class="img" style="width:200px; height:300px; border-radius:10px">
                        <div class="container" style="border-radius: 10px; position: absolute; top:0; left:0; background: linear-gradient(rgba(0, 0, 0, 0.8), 50%, rgba(0, 0, 0, 0))">
                            <p id="storiesText1" class="text my-3" style="color:white;">Отдыхаю на природе</p>
                        </div>
                        <div class="container" style="border-radius: 10px; position: absolute; bottom:0; right:0; background: linear-gradient(rgba(0, 0, 0, 0), 60%, rgba(0, 0, 0, 0.8))">
                            <p id="storiesDate1" class="text my-3" style="color:white;">21.09.2020</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col justify-content-center align-items-center">
                <a href="/post" class="storiesOpen" style="border-radius: 10px">
                    <div class="stories" style="position: relative">
                        <img src="images/storiesOne.jpg" alt="stories1" class="img" style="width:200px; height:300px; border-radius:10px">
                        <div class="container" style="border-radius: 10px; position: absolute; top:0; left:0; background: linear-gradient(rgba(0, 0, 0, 0.8), 50%, rgba(0, 0, 0, 0))">
                            <p id="storiesText1" class="text my-3" style="color:white;">Отдыхаю на природе</p>
                        </div>
                        <div class="container" style="border-radius: 10px; position: absolute; bottom:0; right:0; background: linear-gradient(rgba(0, 0, 0, 0), 60%, rgba(0, 0, 0, 0.8))">
                            <p id="storiesDate1" class="text my-3" style="color:white;">21.09.2020</p>
                        </div>
                    </div>
                </a>
            </div>

        </div>
    </div>

    {{-- Панель для написания постов --}}
    {{-- <div class="container mx-2 my-5 px-5" style="max-width: fit-content;">
        <div class="input-group mx-5" style="background: #121212; border-radius:50px; min-width:110%">
            <input id="newPost" type="newPost" class="form-control fs-3" placeholder="Напишите что-нибудь" aria-label="newPost" 
                aria-describedby="newPost-addon" style="background: transparent; border:0; border-radius:50px; color:white;">
            <a href="#" class="barBtn"> <img src="images/photoBTN.png" class="image mx-2 my-2"></a>
            <a href="#" class="barBtn"><img src="images/sendBTN.png" class="image mx-2 my-2"></a>
            
        </div>
    </div> --}}

    <div class="container d-flex justify-content-center align-items-center my-5">
        <a href="/createPost" class="button-primary px-5" style="text-decoration:none">
            <p class="text-center my-3 mx-5 px-5 py-2 fs-4" style="color: black;">Написать пост</p>
        </a>
    </div> 

    {{-- Посты --}}
    
    <ul class="posts-container px-5">
        @foreach ($posts as $post)
        <a class="postRead" href="/post">
            <li id="post" class="postCont">
                <img class="img w-100" src="images/post/{{$post->img_post}}" alt="Image" id="postImage">
                <div class="postText py-2">
                    <h4 id="postTitle">{{$post->title}}</h4>
                    <p id="postContent">{{$post->content}}</p>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-1">
                                <h6 id="postDate" class="text-left">{{$post->date_post}}</h6>
                            </div>
                            <div class="col-2">
                                <h6 id="postAuthor" class="text-left">{{$user->name_first}} {{$user->name_last}}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </a>
        @endforeach
        
        
        
    </ul>
@endsection