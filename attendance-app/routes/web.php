<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PresensiController;
use App\Http\Controllers\DetailPresensiController;
use App\Http\Controllers\AuthController;
use App\Http\Middleware\IsGuru;


Route::middleware(['auth', IsGuru::class])->group(function () {
    Route::get('/presensi/create', [PresensiController::class, 'create'])->name('presensi.create');
    Route::get('/presensi', [PresensiController::class, 'index'])->name('presensi.index');
    Route::post('/presensi', [PresensiController::class, 'store'])->name('presensi.store');
    Route::get('/presensi/{id}/edit', [PresensiController::class, 'edit'])->name('presensi.edit');
    Route::put('/presensi/{id}', [PresensiController::class, 'update'])->name('presensi.update');
    Route::get('/presensi/{id}', [PresensiController::class, 'destroy'])->name('presensi.delete');
    Route::put('/detail-presensi/{id}', [DetailPresensiController::class, 'update'])->name('detail-presensi.update');
});


Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


Route::get('/', [PresensiController::class, 'index'])->name('presensi.index');
Route::get('/presensi/{id}/detail', [PresensiController::class, 'show'])->name('presensi.show');