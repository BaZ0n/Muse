@extends('blog/profileLayout')

@section('main_content')

    {{-- Поиск --}}
    <div class="container mx-2 my-5 px-5" style="max-width: fit-content;">
        <div class="input-group mx-5" style="background: white; border-radius:50px; min-width: 150%;">
            <input id="searchBar" type="search" class="form-control fs-3" placeholder="Поиск" aria-label="Search" aria-describedby="search-addon" style="background: transparent; border:0; border-radius:50px; color:black;">
        </div>
    </div>

    <ul class="posts-container w-auto px-5 my-3" style="color:white; font-family:Roboto">
        @foreach ($posts as $post)   
            <a class="postRead" href="/post/{{$post->id}}">
                <li id="post" class="postCont">
                    @if ($post->img_post != null)
                        <img class="img w-100" src="images/post/{{$post->img_post}}" alt="Image" id="postImage">
                        <div class="postText py-2">
                            <h3 id="postTitle">{{$post->title}}</h4>
                            <p id="postContent">{{$post->content}}</p>
                            <div class="bottom-cont">
                                <h6 id="postDate" class="text">{{$post->date_post}}</h6>
                                <h6 id="postAuthor" class="text">{{$post->author_name_first}} {{$post->author_name_last}}</h6>
                            </div>
                        </div>
                    @else
                        <div class="postText py-2" style="border-radius: 15px">
                            <h3 id="postTitle">{{$post->title}}</h4>
                            <p id="postContent">{{$post->content}}</p>
                            <div class="bottom-cont">
                                <h6 id="postDate" class="text">{{$post->date_post}}</h6>
                                <h6 id="postAuthor" class="text">{{$post->author_name_first}} {{$post->author_name_last}}</h6>
                            </div>
                        </div>
                    @endif
                    
                </li>
            </a>
        @endforeach
    </ul>

    

@endsection