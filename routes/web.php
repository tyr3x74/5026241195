<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiDBController;
use App\Http\Controllers\TelevisiController;


Route::get('/televisi', [TelevisiController::class, 'index']);
Route::get('/televisi/tambah', [TelevisiController::class, 'tambah']);
Route::post('/televisi/store', [TelevisiController::class, 'store']);
Route::get('/televisi/edit/{id}', [TelevisiController::class, 'edit']);
Route::post('/televisi/update', [TelevisiController::class, 'update']);
Route::get('/televisi/hapus/{id}', [TelevisiController::class, 'hapus']);
Route::get('/televisi/cari', [TelevisiController::class, 'cari']);

Route::get('/pegawai', [PegawaiDBController::class, 'index']);
Route::get('/pegawai/tambah', [PegawaiDBController::class, 'tambah']);
Route::post('/pegawai/store', [PegawaiDBController::class, 'store']);
Route::get('/pegawai/edit/{id}', [PegawaiDBController::class, 'edit']);
Route::post('/pegawai/update', [PegawaiDBController::class, 'update']);
Route::get('/pegawai/hapus/{id}', [PegawaiDBController::class, 'hapus']);
Route::get('/pegawai/cari', [PegawaiDBController::class, 'cari']);
Route::get('/', function () {
    return view('template');
});
Route::get('/menu', function () {
    return view('menu');
});
Route::get('/pertemuan1', function () {
    return view('pertemuan1');
});
Route::get('/pertemuan2', function () {
    return view('pertemuan2');
});
Route::get('/pertemuan3', function () {
    return view('pertemuan3');
});
Route::get('/pertemuan4', function () {
    return view('pertemuan4');
});
Route::get('/pertemuan5', function () {
    return view('pertemuan5');
});
Route::get('/pertemuan6', function () {
    return view('pertemuan6');
});
