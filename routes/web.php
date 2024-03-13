<?php


use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController;
use App\Http\Controllers\PhotoController;


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

use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\HomeCareController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\BeautyHealthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BabyController;
use App\Http\Controllers\FoodBeverageController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\levelController;
use App\Http\Controllers\levelControllerController;
use App\Http\Controllers\KategoriControllerController;
// Route::get('/level', [levelController::class, 'insertData']);
Route::get('/kategori', [KategoriController::class, 'insertData']);
// Route::get('/food', [FoodBeverageController::class, 'foodBeverage']);

// Route::get('/beauty', [BeautyHealthController::class, 'BeautyHealth']);

// Route::get('/baby', [BabyController::class, 'babyKid']);

// Route::get('/homecare', [HomeCareController::class, 'homeCare']);

// Route::get('/home', [HomeController::class, 'home']);

// Route::get('/penjualan', [PenjualanController::class, 'penjualan']);


// use App\Http\Controllers\UserController;

// Route::get('/user/{id}/name/{name}', [UserController::class, 'user']);





// Route::get('/greeting', [WelcomeController::class, 'greeting']);

// Route::get('/greeting', function () {s
//     return view('hello', ['name' => 'Kalvin']);
//     });



// Route::resource('photos', PhotoController::class);

// Route::get('/hello', [WelcomeController::class,'hello']);

// Route::get('/', [PageController::class, 'index']);

// Route::get('/about', [PageController::class, 'about']);

// Route::get('/articles/{id}', [PageController::class, 'articles']);

// Route::group(['prefix' => 'batch'], function () {


// Route::get('/world', function () {
//     return 'World';
// });

// Route::get('/izr/{name?}', function ($name=' Kalvin Sebastian T') {
//     return 'Nama Saya'.$name;
// });

// Route::get('/user/{name}', function ($name) {
//     return 'Nama saya '.$name;
//     });

// Route::get('/world', function () {
//     return 'World';
// });

// Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
//     return 'Pos ke-' . $postId . " Komentar ke-: " . $commentId;
// });

// Route::get('/user/{name?}', function ($name=null) {
//     return 'Nama saya '.$name;
//     });
// Route::get('/user/profile', function () {
//     $name = 'Izar'; 
//     return "Nama Saya $name";
// })->name('profile');

// Route::get('/userprofile', function() {
//     return redirect()->route('profile'); 
// });

// });
