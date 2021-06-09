<?php

use App\Http\Controllers\LanguageController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['middleware' => 'locale'], function () {
    Route::get('/', function () {
        return view('welcome');
    })->name('home');
// Hiển thị danh sách bài viết
    Route::get('/posts', [PostController::class, 'index'])->name('posts.list');

// Hiển thị giao diện thêm mới bài viết
    Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');

// Tạo mới bài viết
    Route::post('/posts/create', [PostController::class, 'store'])->name('posts.store');

// Chuyển đổi ngôn ngữ cho website
    Route::get('change-language/{language}', [LanguageController::class, 'changeLanguage'])->name('user.change-language');


});

//Route::group(['prefix'=>'{language}'],function($language){
//    config(['app.locale'=>$language]);
//
//    Route::get('/', function () {
//        return view('welcome');
//    })->name('home');
//// Hiển thị danh sách bài viết
//    Route::get('/posts', [PostController::class, 'index'])->name('posts.list');
//
//// Hiển thị giao diện thêm mới bài viết
//    Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
//
//// Tạo mới bài viết
//    Route::post('/posts/create', [PostController::class, 'store'])->name('posts.store');
//
//// Chuyển đổi ngôn ngữ cho website
//    Route::get('change-language/{language}', [LanguageController::class, 'changeLanguage'])->name('user.change-language');
//
//});

Route::group(['domain' => env('APP_ADMIN_URL')], function() {
    Route::get('/', function() {
        return 'Đây là trang admin';
    });
});
Route::group(['domain' => env('APP_URL')], function() {
    Route::get('/', function() {
        return 'Đây là trang người dùng';
    });
});


