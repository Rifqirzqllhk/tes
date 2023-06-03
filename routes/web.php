<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [BukuController::class, 'index']);
Route::get('login', [LandingController::class, 'login'])->name('pages.login');
Route::get('signup', [LandingController::class, 'signup'])->name('pages.registrasi');

Route::post('prosesLogin', [UserController::class, 'cekUser']);

Route::get('logout', [UserController::class, 'logout']);

Route::get('admin', [UserController::class, 'indexAdmin']);

Route::get('/drama', [GenreController::class, 'indexDrama']);

Route::get('/horror', [GenreController::class, 'indexHorror']);

Route::get('/action', [GenreController::class, 'indexAction']);
