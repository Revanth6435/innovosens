<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteSer viceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('homepage');
});

Route::get('/technology', function () {
    return view('technology');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/partner', function () {
    return view('partner');
});

Route::get('/aboutus', function () {
    return view('about');
});

Route::get('/blogpage', function () {
    return view('blogpage');
});


//Admin Route
Route::middleware(['auth','prevent-back-history'])->group(function () {
    Route::get('dashboard',[AdminController::class,'index'])->name('dashboard');
    Route::resource('/blogs',BlogController::class);
});

Route::get('logout',[AdminController::class,'logout']);
Route::get('login',[AdminController::class,'login'])->name('login');
Route::post('auth',[AdminController::class,'auth']);
// Route::get('/register',[AdminController::class,'register']);