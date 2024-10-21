<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('loginsignin/welcome');
});

Route::get('/login', function () {
    return view('loginsignin/login');
});

Route::get('/registration', function () {
    return view('loginsignin/registration');
});

Route::get('/registrationCode', function () {
    return view('loginsignin/registrationCode');
});

Route::get('/registrationMain', function () {
    return view('loginsignin/registrationMain');
});

Route::get('/blogMain', function () {
    return view('blog/blogMain');
});

Route::get('/profile', function () {
    return view('blog/profile');
});

Route::get('/post', function () {
    return view('blog/post');
});

Route::get('/news', function () {
    return view('blog/news');
});