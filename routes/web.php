<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class,'index']);

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

Route::get('/blogpage/{id}', [HomeController::class,'blogpage']);

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
