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
use App\Http\Controllers\Balita\FormEditBalitaController;
use App\Http\Controllers\Balita\EditBalitaController;
use App\Http\Controllers\Balita\DeleteBalitaController;
use App\Http\Controllers\Mobile\DashboardMobileOrtuController;
use App\Http\Controllers\Mobile\ProfileBalitaCOntroller;
use App\Http\Controllers\Mobile\DetailBalitaController as Detbal;
use App\Http\Controllers\Mobile\GrafikKmsController;
use App\Http\Controllers\Mobile\QrBayiController;
use App\Http\Controllers\Mobile\DashboardMobileKaderController;
use App\Http\Controllers\Mobile\DashboardMobileBidanController;
use App\Http\Controllers\Mobile\KaderProfileController;
use App\Http\Controllers\Mobile\KaderDaftarHadirController;
use App\Http\Controllers\Mobile\KaderPenjadwalanController;
use App\Http\Controllers\Mobile\KaderCreateJadwalController;
use App\Http\Controllers\Mobile\KaderDeleteJadwalController;
use App\Http\Controllers\Mobile\KaderInputController;
use App\Http\Controllers\Mobile\KaderInputCreateController;
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

Route::get('/mobile/ortu/{token}', ProfileBalitaCOntroller::class)->name('mobile.ortu');
Route::get('/mobile/balita/{token}', ProfileBalitaCOntroller::class)->name('mobile.balita');
Route::get('/mobile/balita/detail/{id}/{token}', Detbal::class)->name('mobile.balitadetail');
Route::get('/mobile/balita/kms/{id}/{token}', GrafikKmsController::class)->name('mobile.kmsbalita');
Route::get('/mobile/balita/qr/{id}/{token}', QrBayiController::class)->name('mobile.qrbalita');
Route::get('/mobile/kader/{token}', DashboardMobileKaderController::class)->name('mobile.kader');
Route::get('/mobile/bidan/{token}', DashboardMobileBidanController::class)->name('mobile.bidan');
Route::get('/mobile/kader/profile/{token}', KaderProfileController::class)->name('mobile.kaderprofile');
Route::get('/mobile/kader/daftarhadir/{token}', KaderDaftarHadirController::class)->name('mobile.kaderdaftarhadir');
Route::get('/mobile/kader/penjadwalan/{token}', KaderPenjadwalanController::class)->name('mobile.kaderpenjadwalan');
Route::post('/mobile/kader/penjadwalan/create/{token}', KaderCreateJadwalController::class)->name('mobile.kaderpenjadwalancreate');
Route::get('/mobile/kader/penjadwalan/delete/{token}', KaderDeleteJadwalController::class)->name('mobile.kaderpenjadwalandelete');
Route::get('/mobile/kader/input/{id}/{token}', KaderInputController::class)->name('mobile.kaderinput');
Route::post('/mobile/kader/input/create/{token}', KaderInputCreateController::class)->name('mobile.kaderinputcreate');


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
    Route::get('/balita/edit/{id}', FormEditBalitaController::class)->name('balita.editform');
    Route::post('/balita/edit', EditBalitaController::class)->name('balita.edit');
    Route::get('/balita/delete/{id}', DeleteBalitaController::class)->name('balita.delete');
});

require __DIR__.'/auth.php';
