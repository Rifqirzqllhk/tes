<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PesananController;
use App\Models\Pesanan;

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

// route umum
Route::get('/', [BukuController::class, 'index']);
Route::get('/login', [LandingController::class, 'login']);
Route::view('/signup', 'pages.registrasi');
Route::post('/signed', [UserController::class, 'create']);
Route::post('/prosesLogin', [UserController::class, 'cekUser']);
Route::get('/logout', [UserController::class, 'logout']);
Route::get('/invoice/{id}', [PesananController::class, 'show']);


// route admin
Route::get('/admin', [BukuController::class, 'index']);
Route::get('/setBuku', [UserController::class, 'indexAdmin']);
Route::get('/admin/addBuku', [BukuController::class, 'create']);
Route::post('/admin/store', [BukuController::class, 'store']);
Route::post('/admin/edit/{id}', [BukuController::class, 'edit']);
Route::post('/admin/edit', [BukuController::class, 'update']);
Route::post('/delete/{id}', [BukuController::class, 'destroy']);

Route::get('/setUser', [UserController::class, 'getAlluser']);
Route::post('/delete/user/{id}', [userController::class, 'destroy']);
Route::post('/edit/isadmin/{id}', [userController::class, 'setIsAdmin']);

// routing genre
Route::get('/drama', [GenreController::class, 'indexDrama']);
Route::get('/horror', [GenreController::class, 'indexHorror']);
Route::get('/action', [GenreController::class, 'indexAction']);

// route pesanan
Route::post('/prosesPemesanan', [PesananController::class, 'create']);
Route::get('/pesanan/{id}', [PesananController::class, 'show']);
Route::get('/admin/transaksi/{id}', [PesananController::class, 'adminShow']);
Route::get('/pesanans', [PesananController::class, 'index']);

// routing buku
Route::get('/detail/{id}', [BukuController::class,'detail']);
