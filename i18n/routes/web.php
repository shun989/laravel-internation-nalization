<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\LanguageController;
use Illuminate\Support\Facades\App;
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

//Route::get('/{locale?}', function ($locale = null) {
//    App::setLocale($locale);
//    return view('welcome');
//});

Route::group(['middleware'=>'locale'], function () {

    Route::get('/', function () {
        return view('welcome');
    })->name('home');
    Route::get('/list',[CustomerController::class, 'index'])->name('customers.list');

    Route::get('change-language/{language}', [LanguageController::class, 'changeLanguage'])->name('use.change-language');
});
