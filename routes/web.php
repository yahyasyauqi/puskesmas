<?php

use App\Http\Controllers\DokterController;
use App\Http\Controllers\PasienController;
use App\Models\Dokter;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

// Route untuk menambahkan daftar pasien
Route::get('/pasien',[PasienController::class, 'index']);

// route untuk menampilkan form tambah pasien
Route::get('/pasien/create',[PasienController::class, 'create']); 

// route untuk memproses from tambah pasien
Route::post('/pasien',[PasienController::class, 'store']);

// route untuk  menampilkan daftar dokter
Route::get('/dokter',[DokterController::class, 'index']);

//route untuk menampilkan form tambah dokter
Route::get('/dokter/create',[DokterController::class, 'create']);

// route untuk memproses from tambah pasien
Route::post('/dokter',[DokterController::class, 'store']);
