<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;

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

Route::get('login', [LandingController::class, 'login'])->name('pages.login');
Route::get('signup', [LandingController::class, 'signup'])->name('pages.registrasi');
Route::resource('/', LandingController::class);

Route::get('/login', function () {
    return view('pages.login');
});

Route::post('/prosesLogin', [UserController::class, 'cekUser']);

Route::get('/logout', [UserController::class, 'logout']);
