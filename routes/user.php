<?php

use Illuminate\Support\Facades\Route;

// $array=['profile','comments','courses'];

// Route::prefix('user')->group(function(){
//     Route::get('{page?}',function($page){
//         for($i=0;$i<length($array);$i++){
//            if($page==$array[$i]){
//             return "<h1>User $page </h1>";
//            }
//         }

//     });

// });



Route::prefix('user')->name('user.')->group(function(){
    Route::get('profile',function(){
        return  '<h1>user profile</h1>';
    })->name('profile');

    Route::get('comments',function(){
        return  '<h1>user comments</h1>';
    })->name('comments');

    Route::get('courses',function(){
        return  '<h1>user courses </h1>';
    })->name('courses');

   });
