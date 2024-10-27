{{-- 
        Страница входа. Строки для ввода почты, пароля и одна кнопка продолжить (что ещё для счастья надо) 
--}}

@extends('loginsignin/logsignin_layout')
{{-- Используем созданный заготовок --}}

@section('main_content')

    <div class="container mt-3 pt-4" style="font-family: Cormorant Garamond; background: white; border-radius:50px; width: 40%;">
        
        <h1 class="text-center fs-2 mb-3">Вход</h1> {{-- Вход, информативно не правда ли --}}

        <div class="container p-4 mb-5"> {{-- Контейнер для полей и кнопки --}}
            <form method="post" action="/blogMainPost">
                @csrf
                {{-- Почта --}}
                <div class="form-group px-4 pb-1">
                    <label for="emailLabel" class="text fs-4" style="color: black">Адрес электронной почты</label>
                    <input type="email" class="form-control fs-5" id="inputEmail" name="inputEmail" placeholder="name@example.com"><br>
                </div>

                {{-- Пароль --}}
                <div class="form-group px-4 pb-1">
                    <label for="passwordLabel" class="text fs-4" style="color: black">Пароль</label>
                    <input type="password" class="form-control fs-5" id="inputPassword" name="inputPassword"><br>
                </div>

                {{-- Кнопка хехе --}}
                <div class="container d-flex justify-content-center align-items-center">
                    <button type="submit" class="button-primary px-5" style="text-decoration:none">
                        <p class="text-center my-3 mx-5 px-5 py-2 fs-4" style="color: black;">Продолжить</p>
                    </button>
                </div> 
                
            </form>
        </div>
    </div>

@endsection