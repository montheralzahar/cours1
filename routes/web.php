<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'home page';
});
Route::get('/contact', function () {
    return 'contact page';
});


