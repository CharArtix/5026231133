<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;
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
    return view('index');
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

Route::get('/pegawai/{nama}',[PegawaiController::class, 'index']);

Route::get('/formulir', [PegawaiController::class, 'formulir']);

Route::post('/formulir/proses', [PegawaiController::class, 'proses']);

// route blog
Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);
