<?php

use Illuminate\Support\Facades\Route;

Route::get('/',\App\Livewire\Home::class);
Route::get('/login',\App\Livewire\Login::class)->name('login');
Route::get('/register',\App\Livewire\Register::class)->name('register');


Route::group(['middleware' => 'auth'],function(){
    Route::get('/profile',\App\Livewire\Profile::class);
});

