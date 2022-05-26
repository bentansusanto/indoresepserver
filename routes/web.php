<?php

use App\Http\Controllers\DestinasiController;
use App\Http\Controllers\ResepsController;
use App\Http\Controllers\ReviewController;
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

Route::get('/', function () {
    return view('home');
});

Route::resource('/reseps', ResepsController::class);
Route::resource('/destinasis', DestinasiController::class);

Route::controller(ReviewController::class)->group(function () {
    Route::get('/reviews', 'index');
    Route::get('/reviews/{review}', 'show');
    Route::delete('/reviews/{review}', 'destroy');
});
