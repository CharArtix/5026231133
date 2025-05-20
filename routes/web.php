<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
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

route::get('TugasLinktree', function () {
    return view('linktree');
});

route :: get('Pertemuan4', function () {
    return view('web');
});

route :: get('UTS', function () {
    return view('index');
});
 route :: get('Pertemuan7_2', function () {
    return view('js2');
});

route :: get('Pertemuan1', function () {
    return view('pertama');
});

route :: get('Pertemuan2', function () {
    return view('bootstrap1');
});

route :: get('Pertemuan3', function () {
    return view('bootstrap2');
});

route :: get('Pertemuan7', function () {
    return view('js1');
});

route :: get('FrontEnd', function () {
    return view('list');
});
