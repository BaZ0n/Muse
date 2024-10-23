@extends("blog/profileLayout")

@section("main_content")
    <div class="container align-items-center d-flex justify-content-center" style="margin-left:0">
        <div class="col-8 my-5 mx-5">
            <h1 class="text-center fs-1" style="font-family: Cormorant Garamond; color:white">Профиль</h1>
            <form>
                <div class="form-group my-3">
                    <label for="nameLabel" class="text fs-4 my-3" style="color: white">Имя</label>
                    <input type="text" id="userName" class="form-control fs-5" style="background-color: black; border: 1px solid gray; color: white" id="userName" placeholder="Мефодий">
                </div>
                <div class="form-group my-3">
                    <label for="lastnameLabel" class="text fs-4 my-3" style="color: white">Фамилия</label>
                    <input type="text" id="userLastName" class="form-control fs-5" style="background-color: black; border: 1px solid gray; color: white" id="userName" placeholder="Козёл">
                </div>
                <div class="form-group my-3">
                    <label for="dateLabel" class="text fs-4 my-3" style="color: white">Дата Рождения</label>
                    <input type="date" id="dateOB" class="form-control fs-5" style="background-color: black; border: 1px solid gray; color: white" id="userName" placeholder="01.01.2000">
                </div>
                <div class="form-group my-3">
                    <label for="passwordLabel" class="text fs-4 my-3" style="color: white">Пароль</label>
                    <input type="password" id="oldPassword" class="form-control fs-5" style="background-color: black; border: 1px solid gray; color: white" id="userName" placeholder="*****">
                </div>
                <div class="form-group my-3">
                    <label for="passwordNewLabel" class="text fs-4 my-3" style="color: white">Новый Пароль</label>
                    <input type="password" id="passwordNew" class="form-control fs-5" style="background-color: black; border: 1px solid gray; color: white" id="userName" placeholder="*****">
                </div>
            </form>
            <div class="container d-flex justify-content-center align-items-center">
                <a href="/blogMain" class="button-primary px-5" style="text-decoration:none">
                    <p class="text-center my-3 mx-5 px-5 py-2 fs-4" style="color: black;">Сохранить</p>
                </a>
            </div>
            <a class="exitBtn" href="/">
                <p class="text-center mt-3 fs-3">Выйти из профиля</p>
            </a>
        </div>
    </div>
@endsection