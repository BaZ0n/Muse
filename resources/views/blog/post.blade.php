@extends("blog/profileLayout")

@section("main_content")

    <div class="container my-3 px-5" style="color:white; font-family:Roboto; margin-left:0%; width:fit-content; min-width:100%; min-height:500px; max-height:fit-content">
        <div class="container mx-3 px-0" style="background-color: #202020; border-radius: 5px; display: flex; width:fit-content; min-width:100%; min-height:500px; max-height:fit-content; align-content: space-between; flex-wrap: wrap;">
            <div class="container mt-4 px-0">
                <h2 id="postTitle" class="text-center py-3 px-5 fs-1">{{$post->title}}</h2>
                @if($post->img_post != null)
                    <img class="img w-100" src="{{ asset('images/post/' . $post->img_post) }}" alt="Image" id="postImage" style="object-fit:cover; max-height:60%; object-fit:cover; width:100%">
                @endif
                <p class="text px-4 py-3 fs-3" >{{$post->content}}</p>
            </div>
            <div class="container mb-5 mx-3">
                <div class="bottom-cont">
                    <h6 id="postDate" class="text fs-5">{{$post->date_post}}</h6>
                    <h6 id="postAuthor" class="text fs-5">{{$post->author_name_first}} {{$post->author_name_last}}</h6>
                </div>
            </div>
        </div>
    </div>
@endsection

