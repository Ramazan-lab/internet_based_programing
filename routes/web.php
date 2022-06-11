<?php

use App\Http\Controllers\AdminPanel\AdminPanelController;
use App\Http\Controllers\AdminPanel\adminTreatmentsController;
use App\Http\Controllers\AdminPanel\imageController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
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

Route::get('/',[HomeController ::class,'index'])->name('myperfectroot');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/MYservices' , [HomeController::class , "services"]);

Route::get('/about' , [HomeController::class , "about"]);

Route::get('/services' , [HomeController::class , "services"]);
Route::get('/treatments' , [HomeController::class , "treatments"]);
Route::get('/treatments/detail/{id}' , [HomeController::class , "treatmentDetail"])->name('home.treatments.detail');


Route::prefix('admin')->name('admin.')->group(function () {


        //********************ADMİN PANEL*************************/
        Route::get('/' , [AdminPanelController::class , "index"])->name('index');
        
        //********************ADMİN category*************************/
    Route::prefix('category')->name('category.')->controller(CategoryController::class)->group(function () {

        Route::get('/' ,  "index")->name('index');

        Route::get('/create' ,  "create")->name('create');

        Route::post('/store' , "store")->name('store');

        Route::get('/edit/{id}' , "edit")->name('edit');

        Route::post('/update/{id}' ,  "update")->name('update');


        Route::get('/destroy/{id}' ,  "destroy")->name('destroy');

        Route::get('/show/{id}' ,  "show")->name('show');


});
//********************ADMİN treatments*************************/
Route::prefix('treatment')->name('treatment.')->controller(adminTreatmentsController::class)->group(function () {

    Route::get('/' ,  "index")->name('index');

    Route::get('/create' ,  "create")->name('create');

    Route::post('/store' , "store")->name('store');

    Route::get('/edit/{id}' , "edit")->name('edit');

    Route::post('/update/{id}' ,  "update")->name('update');


    Route::get('/destroy/{id}' ,  "destroy")->name('destroy');

    Route::get('/show/{id}' ,  "show")->name('show');


    });

    //********************ADMİN treatments image*************************/

    Route::prefix('image')->name('image.')->controller(imageController::class)->group(function () {

        Route::get('/{tid}' ,  "index")->name('index');
    
        Route::get('/create/{tid}' ,  "create")->name('create');
    
        Route::post('/store/{tid}' , "store")->name('store');
    
       
    
        Route::post('/update//{tid}/{id}' ,  "update")->name('update');
    
    
        Route::get('/destroy//{tid}/{id}' ,  "destroy")->name('destroy');
    
        
    
    
    });


});


