<?php

use App\Models\LaporanKegiatan;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProyekController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LaporanKegiatanController;

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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/home', [DashboardController::class,'dashboard']);

Route::middleware(['auth'])->group(function () {
//dashboard
//laporan-kegiatan
Route::get('/laporankegiatan', [LaporanKegiatanController::class,'index']);
Route::get('/laporankegiatan/tambahlaporankegiatan', [LaporanKegiatanController::class,'tambahlaporankegiatan']);
Route::post('/laporankegiatan/store', [LaporanKegiatanController::class,'store']);
Route::get('/laporankegiatan/{id}/ubah', [LaporanKegiatanController::class,'ubah']);
Route::put('/laporankegiatan/{id}', [LaporanKegiatanController::class,'update']);
Route::delete('/laporankegiatan/{id}', [LaporanKegiatanController::class,'destroy']);
Route::get('/laporankegiatan/export', [LaporanKegiatanController::class,'export']);
//proyek
Route::get('/proyek', [ProyekController::class,'index']);
Route::get('/proyek/tambahproyek', [ProyekController::class,'tambahproyek']);
Route::post('/proyek/store', [ProyekController::class,'store']);
Route::get('/proyek/{id}/ubah', [ProyekController::class,'ubah']);
Route::put('/proyek/{id}', [ProyekController::class,'update']);
Route::delete('/proyek/{id}', [ProyekController::class,'destroy']);
//karyawan
Route::get('/karyawan', [KaryawanController::class,'index']);
Route::get('/karyawan/tambahkaryawan', [KaryawanController::class,'tambahkaryawan']);
Route::post('/karyawan/store', [KaryawanController::class,'store']);
Route::get('/karyawan/{id}/ubah', [KaryawanController::class,'ubah']);
Route::put('/karyawan/{id}', [KaryawanController::class,'update']);
Route::delete('/karyawan/{id}', [KaryawanController::class,'destroy']);

});

