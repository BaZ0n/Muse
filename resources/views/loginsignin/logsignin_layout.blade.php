{{-- 
    Шаблон для страницы входа и первых двух страниц регистрации. Всё что тут есть лого и заголовок и всё.
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

<body style="background: black; background-image: url({{asset('images/background.png')}}); background-repeat: no-repeat; background-size: cover; background-attachment:fixed; background-position:center; font-family: Cormorant Garamond;">
    
    {{-- Пусть будет шапка (лого) --}}
    <div class="container mt-4"> 
        <h2 class="text-center fs-3" style="color: #FFFFFF">muse.</h2>
    </div>

    {{-- Заголовок --}}
    <div class="container mb-5 pb-5">
        <h1 class="text-center" style="font-family: Caravan; color: #FACE8D; font-size: 130px">Каждая идея</h1>
        <h1 class="text-center fs-1" style="color: #FFFFFF">это шаг к вдохновению</h1>
    </div>

    {{-- Место где должен быть основной контент --}}
    @yield('main_content') 

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>