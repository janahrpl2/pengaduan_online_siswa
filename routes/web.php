<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\PengaduanController;

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

//LOGIN REGISTER //
//register

Route::get('/register',[AuthController:: class,'register']);
Route::post('/register/store',[AuthController:: class,'storeRegister']);

//login
Route::get('/login',[AuthController:: class,'login']);
Route::post('/login/store',[AuthController:: class,'storeLogin']);


/// Route Admin//
Route::get('/dashboard/anggota', [AnggotaController:: class,'indexanggota']);
Route::get('/laporan/pengaduan',[PengaduanController:: class,'pengaduan']);
Route::get('/profile', function(){
    return view('pagesAdmin.formulir.profile');
});
Route::get('/listanggota', [AnggotaController:: class,'listanggota']);
Route::get('/edit/anggota{id}', [AnggotaController::class,'editanggota']);
Route::post('update/anggota{id}',[AnggotaController::class,'update']);
Route::get('/tambah/anggota',[AnggotaController::class,'create']);
Route::post('/store/anggota',[AnggotaController::class,'storeanggota']);
Route::get('/destroyanggota/{id}',[AnggotaController::class,'destroyanggota']);


// Route User //
Route::get('/user',[PengaduanController:: class,'index']);
Route::get('/tambah/pengaduan',[PengaduanController:: class,'create']);
Route::post('/store/pengaduan', [PengaduanController::class,'store']);
Route::post('/store/keterangan/{id}/update', [PengaduanController::class,'updateKeterangan']);
Route::get('/pengaduan/profile',[PengaduanController::class,'profile']);
Route::get('/dashboard',[PengaduanController::class,'dashboard']);
Route::get('/listpengaduan',[PengaduanController::class,'listpengaduan']);
Route::get('/destroyPengaduan/{id}',[PengaduanController::class,'destroyPengaduan']);
Route::get('/edit/pengaduan{id}',[PengaduanController::class,'editPengaduan']);
Route::post('update/pengaduan{id}',[PengaduanController::class,'updatePengaduan']);

//Status
Route::get('/keterangan/{id}',[PengaduanController::class,'tambahKeterangan']);
Route::post('/store/keterangan/{id}',[PengaduanController::class,'storeKeterangan']);



