@extends("blog/profileLayout")

@section("main_content")
    <div class="container align-items-center d-flex justify-content-center" style="margin-left:0">
        <div class="col-8 my-5 mx-5">
            <h1 class="text-center fs-1" style="font-family: Cormorant Garamond; color:white">Профиль</h1>
            <form method="POST" action="/profile/check" enctype="multipart/form-data">
                @csrf
                <div class="form-group my-3">
                    <label for="nameLabel" class="text fs-4 my-3" style="color: white">Имя</label>
                    <input type="text" id="userName" name="userName" class="form-control fs-5" style="background-color: black; border: 1px solid rgba(255, 255, 255, 0.1); color: white" placeholder="{{$user->name_first}}">
                </div>
                <div class="form-group my-3">
                    <label for="lastnameLabel" class="text fs-4 my-3" style="color: white">Фамилия</label>
                    <input type="text" id="userLastName" name="userLastName" class="form-control fs-5" style="background-color: black; border: 1px solid rgba(255, 255, 255, 0.1); color: white" placeholder="{{$user->name_last}}">
                </div>
                <div class="form-group my-3">
                    <label for="dateLabel" class="text fs-4 my-3" style="color: white">Дата Рождения</label>
                    <input type="date" id="dateOB" name="dateOB" class="form-control fs-5" style="background-color: black; border: 1px solid rgba(255, 255, 255, 0.1); color: white" placeholder="{{$user->birthdate}}">
                </div>
                <div class="form-group my-3">
                    <label for="passwordLabel" class="text fs-4 my-3" style="color: white">Пароль</label>
                    <input type="password" id="oldPassword" name="oldPassword" class="form-control fs-5" style="background-color: black; border: 1px solid rgba(255, 255, 255, 0.1); color: white" placeholder="*****">
                </div>
                <div class="form-group my-3">
                    <label for="passwordNewLabel" class="text fs-4 my-3" style="color: white">Новый Пароль</label>
                    <input type="password" id="passwordNew" name="passwordNew" class="form-control fs-5" style="background-color: black; border: 1px solid rgba(255, 255, 255, 0.1); color: white" placeholder="*****">
                </div>
                <div class="form-group my-3">
                    <label for="newStatusLabel" class="text fs-4 my-3" style="color: white">Новый Статус</label>
                    <input type="text" id="statusNew" name="statusNew" class="form-control fs-5" style="background-color: black; border: 1px solid rgba(255, 255, 255, 0.1); color: white" placeholder="{{$user->status}}">
                </div>
                <div class="form-group my-3">
                    <label for="newAboutLabel" class="text fs-4 my-3" style="color: white">О себе</label>
                    <textarea type="text" id="aboutNew" name="aboutNew" class="form-control fs-5" rows="5" style="background-color: black; border: 1px solid rgba(255, 255, 255, 0.1); color: white" placeholder="{{$user->about}}"></textarea>
                </div>
                <div class="form-group my-3">
                    <label for="newPhotoLabel" class="text fs-4 my-3" style="color: white">Загрузите фотографию</label>
                    <input name="photoFile" type="file" class="form-control fs-5" style="background-color: black; border: 1px solid rgba(255, 255, 255, 0.1);">
                </div>
                
                <div class="container d-flex justify-content-center align-items-center">
                    <button type="submit" class="button-primary px-5 mt-5" style="text-decoration:none; ">
                        <p class="text-center my-2 mx-5 px-5 py-2 fs-4" style="color: black;">Сохранить</p>
                    </button>
                </div>
            </form>
            <a class="exitBtn" href="/">
                <p class="text-center mt-3 fs-3">Выйти из профиля</p>
            </a>
        </div>
    </div>
@endsection