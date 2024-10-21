{{-- 
    При всём желании, сказать тут нечего, страничка регистрации, поле для ввода почты и кнопка для продолжения
--}}

@extends('loginsignin/logsignin_layout')

@section('main_content')

    <div class="container mt-5 pt-5" style="font-family: Cormorant Garamond; background: white; border-radius:50px; width: 30%;">

        <h1 class="text-center fs-2 mb-3">Регистрация</h1>
        <div class="container p-3">
            <form>

                {{-- Форма для ввода почты пользователя --}}
                <div class="form-group px-5 pb-3">
                    <label id="userEmail" for="emailLabel" class="text fs-4" style="color: black">Введите почтовый адрес</label>
                    <input type="email" class="form-control fs-5" id="inputEmail" placeholder="name@example.com">
                    <small id="emailHelp" class="form-text text-muted">На почту будет отправлен код доступа</small>
                </div>

                {{-- Ха-ха, KHiPKA --}}
                <div class="container d-flex justify-content-center align-items-center">
                    <a href="/registrationCode" class="button-primary px-5" style="text-decoration:none">
                        <p class="text-center my-3 mx-5 px-5 py-2 fs-4" style="color: black;">Продолжить</p>
                    </a>
                </div>

            </form>
        </div>

    </div>

@endsection