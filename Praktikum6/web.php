<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\TabelController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\DaftarmenuController;
use App\Http\Controllers\MenuController;

Route::get('/tampil_mahasiswa', function () {
    return view('datamahasiswa');
});

Route::get('/menu_masakan', function () {
    return view('menu_masakan');
});

Route::get('/daftar_mahasiswa', 
[MahasiswaController::class, 'index']); 

Route::get('/tabel', function () {
    return view('tabel_buku');
});

Route::get('/form', function () {
    return view('form_buku');
});

Route::get('/form_buku', 
[FormController::class, 'index']);

Route::get('/tabel_buku', 
[TabelController::class, 'index']);

//Routing data barang
Route::get('/databarang', 
[BarangController::class, 'data_barang']);

//Routing buku
Route::get('/formulir', [BukuController::class, 'formulir']);
Route::post('/formulir/proses', [BukuController::class, 'formulir_proses']);

Route::get('/menu', [DaftarmenuController::class, 'index']);
Route::post('/pesanan', [DaftarmenuController::class, 'menu_proses']);

Route::get('/menumakan', [MenuController::class, 'menu']);
Route::post('/formulir', [MenuController::class, 'proses_pesanan']);

?>