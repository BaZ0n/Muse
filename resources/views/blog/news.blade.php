@extends('blog/profileLayout')

@section('main_content')

    <div class="container mx-2 my-5 px-5" style="max-width: fit-content;">
        <div class="input-group w-auto mx-5" style="background: #121212; border-radius:50px; min-width: 150%">
            <input id="searchBar" type="search" class="form-control fs-3" placeholder="Поиск" aria-label="Search" aria-describedby="search-addon" style="background: transparent; border:0; border-radius:50px; color:white;">
        </div>
    </div>

    <ul class="posts-container w-auto px-5 my-3" style="color:white; font-family:Roboto">

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

        <a class="postRead" href="/post">
            <li id="post" class="postCont">
                <img class="img w-100" src="images/kek2.png" alt="Image" id="postImage">
                <div class="postText py-2">
                    <h4 id="postTitle">Хочешь стать программистом?</h4>
                    <p id="postContent">Да ебись ты в рот.</p>
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
                <img class="img w-100" src="images/kek3.jpg" alt="Image" id="postImage">
                <div class="postText py-2">
                    <h4 id="postTitle">Так в чём же смысл бытия?</h4>
                    <p id="postContent">Цитируя великого русского поэта музыканта, я смело заявляю: А я ебу что-ли.</p>
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