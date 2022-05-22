<?php

use App\Http\Controllers\ResepController;
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

Route::get('/reseps', [ResepController::class, 'index']);
Route::get('/reseps/create', [ResepController::class, 'create']);
Route::post('/reseps', [ResepController::class, 'store']);
