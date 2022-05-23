<?php

use App\Http\Controllers\DestinasiController;
use App\Http\Controllers\ResepsController;
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

// Route::get('/reseps', [ResepsController::class, 'index']);
// Route::get('/reseps/create', [ResepsController::class, 'create']);
// Route::post('/reseps', [ResepsController::class, 'store']);
// Route::get('/reseps/{resep}', [ResepsController::class, 'show']);
// Route::get('/reseps/{resep}/edit', [ResepsController::class, 'edit']);
// Route::put('/reseps/{resep}', [ResepsController::class, 'update']);
// Route::delete('/reseps/{resep}', [ResepsController::class, 'destroy']);

Route::resource('/reseps', ResepsController::class);
Route::resource('/destinasis', DestinasiController::class);
