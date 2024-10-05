<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'home page';
});
Route::get('/about', function () {
    return 'about us';
});
Route::get('/contact', function () {
    return 'contact page';
});
Route::get('/services', function () {
    return 'our services';
});
Route::get('/team', function () {
    return 'our team';
});
Route::get('/blog', function () {
    return 'blog page';
});


