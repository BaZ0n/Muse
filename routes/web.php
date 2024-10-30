<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LoginController::class, 'welcome']);

Route::get('/login', [LoginController::class, 'login']);

Route::post('/login/check' , [LoginController::class,'login_check']);

Route::get('/registrationMain', [LoginController::class, 'registrationMain']);

Route::post('/blogMainPost', [BlogController::class, 'blogMainPost']);

Route::get('/blogMain', [BlogController::class, 'blogMain']);

Route::get('/profile', [BlogController::class, 'profile']);

Route::post('/profile/check', [BlogController::class,'profile_check']);

Route::get('/post/{id}', [BlogController::class, 'post']);

Route::get('/news', [BlogController::class, 'news']);

Route::get('/createPost', [BlogController::class, 'createPost']);

Route::post('/createPost/check', [BlogController::class, 'createPost_check']);

Route::get('/createStories', [BlogController::class, 'createStories']);