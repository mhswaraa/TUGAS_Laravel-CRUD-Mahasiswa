<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;


// Route To MahasiswaController
Route::get('/','App\Http\Controllers\MahasiswaController@index');
Route::get('/mahasiswa','App\Http\Controllers\MahasiswaController@tampil');
Route::get('/tambah','App\Http\Controllers\MahasiswaController@tambah');
Route::post('/mahasiswa','App\Http\Controllers\MahasiswaController@tampil');

Route::post('/mahasiswa/store','App\Http\Controllers\MahasiswaController@simpan');

Route::get('/mahasiswa/ubah/{nim}','App\Http\Controllers\MahasiswaController@ubah');
Route::post('/mahasiswa/edit','App\Http\Controllers\MahasiswaController@edit');

Route::get('/hapus/{nim}','App\Http\Controllers\MahasiswaController@hapus');

Route::get('/mahasiswa/cetak_pdf','App\Http\Controllers\MahasiswaController@cetak_pdf');
Route::get('/mahasiswa/export_excel','App\Http\Controllers\MahasiswaController@export_excel');

