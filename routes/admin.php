<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function (){
    return redirect()->route('admin.login');
});

Route::view('/login', 'admin.login')->name('login');
Route::view('/dashboard', 'admin.dashboard')->name('dashboard');
