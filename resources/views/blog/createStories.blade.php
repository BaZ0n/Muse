@extends('blog/profileLayout')

@section("main_content")
<div class="container my-5 px-5" style="color:white; font-family:Roboto; margin-left:0%">
    <div class="container mx-3 px-5 my-5" style="background-color: #141615; border-radius: 5px;">
        <form method="POST" action="createStories/check" enctype="multipart/form-data">
            @csrf
            <div class="form-group my-3 px-3">
                <label for="titleLabel" class="text-center fs-4 my-3" style="color: white">Заголовок</label>
                <input type="text" id="titleStories" name="titleStories" class="form-control fs-5" style="background-color: black; border: 1px solid gray; color: white">
            </div>
            <div class="form-group my-3 px-3">
                <label for="newPhotoLabel" class="text-center fs-4 my-3" style="color: white">Загрузите фотографию</label>
                <input id="photoStoriesFile" name="photoStoriesFile" type="file" class="form-control fs-5" style="background-color: black; border: 1px solid gray;">
            </div>
            <div class="container d-flex justify-content-center align-items-center">
            <button type="submit" class="button-primary px-5 my-3" style="text-decoration:none">
                <p class="text-center my-2 mx-5 px-5 py-2 fs-4" style="color: black;">Сохранить</p>
            </button>
        </form>
    </div>
</div>
@endsection

