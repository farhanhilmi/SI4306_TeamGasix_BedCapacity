<?php

use App\Http\Controllers\Authentication;
use App\Http\Controllers\HospitalController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PengelolaController;
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

// Route::get('/', function () {
//     return view('index');
// });
Route::get('/', [MainController::class, 'index']);
Route::get('/login', [MainController::class, 'login']);
Route::get('/register', [MainController::class, 'register']);
Route::post('/register/proses', [Authentication::class, 'prosesRegistration'])->name('prosesRegis');
Route::post('/login/proses', [Authentication::class, 'prosesLogin'])->name('prosesLogin');

Route::resource('data/pengelola', PengelolaController::class);
Route::resource('data/hospitals', HospitalController::class)->name('GET', 'dataRumahSakit');