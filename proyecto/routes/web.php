<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('principal');
});

Route::view('/iniciarsesion', 'iniciarsesion')->name('iniciarsesion');
