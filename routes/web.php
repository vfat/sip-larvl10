<?php

use App\Http\Controllers\homeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Pengguna\ListPenggunaController;
use App\Http\Controllers\Pengguna\TambahPenggunaController;
use App\Http\Controllers\Pengguna\FormEditPenggunaController;
use App\Http\Controllers\Pengguna\EditPenggunaController;
use App\Http\Controllers\Pengguna\DeletePenggunaController;
use App\Http\Controllers\Balita\ListBalitaController;
use App\Http\Controllers\Balita\FormTambahBalitaController;
use App\Http\Controllers\Balita\TambahBalitaController;
use App\Http\Controllers\Balita\ImportBalitaController;
use App\Http\Controllers\Balita\ExportBalitaController;
use App\Http\Controllers\Balita\DetailBalitaController;
use App\Http\Controllers\Mobile\DashboardMobileOrtuController;
use App\Http\Controllers\Mobile\ProfileBalitaCOntroller;
use App\Http\Controllers\Mobile\DetailBalitaController as Detbal;
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

Route::get('/', homeController::class)->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard', homeController::class)->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/mobile/ortu/{token}', DashboardMobileOrtuController::class)->name('mobile.ortu');
Route::get('/mobile/balita/{token}', ProfileBalitaCOntroller::class)->name('mobile.balita');
Route::get('/mobile/balita/detail/{id}/{token}', Detbal::class)->name('mobile.balitadetail');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/pengguna', ListPenggunaController::class)->name('pengguna');
    Route::post('/pengguna/tambah', TambahPenggunaController::class)->name('pengguna.tambah');
    Route::get('/pengguna/edit/{id}', FormEditPenggunaController::class)->name('pengguna.editform');
    Route::post('/pengguna/edit', EditPenggunaController::class)->name('pengguna.edit');
    Route::get('/pengguna/delete/{id}', DeletePenggunaController::class)->name('pengguna.delete');

    Route::get('/balita', ListBalitaController::class)->name('balita');
    Route::get('/balita/tambah', FormTambahBalitaController::class)->name('balita.formtambah');
    Route::post('/balita/tambah', TambahBalitaController::class)->name('balita.tambah');
    Route::post('/balita/import', ImportBalitaController::class)->name('balita.import');
    Route::get('/balita/export', ExportBalitaController::class)->name('balita.export');
    Route::get('/balita/detail/{id}', DetailBalitaController::class)->name('balita.detail');
});

require __DIR__.'/auth.php';
