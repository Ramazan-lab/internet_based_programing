<?php

use App\Http\Controllers\AdminPanel\AdminPanelController;
use App\Http\Controllers\CategoryController;
use App\Models\Category;
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

Route::get('/',[CategoryController::class,'homefonksiyonum'])->name('myperfectroot');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/kedi', function(

){
    echo "sgddsgsdh";
});

Route::get('/home' , [CategoryController::class , "index"])->name("myhome");

Route::get('/MYservices' , [CategoryController::class , "services"]);

Route::get('/about' , [CategoryController::class , "about"]);

Route::get('/services' , [CategoryController::class , "services"]);



//********************ADMİN PANEL*************************/

Route::get('/admin' , [AdminPanelController::class , "admin"]);
