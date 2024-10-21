{{-- 
        Приветственная страница, я не знаю как её ещё назвать
        Тут выводится по центру лого "muse.", ниже заголовок, а ещё ниже две кнопки входа
        Было бы неплохо переписать его под адаптивную вёрстку, а ещё было бы неплохо если бы у меня было много деняг, эх мечты
--}}


<!DOCTYPE html> {{-- База --}}
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
<body style="background: black; background-image: url({{asset('images/background.png')}}); background-repeat: no-repeat; 
            background-size: cover; background-attachment:fixed; background-position:center; font-family: Cormorant Garamond;">

    {{-- Лого --}}
    <div class="container mt-5"> 
        <h2 class="text-center fs-3" style="color: #FFFFFF">muse.</h2>
    </div>

    {{-- Заголовок хз --}}
    <div class="container my-5 pb-5"> 
        <h1 class="text-center" style="font-family: Caravan; font-size: 150px; color: #FACE8D">Каждая идея</h1>
        <h2 class="text-center" style="color: #FFFFFF; font-size: 50px">это шаг к вдохновению</h2>
    </div>

    {{-- заглушка чтоб расстояние больше было --}} 
    <div class="container my-5 py-5"></div> 

    {{-- Кнопки входа и выхода --}}
    <div class="container d-flex justify-content-center align-items-center mt-5 py-5 ">  
        <div class="btn-container d-flex justify-content-center align-items-center mt-5 px-1" style=" width: 450px; height: 70px; border-radius: 100px; font-family: Cormorant Garamond;">

            {{-- кнопка входа --}}
            <a href="/login" class="loginBtn" style="width: 50%; display:flex; justify-content:center; text-decoration:none"> 
                <p class="text-center mb-0 fs-2">Вход</p> 
            </a>

            {{-- кнопка регистрации --}}
            <a href="/registration" class="signinBtn" style="text-decoration:none; width: 70%; height: 90%; display:flex; justify-content:center; align-items:center; background:black; border-radius: 50px">
                <p class="text-center mb-0 fs-2" style="font-size: 30px; ">Регистрация</p> 
            </a>

        </div>
    </div>
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>