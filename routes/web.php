<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiDBController;
use App\Http\Controllers\TelevisiController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\KeranjangBelanjaController;
use App\Http\Controllers\NilaiKuliahController;


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

Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');
Route::get('/siswa/create', [SiswaController::class, 'create'])->name('siswa.create');
Route::post('/siswa', [SiswaController::class, 'store'])->name('siswa.store');
Route::get('/siswa/{nrp}/edit', [SiswaController::class, 'edit'])->name('siswa.edit');
Route::put('/siswa/{nrp}', [SiswaController::class, 'update'])->name('siswa.update');
Route::get('/siswa/cari', [SiswaController::class, 'cari'])->name('siswa.cari');
Route::delete('/siswa/{nrp}', [SiswaController::class, 'destroy'])->name('siswa.destroy');

route::get('/nilai', [NilaiKuliahController::class, 'index'])->name('nilaikuliah.index');
route::get('/nilai/tambah', [NilaiKuliahController::class, 'tambah'])->name('nilaikuliah.tambah');
route::post('/nilai/store', [NilaiKuliahController::class, 'store'])->name('nilaikuliah.store');


Route::get('/keranjangbelanja', [KeranjangBelanjaController::class, 'index']);
Route::get('/keranjangbelanja/tambah', [KeranjangBelanjaController::class, 'tambah']);
Route::post('/keranjangbelanja/beli', [KeranjangBelanjaController::class, 'beli']);
Route::get('/keranjangbelanja/batal/{id}', [KeranjangBelanjaController::class, 'batal']);

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
