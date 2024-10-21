@extends('blog/profileLayout')

@section("main_content")

    {{-- Поиск --}}
    <div class="container mx-2 my-5 px-5">
        <div class="input-group w-auto mx-5" style="background: #121212; border-radius:50px">
            <input id="searchBar" type="search" class="form-control fs-3" placeholder="Поиск" aria-label="Search" aria-describedby="search-addon" style="background: transparent; border:0; border-radius:50px; color:white;">
        </div>
    </div>

    {{-- Сторисы --}}
    <div class="container mx-2 px-5">
        <div class="row align-items-center mx-5 px-5" style="justify-content: space-between; text-align: center;">  {{-- При желании можно использовать шрифт Lato( font-family:Lato ) --}}
            <div class="col-4 justify-content-center align-items-center">
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
            {{-- <div class="col-4">
                <div class="container" style="position: relative">
                    <img src="images/storiesTwo.jpg" alt="stories2" class="rounded" style="width:200px; height:300px; border-radius:5%">
                    <div class="container" style="position: absolute; top:0; left:0; background: linear-gradient(rgba(0, 0, 0, 0.8), 50%, rgba(0, 0, 0, 0))">
                        <p id="storiesText2" class="text my-3" style="color:white; ">Заканчиваю сложный проект</p>
                    </div>
                    <div class="container" style="position: absolute; bottom:0; right:0; background: linear-gradient(rgba(0, 0, 0, 0), 60%, rgba(0, 0, 0, 0.8))">
                        <p id="storiesDate2" class="text my-3" style="color:white;">15.09.2020</p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="container" style="position: relative">
                    <img src="images/storiesThree.jpg" alt="stories3" class="rounded" style="width:200px; height:300px; border-radius:5%">
                    <div class="container" style="position: absolute; top:0; left:0; background: linear-gradient(rgba(0, 0, 0, 0.8), 50%, rgba(0, 0, 0, 0))">
                        <p id="storiesText3" class="text my-3" style="color:white;">Переехал в новую квартиру</p>
                    </div>
                    <div class="container" style="position: absolute; bottom:0; right:0; background: linear-gradient(rgba(0, 0, 0, 0), 60%, rgba(0, 0, 0, 0.8))">
                        <p id="storiesDate3" class="text my-3" style="color:white;">11.09.2020</p>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>

    {{-- Панель для написания постов --}}
    <div class="container mx-2 my-5 px-5">
        <div class="input-group w-auto mx-5" style="background: #121212; border-radius:50px">
            <input id="newPost" type="newPost" class="form-control fs-3" placeholder="Напишите что-нибудь" aria-label="newPost" 
                aria-describedby="newPost-addon" style="background: transparent; border:0; border-radius:50px; color:white;">
            <a href="#" class="barBtn"> <img src="images/photoBTN.png" class="image mx-2 my-2"></a>
            <a href="#" class="barBtn"><img src="images/sendBTN.png" class="image mx-4 my-2"></a>
        </div>
    </div>

    {{-- Посты --}}
    
    <ul class="posts-container">

        <a class="postRead" href="/post">
            <li id="post" class="postCont">
                <img class="img w-100" src="images/background.png" alt="Image" id="postImage">
                <div class="postText py-2">
                    <h4 id="postTitle">Как писать код быстро и безболезненно?</h4>
                    <p id="postContent">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Elementum volutpat orci turpis urna. Et vestibulum, posuere tortor lacinia sit. Sagittis porttitor orci auctor in at tincidunt arcu egestas. Fusce arcu sodales lacinia eu auctor nunc nam id. Diam sit sed volutpat massa. Egestas ornare vel volutpat.</p>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-1">
                                <h6 id="postDate" class="text-left">21.06.2020</h6>
                            </div>
                            <div class="col-1">
                                <h6 id="postAuthor" class="text-left">Я</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </a>
        
        <a class="postRead" href="/post">
            <li id="post" class="postCont">
                <img class="img w-100" src="images/kek.png" alt="Image" id="postImage">
                <div class="postText py-2">
                    <h4 id="postTitle">Почему?</h4>
                    <p id="postContent">Потому.</p>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-1">
                                <h6 id="postDate" class="text-left">21.06.2020</h6>
                            </div>
                            <div class="col-1">
                                <h6 id="postAuthor" class="text-left">Я</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </a>
    </ul>

@endsection