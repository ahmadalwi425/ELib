<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\bookController;
use App\Http\Controllers\borrowController;
use App\Http\Controllers\pdfController;
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
    return redirect('user2/index');
});

Route::get('/user', function () {
    return view('UserLayout.index');
});
Route::get('/user2/index', [bookController::class,'searchbook']); 
Route::get('/user2/show', [bookController::class,'showbuku']); 
Route::get('/user2/bookpage/{id}', [bookController::class,'show2']); 
Route::get('/user2/req/{id}', [borrowController::class,'store']); 
Route::post('/borrow/req', [borrowController::class,'store2']); 
Route::get('/borrow/acc/{id}', [borrowController::class,'acc']); 
Route::get('/borrow/refuse/{id}', [borrowController::class,'refuse']); 
Route::get('/borrow/return/{id}', [borrowController::class,'return']); 
Route::get('/pdf/borrow', [pdfController::class,'borrow']); 
Route::get('/user2/book', function () {
    return view('User2.bookpage');
});
Route::get('/user2/guide', function () {
    return view('User2.guide');
});
// Route::get('/newuser', function () {
//     return view('User2.index');
// });

Auth::routes();


Route::middleware(['auth'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
        // Route::resource('user', [userController::class]);
        Route::get('/user/index', [userController::class,'index']); 
        Route::get('/user/create', [userController::class,'create']); 
        Route::post('/user/store', [userController::class,'store']); 
        Route::get('/user/edit/{id}', [userController::class,'edit']); 
        Route::get('/user/destroy/{id}', [userController::class,'destroy']); 
        Route::put('/user/update/{id}', [userController::class,'update']); 
        // Route::resource('book', [bookController::class]);
        Route::get('/book/index', [bookController::class,'index']); 
        // Route::get('/book/create', [bookController::class,'create']); 
        Route::post('/book/store', [bookController::class,'store']); 
        Route::get('/book/edit/{id}', [bookController::class,'edit']); 
        Route::get('/book/destroy/{id}', [bookController::class,'destroy']); 

        Route::put('/book/update/{id}', [bookController::class,'update']); 
        Route::get('/pdf/user', [pdfController::class,'print_user']); 
        // Route::get('/user/index', [userController::class,'index']); 

        Route::get('/borrow/index', [borrowController::class,'index']); 
        Route::get('/borrow/create', [borrowController::class,'create']); 
        Route::post('/borrow/store', [borrowController::class,'store']); 
        Route::get('/borrow/edit/{id}', [borrowController::class,'edit']); 
        Route::get('/borrow/destroy/{id}', [borrowController::class,'destroy']); 
        Route::put('/borrow/update/{id}', [borrowController::class,'update']);

    Route::get('/logout', function() {
        Auth::logout();
        redirect('/');
    });
});