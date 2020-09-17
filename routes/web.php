<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\ThreadsController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/threads', [ThreadsController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
