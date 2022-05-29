<?php
use App\Http\Controllers\DestinasiController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;
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


Route::get('/',[HomeController::class, 'index'])->middleware('auth');

Route::resource('/reseps', ResepsController::class)->middleware('auth');
Route::resource('/destinasis',DestinasiController::class)->middleware('auth');


Route::controller(ReviewController::class)->group(function () {
    Route::get('/reviews', 'index');
    Route::get('/reviews/{review}', 'show');
    Route::delete('/reviews/{review}', 'destroy');
});

Route::get('/login',[LoginController::class,'index'])->middleware('guest')->name('login');
Route::post('/login',[LoginController::class,'login']);

Route::controller(RegisterController::class)->group(function (){
    Route::get('/register', 'index')->middleware('guest');
    Route::post('/register', 'register');
});

Route::post('/logout',[LogoutController::class,'logout']);


