@extends('loginsignin/logsignin_layout')

@section('main_content')
    <div class="container mt-5 pt-5" style="font-family: Cormorant Garamond; background: white; border-radius:50px; width: 30%;">
        <h1 class="text-center fs-2 mb-3">Введите код</h1>
        <div class="container p-3">
            <div class="row mx-5 my-3 fs-1">
                <input type="text" id="codeOne" class="col-sm mx-4 pb-1" pattern="[0-9]" maxlength="1" style="border-radius: 12px">
                <input type="text" id="codeTwo" class="col-sm mx-4 pb-1" pattern="[0-9]" maxlength="1" style="border-radius: 12px">
                <input type="text" id="codeTh" class="col-sm mx-4 pb-1" pattern="[0-9]" maxlength="1" style="border-radius: 12px">
                <input type="text" id="codeFo" class="col-sm mx-4 pb-1"pattern="[0-9]" maxlength="1" style="border-radius: 12px">
            </div>
            <div class="container d-flex justify-content-center align-items-center">
                <a href="/registrationMain" class="button-primary px-5" style="text-decoration:none">
                    <p class="text-center my-3 mx-5 px-5 py-2 fs-4" style="color: black;">Продолжить</p>
                </a>
            </div>
        </div>
    </div>
@endsection