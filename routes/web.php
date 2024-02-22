<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\PhotoController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Praktikum Basic Routing
Route::get('/hello', function () {
    return 'Hello world';
});

Route::get('/world', function () {
    return 'world';
});

// Praktikum Routes Parameter

Route::get('/user/{name}', function($name){
    return 'Nama Saya '.$name;
});

Route::get('/posts/{post}/comments/{comment}', function($postId, $commentId){
    return 'Post ke- '.$postId. " Komentar ke -:".$commentId;
});

// Route::get('/articles/{id}', function($id){
//     return 'Halaman Artikel ke- '.$id;
// });

//Optional Parameter 

Route::get('/users/{name?}', function($name=null){
    return 'Nama Saya '.$name;
});

Route::get('/usersa/{name?}', function($name="Adil"){
    return 'Nama Saya '.$name;
});

// Route Praktikum Controller 

Route::get('/hellow', [WelcomeController::class,'hello']);
Route::get('/', [PageController::class,'index']);
Route::get('/about', [PageController::class,'about']);
Route::get('/articles/{id}', [PageController::class,'articles'],function($id){});
Route::resource('photos',PhotoController::class);
Route::resource('photos',PhotoController::class)-> only(['index','show']);
Route::resource('photos',PhotoController::class)-> except(['create','store','update','destroy']);