<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\LaporanKegiatanController;
use App\Models\LaporanKegiatan;
use Illuminate\Support\Facades\Route;

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
    return view('login');
});

Route::get('/dashboard', [DashboardController::class,'dashboard']);

Route::get('/laporan-kegiatan', [LaporanKegiatanController::class,'index']);

Route::get('/karyawan', [KaryawanController::class,'index']);
Route::get('/karyawan/tambahkaryawan', [KaryawanController::class,'tambahkaryawan']);
Route::post('/karyawan/store', [KaryawanController::class,'store']);
Route::get('/karyawan/{id}/ubah', [KaryawanController::class,'ubah']);
Route::put('/karyawan/{id}', [KaryawanController::class,'update']);
