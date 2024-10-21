<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Carattere&family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/fonts.css" rel="stylesheet">
    <link href="css/pagination.css" rel="stylesheet">
    <link href="css/animations.css" rel="stylesheet">
    <link href="css/post.css" rel="stylesheet">
    <title>muse</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row align-items-start" style="justify-content: space-between">
            <div class="col-5">
                <div class="container h-auto w-auto" style="background-image: url({{asset('images/backgroundCustom1.png')}}); background-repeat: no-repeat; position:fixed; left: 0; bottom: 0; top: 0;">
                    <div class="container mt-3">
                        <a href="/" class="logo fs-4 mx-4">muse.</a>
                        <div class="container d-flex" style="justify-content: center; align-items: center; flex-direction: column; color: var(--white)">
                            <img id="userPhoto" src="images/profileImage.png" class="rounded-circle mx-4 my-4 d-block w-50 h-50" style="border: 5px solid var(--white)">
                            <h1 id="username" class="text-center fs-1 mt-1">НН с города N</h1>
                            <h3 id="status" class="text-center fs-3 mt-2">Прыг-Скок</h3>
                            <hr style="color:gray; width: 100%">
                            <h2 id="aboutUser" class="text-center">О себе.</h2>
                        </div> 
                    </div>
                </div> 
            </div>
            
            <div class="col" style="margin-left: 2%; margin-right:2%">
                <div class="header d-flex align-items-center my-4" style="justify-content: center; align-items: center;">
                    <a href="/blogMain">Главная</a>
                    <a href="/profile">Профиль</a>
                    <a href="/news">Новости</a>
                </div>
                @yield("main_content")
                
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/pagination.js"></script>
</body>
</html>