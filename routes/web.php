<?php

use App\Http\Controllers\dashboardcontroller;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\PasienContorller;
use App\Http\Controllers\PasienController;
use App\Models\Dokter;
use Illuminate\Support\Facades\Auth;
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


// Route untuk menambahkan daftar pasien
Route::get('/pasien',[PasienController::class, 'index'])->middleware('auth');


// route untuk menampilkan form tambah pasien
Route::get('/pasien/create',[PasienController::class, 'create'])->middleware('auth');


// route untuk memproses from tambah pasien
Route::post('/pasien',[PasienController::class, 'store'])->middleware('auth');


// route untuk  menampilkan daftar dokter
Route::get('/dokter',[DokterController::class, 'index'])->middleware('auth');


//route untuk menampilkan form tambah dokter
Route::get('/dokter/create',[DokterController::class, 'create'])->middleware('auth');


// route untuk memproses from tambah pasien
Route::post('/dokter',[DokterController::class, 'store'])->middleware('auth');


//  Route untuk menghapus data pasien
Route::delete('/pasien', [PasienController::class, 'destroy'])->middleware('auth');


//  Route untuk menampilkan halaman dashboard
Route::get('/',[dashboardcontroller::class,'index'])->middleware('auth');

//Route untuk menampilkan form edit pasien
Route::get('/pasien/edit/{id}', [PasienController::class, 'edit'])->middleware('auth');


// Route untuk memproses form edit pasien
Route::put('/pasien/{id}', [PasienController::class, 'update'])->middleware('auth');


//  Route untuk menampilkan form edit data pasien
Route::get('/dokter/edit/{id}',[DokterController::class,'edit'])->middleware('auth');


// Route untuk memproses form edit pasien
Route::put('/dokter/{id}', [DokterController::class, 'update'])->middleware('auth');

Auth::routes();

