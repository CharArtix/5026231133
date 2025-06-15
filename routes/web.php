<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PegawaiDB;
use App\Http\Controllers\LaptopDB;
use App\Http\Controllers\pagecountercontroller;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\KeranjangBelanjaController;
//use App\Http\Controllers\DosenController;
//import

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/selamat', function () {
    return view('welcome');
});

Route::get('halo', function () {
	return "<h1>Halo, Selamat datang di tutorial laravel www.malasngoding.com</h1>";
});

Route::get('blog', function () {
	return view('blog');
});

Route::get('hello', [DosenController::class, 'helloworld']);

//route tugas linktree
route::get('TugasLinktree', function () {
    return view('linktree');
});

//route Pertemuan 4
route::get('Pertemuan4', function () {
    return view('web');
});

//route UTS
route::get('UTS', function () {
    return view('uts');
});

//route Pertemuan 7 (js2)
 route::get('Pertemuan7_2', function () {
    return view('js2');
});

//route Pertemuan 1
route::get('Pertemuan1', function () {
    return view('pertama');
});

//route Pertemuan 2
route::get('Pertemuan2', function () {
    return view('bootstrap1');
});

// route Pertemuan 3
route::get('Pertemuan3', function () {
    return view('bootstrap2');
});

//route Pertemuan 7
route::get('Pertemuan7', function () {
    return view('js1');
});

// route List tugas
route::get('FrontEnd', function () {
    return view('list');
});

route::get('dosen',[DosenController::class, 'index']);

// Route::get('/pegawai/{nama}',[PegawaiController::class, 'index']);

Route::get('/formulir', [PegawaiController::class, 'formulir']);

Route::post('/formulir/proses', [PegawaiController::class, 'proses']);

// route blog
Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);

//route pegawai
route::get('/pegawai', [PegawaiDB::class, 'index']);
//route tambah data
Route::get('/pegawai/tambah',[PegawaiDB::class, 'tambah']);
//route simpan data
Route::post('/pegawai/store', [PegawaiDB::class, 'store']);
//route edit data
Route::get('/pegawai/edit/{id}',[PegawaiDB::class, 'edit']);
//route update data
Route::post('/pegawai/update',[PegawaiDB::class, 'update']);
//route hapus data
Route::get('/pegawai/hapus/{id}',[PegawaiDB::class, 'hapus']);
//route cari data
route::get('/pegawai/cari', [PegawaiDB::class, 'cari']);

// route laptop
route::get('/laptop', [LaptopDB::class, 'indexL']);
// route tambah data
Route::get('/laptop/tambah', [LaptopDB::class, 'tambahL']);
// route simpan data
Route::post('/laptop/store', [LaptopDB::class, 'storeL']);
// route edit data
Route::get('/laptop/edit/{id}', [LaptopDB::class, 'editL']);
// route update data
Route::post('/laptop/update', [LaptopDB::class, 'updateL']);
// route hapus data
Route::get('/laptop/hapus/{id}', [LaptopDB::class, 'hapusL']);
// route cari data
Route::get('/laptop/cari', [LaptopDB::class, 'cariL']);

Route::get('/pagecounter', [pagecountercontroller::class, 'indexPC']);

// Tugas pertemuan 15
Route::get('/karyawan', [KaryawanController::class, 'index'])->name('karyawan.index');
Route::get('/karyawan/tambah', [KaryawanController::class, 'create']);
Route::post('/karyawan/store', [KaryawanController::class, 'store']);
Route::delete('/karyawan/hapus/{kodepegawai}', [KaryawanController::class, 'destroy'])->name('karyawan.destroy');

//route tugas pertemuan 15 keranjangbelanja
Route::get('/keranjangbelanja', [KeranjangBelanjaController::class, 'indexkeranjangbelanja']);
Route::get('/keranjangbelanja/belikeranjangbelanja/{id}', [KeranjangBelanjaController::class, 'belikeranjangbelanja']);
Route::get('/keranjangbelanja/batalkeranjangbelanja/{id}', [KeranjangBelanjaController::class, 'batalkeranjangbelanja']);
Route::post('/keranjangbelanja/storekeranjangbelanja', [KeranjangBelanjaController::class, 'storekeranjangbelanja']);
Route::post('/keranjangbelanja/updatekeranjangbelanja', [KeranjangBelanjaController::class, 'updatekeranjangbelanja']);
