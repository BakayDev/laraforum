<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ThreadsController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/threads',);

Auth::routes();

Route::get('/home',  [HomeController::class, 'index']);
Route::get('/threads',  [ThreadsController::class, 'index']);
Route::get('/threads/{thread}',  [ThreadsController::class, 'show']);
