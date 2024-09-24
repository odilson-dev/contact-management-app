<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource(name: 'user', controller: UserController::class);
Route::get(uri: '/contact/{id}', action: [ContactController::class,'show'])->name("show");
Route::resource(name: 'contact', controller: ContactController::class);