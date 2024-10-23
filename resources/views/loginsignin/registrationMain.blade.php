{{--
    Страница Регистрации, тут есть что тебе надо, логин почта пароль и дата рождения и форма для их ввода.
    Из нового, тут уже два столбца на страницу, слева у нас фигня, а справа собственно формы для ввода данных
--}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Carattere&family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet"> {{-- Шрифт Cormorant Garamond--}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"> {{-- Bootstrap CDN --}}
    <link href="css/fonts.css" rel="stylesheet"> {{-- CSS файл с цветами и шрифтами --}}
    <link href="css/animations.css" rel="stylesheet"> {{-- CSS файл с анимациями для кнопок --}}
    <title>muse</title>
</head>

<body style="background: black; background-image: url({{asset('images/background-half.png')}}); background-repeat: no-repeat; background-size: contain; background-attachment:fixed; font-family: Cormorant Garamond;">
    
    {{-- Контейнер на всю ширину экрана и строковый контейнер чтобы столбцам было за что цепляться (в интернете так было написано) --}}
    <div class="container-fluid">
        <div class="row align-items-start" style="justify-content: space-between">

            {{-- Левый столбец --}}
            <div class="col-4">

                <div class="container my-5">
                    <h2 class="text-center fs-3 my-5" style="color: #FFFFFF">muse.</h2>
                </div>
            
                <div class="container my-5">
                    <h1 class="text-center mt-5" style="font-family: Caravan; color: #FACE8D; font-size: 130px">Каждая идея</h1>
                    <h1 class="text-center mt-3 fs-1" style="color: #FFFFFF">это шаг к вдохновению</h1>
                </div>
                
            </div>

            {{-- Правый столбец --}}
            <div class="col-6 my-5 mx-5">
                <h1 class="text-center fs-1 mx-5" style="font-family: Cormorant Garamond; color:white">Регистрация</h1>

                {{-- Форма регистрации --}}
                <form style=>

                    {{-- Имя --}}
                    <div class="form-group my-3">
                        <label for="nameLabel" class="text fs-4 my-3" style="color: white">Имя</label>
                        <input type="text" id="userName" class="form-control fs-5" style="background-color: black; border: 1px solid gray; color: white" id="userName" placeholder="Мефодий">
                    </div>

                    {{-- Фамилия --}}
                    <div class="form-group my-3">
                        <label for="lastnameLabel" class="text fs-4 my-3" style="color: white">Фамилия</label>
                        <input type="text" id="userLastName" class="form-control fs-5" style="background-color: black; border: 1px solid gray; color: white" id="userName" placeholder="Козёл">
                    </div>

                    {{-- Дата рождения --}}
                    <div class="form-group my-3">
                        <label for="dateLabel" class="text fs-4 my-3" style="color: white">Дата Рождения</label>
                        <input type="date" id="dateOB" class="form-control fs-5" style="background-color: black; border: 1px solid gray; color: white" id="userName" placeholder="01.01.2000">
                    </div>

                    {{-- Пароль --}}
                    <div class="form-group my-3">
                        <label for="passwordLabel" class="text fs-4 my-3" style="color: white">Пароль</label>
                        <input type="password" id="password" class="form-control fs-5" style="background-color: black; border: 1px solid gray; color: white" id="userName" placeholder="*****">
                    </div>

                    {{-- Пароль ещё раз --}}
                    <div class="form-group my-3">
                        <label for="passwordRepeatLabel" class="text fs-4 my-3" style="color: white">Повторите Пароль</label>
                        <input type="password" id="passwordRepeat" class="form-control fs-5" style="background-color: black; border: 1px solid gray; color: white" id="userName" placeholder="*****">
                    </div>
                </form>

                {{-- Кнопочка --}}
                <div class="container d-flex justify-content-center align-items-center">
                    <a href="/blogMain" class="button-primary px-5" style="text-decoration:none">
                        <p class="text-center my-3 mx-5 px-5 py-2 fs-4" style="color: black;">Продолжить</p>
                    </a>
                </div>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>