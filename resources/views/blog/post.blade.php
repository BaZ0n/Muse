@extends("blog/profileLayout")

@section("main_content")

    <div class="container my-3 px-5" style="color:white; font-family:Roboto; margin-left:0%; width:fit-content">
        <div class="container mx-3 px-0" style="background-color: #202020; border-radius: 5px;  width:fit-content">
            <h2 id="postTitle" class="text-center py-3 px-5">{{$post->title}}</h2>
            <img class="img w-100" src="{{ asset('images/post/' . $post->img_post) }}" alt="Image" id="postImage" style="object-fit:cover; height:250px; object-fit:cover">
            <p class="text px-4 py-3 fs-5" >{{$post->content}}</p>
            <div class="container-fluid pb-4 px-5">
                <div class="row align-items-center" style="justify-content: space-between; color: #828282">
                    <div class="col-1">
                        <h6 id="postDate" class="text-left">{{$post->date_post}}</h6>
                    </div>
                    <div class="col-1">
                        <h6 id="postAuthor" class="text-left">{{$user->name_first}} {{$user->name_last}}</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

