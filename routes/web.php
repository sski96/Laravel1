<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\RakController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\PengembalianController;


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
    return view('template.master');
});

// Route::get('/', [AuthorController::class, 'master'])->name('master');
// Route::get('/anggota', [AnggotaController::class, 'anggota'])->name('anggota');
// Route::get('/buku', [BukuController::class, 'buku'])->name('buku');
// Route::get('/petugas', [PetugasController::class, 'petugas'])->name('petugas');

Route::resource('/anggota', AnggotaController::class);
Route::resource('/petugas', PetugasController::class);
Route::resource('/buku', BukuController::class);
Route::resource('/rak', RakController::class);
Route::resource('/peminjaman', PeminjamanController::class);
Route::resource('/pengembalian', PengembalianController::class);

// Route::resource('/anggota',AnggotaController::class);