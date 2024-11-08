@extends("blog/profileLayout")

@section("main_content")

    <div class="container my-3 px-5" style="color:white; font-family:Roboto; margin-left:0%; width:fit-content; min-width:100%; min-height:500px; max-height:fit-content">
        <div class="container mx-3 px-0" style="background-color: #141615; border-radius: 5px; display: flex; width:fit-content; min-width:100%; min-height:500px; max-height:fit-content; max-width:700px; align-content: space-between; flex-wrap: wrap;">
            <div class="container mt-4 px-0">
                <div class="buttonsCont" style="display: flex; justify-content:space-between">
                    <a href="/blogMain" class="postBTN">
                        <img src="{{asset('images/iconBack.png')}}" class="img mx-4 px-2 py-2">
                    </a>
                    @if($user->admin == true)
                        <a href="/post/del/{{$post->id}}" class="postBTN">
                            <img src="{{asset('images/deleteBTN.png')}}" class="img mx-4 px-2 py-2" style="width:38px; height:36px">
                        </a>
                    @endif
                </div>
                <h2 id="postTitle" class="text-center fs-2 mb-4">{{$post->title}}</h2>
                @if($post->img_post != null)
                    <img class="img w-100" src="{{ asset('images/post/' . $post->img_post) }}" alt="Image" id="postImage" style="object-fit:contain; max-height:60%; object-fit:cover; width:100%">
                @endif
                <p class="text px-5 py-3 mx-2 fs-4" >{{$post->content}}</p>
            </div>
            <div class="container mb-5 mx-3">
                <div class="bottom-cont">
                    <h6 id="postDate" class="text fs-6">{{$post->date_post}}</h6>
                    <h6 id="postAuthor" class="text fs-6">{{$post->author_name_first}} {{$post->author_name_last}}</h6>
                </div>
            </div>
        </div>
    </div>
@endsection

