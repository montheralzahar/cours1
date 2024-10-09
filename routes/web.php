<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\SecController;

// index ,about , team ,services , blog , articles
Route::get('/',[MainController::class,'index'])->name('index');
Route::get('/about',[MainController::class,'about'])->name('about') ;
Route::get('/team',[MainController::class,'team'])->name('about');
Route::get('/services',[MainController::class,'services'])->name('services');
Route::get('/blog',[MainController::class,'blog'])->name('blog');
Route::get('/articles',[MainController::class,'articles'])->name('articles');



// Route::get('/about', function () {
//     return 'about us';
// });
// Route::get('/contact', function () {
//     return 'contact page';
// });
// Route::get('/services', function () {
//     return 'our services';
// });
// Route::get('/team', function () {
//     return 'our team';
// });
// Route::get('/blog', function () {
//     return 'blog page';
// });


// // Route::get('/course/{name}', function ($name) {
// //     return 'Course Name Is :' .$name;
// // });



// // Route::get('/course/{name}/{hour?}', function ($name,$hour=0) {
// //     return "course name is :$name and course hours=$hour"
// //  // .  'course name is :' . $name  .'course hours=' . $hour
// //  ;
// // });

// Route::get('/course/{name}/{hour?}', function ($name,$hour=0) {
//     if($hour==0){
//         return "course name is :$name";
//     }else{
//         return "course name is :$name and course hours=$hour";
//     }

// })->name('courses')->whereAlpha('name');












// // Route::get('/sessions/{name}/{type?}', function ($name,$type="online") {
// //     return "course name is :$name $type";

// // });

// Route::get('/sessions/{name?}/{type?}', function ($name,$type="online") {
//     return "<h1>course name is :$name $type</h1>";

// });


// // Route::get('/', function () {
// //     $link=route('about');
// //     return "<a href='$link'> About Us</a>";
// // });

// Route::get('/about-us',function(){
//     return "<h1>About Us</h1>";
// })->name('about');


// Route::get('/',[MainController::class,'index']);

// Route::get('/Home',[SecController::class,'home'])->nam('home');
