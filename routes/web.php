<?php

use Illuminate\Support\Facades\Route;

// controllers
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostControlller;
use App\Http\Controllers\TagController;
use App\Http\Controllers\VideoController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('user',UserController::class);
Route::resource('profile',ProfileController::class);
Route::resource('post',PostControlller::class);
Route::resource('tag',TagController::class);
Route::resource('video',VideoController::class);
