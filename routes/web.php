<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Negara;
use App\Provinsi;
use App\Kota;
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
    return view('welcome');
});


Route::get('dashboard',function () {
    return view('layouts.master');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('test',function () {
    return view('layouts.master2');
});

Route::get('negara',function () {
    return view('Negara.index');
});

Route::get('jumlahkasus',function () {
    return view('JumlahKasus.index');
});

Route::get('provinsi',function () {
    return view('Provinsi.index');
});

Route::get('rekapkasus',function () {
    return view('RekapKasus.index');
});

Route::get('kota',function () {
    return view('Kota.index');
});

Route::get('kecamatan',function () {
    return view('Kecamatan.index');
});

Route::get('kelurahan',function () {
    return view('Kelurahan.index');
});

Route::get('rw',function () {
    return view('Rw.index');
});

use App\Http\Controllers\NegaraController;
Route::resource('negara', NegaraController::class);

use App\Http\Controllers\KasusController;
Route::resource('kasus', KasusController::class);

use App\Http\Controllers\ProvinsiController;
Route::resource('provinsi', ProvinsiController::class);

use App\Http\Controllers\KotaController;
Route::resource('kota', KotaController::class);

use App\Http\Controllers\KecamatanController;
Route::resource('kecamatan', KecamatanController::class);

use App\Http\Controllers\KelurahanController;
Route::resource('kelurahan', KelurahanController::class);

use App\Http\Controllers\RwController;
Route::resource('rw', RwController::class);

use App\Http\Controllers\Kasus2Controller;
Route::resource('kasus2', Kasus2Controller::class);