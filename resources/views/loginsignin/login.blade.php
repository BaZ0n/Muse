{{-- 
        Страница входа. Строки для ввода почты, пароля и одна кнопка продолжить (что ещё для счастья надо) 
--}}

@extends('loginsignin/logsignin_layout')
{{-- Используем созданный заготовок --}}

@section('main_content')

    <div class="container mt-5 pt-5" style="font-family: Cormorant Garamond; background: white; border-radius:50px; width: 40%;">
        
        <h1 class="text-center fs-2 mb-3">Вход</h1> {{-- Вход, информативно не правда ли --}}

        <div class="container p-3 mb-5"> {{-- Контейнер для полей и кнопки --}}
            <form>

                {{-- Почта --}}
                <div class="form-group px-5 pb-3">
                    <label for="emailLabel" class="text fs-4" style="color: black">Адрес электронной почты</label>
                    <input type="email" class="form-control fs-5" id="inputEmail" placeholder="name@example.com">
                </div>

                {{-- Пароль --}}
                <div class="form-group px-5 pb-3">
                    <label for="passwordLabel" class="text fs-4" style="color: black">Пароль</label>
                    <input type="password" class="form-control fs-5" id="inputPassword">
                </div>

                {{-- Кнопка хехе --}}
                <div class="container d-flex justify-content-center align-items-center">
                    <a href="/blogMain" class="button-primary px-5" style="text-decoration:none">
                        <p class="text-center my-3 mx-5 px-5 py-2 fs-4" style="color: black;">Продолжить</p>
                    </a>
                </div>
                
            </form>
        </div>
    </div>

@endsection