<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use Illuminate\Http\Request;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::middleware(['auth'])->group(function () {

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::middleware(['admin'])->group(function () {
        // Route::resource('user', [userController::class]);
        Route::get('/user/index', [userController::class,'index']); 
        // Route::get('/user/create', [userController::class,'create']); 
        Route::post('/user/store', [userController::class,'store']); 
        Route::get('/user/edit/{id}', [userController::class,'edit']); 
        Route::get('/user/destroy/{id}', [userController::class,'destroy']); 
        Route::put('/user/update/{id}', [userController::class,'update']); 
    });
    Route::get('/logout', function() {
        Auth::logout();
        redirect('/');
    });
});