<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\SesiController;
use Illuminate\Queue\RedisQueue;

//  Route Middleware
Route::middleware(['guest'])->group(function() {
    Route::get('/',[SesiController::class,'index']);
    Route::post('/',[SesiController::class,'login']);
});

Route::get('/home', function () {
    return Redirect ('/adm');
});

//  Route To mahasiswa
Route::get('/adm',[AdminController::class,'index']);
Route::get('/logout',[SesiController::class,'logout']);

// Route To MahasiswaController
Route::get('/mahasiswa','App\Http\Controllers\MahasiswaController@tampil');
Route::get('/tambah','App\Http\Controllers\MahasiswaController@tambah');
Route::post('/mahasiswa','App\Http\Controllers\MahasiswaController@tampil');

// Route Tambah
Route::post('/mahasiswa/store','App\Http\Controllers\MahasiswaController@simpan');

// Route Ubah
Route::get('/mahasiswa/ubah/{nim}','App\Http\Controllers\MahasiswaController@ubah');
Route::post('/mahasiswa/edit','App\Http\Controllers\MahasiswaController@edit');

// Route Delete
Route::get('/hapus/{nim}','App\Http\Controllers\MahasiswaController@hapus');

// Route Export
Route::get('/mahasiswa/cetak_pdf','App\Http\Controllers\MahasiswaController@cetak_pdf');
Route::get('/mahasiswa/export_excel','App\Http\Controllers\MahasiswaController@export_excel');

// Route Session
Route::get('/sesision/tampil','App\Http\Controllers\MahasiswaController@tampilkanSession');
Route::get('/sesision/buat','App\Http\Controllers\MahasiswaController@buatSession');
Route::get('/sesision/hapus','App\Http\Controllers\MahasiswaController@hapusSession');
