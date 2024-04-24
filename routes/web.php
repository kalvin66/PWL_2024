<?php

use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('hello', function () {
    return 'Hello World';
});


Route::get('/world', function () {
    return 'world';
});



Route::get('/index', function () {
    return 'Selamat Datang';
});

Route::get('/about', function () {
    return 'NIM: 3312201011 <br> Nama : Kalvin Sebastian';
});




Route::get('/user/{name}', function ($name = null) {
    return 'Nama saya ' . $name;
});



Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke-' . $postId . " Komentar ke-: " . $commentId;
});



Route::get('/user/profile', function () {
    return "Nama Saya $name";
})->name('profile');


Route::get('/routeprofile', function () {
    return to_route('profile', ['name' => 'kalvin']);
});


Route::view('/welcome', 'welcome');
Route::view('/welcome', 'welcome', ['name' => 'Taylor']);

Route::get('/hello', [WelcomeController::class, 'hello']);


use App\Http\Controllers\PhotoController;

Route::resource('photos', PhotoController::class);
