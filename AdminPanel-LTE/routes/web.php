<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
// use App\Models\User;

Route::middleware(['auth'])->group(function(){
    Route::get('/', function () {
        return view('home');
    })->name('home');

});

Route::get('/users', [UserController::class, 'index'])->name('users.index');

