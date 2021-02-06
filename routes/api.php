<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProvinsiController;
use App\Http\Controllers\Api\ApiController;
use App\Http\Controllers\Api\NegaraController;
use App\Models\Provinsi;
use App\Models\Laporan;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Provinsi Controller
Route::get('provinsi', [ProvinsiController::class, 'index']);
Route::post('provinsi', [ProvinsiController::class, 'store']);
Route::get('provinsi/{id}', [ProvinsiController::class, 'show']);
Route::post('provinsi/update/{id}', [ProvinsiController::class, 'update']);
Route::delete('/provinsi/{id}', [ProvinsiController::class, 'destroy']);

// API Controller
Route::get('indonesia', [ApiController::class, 'indonesia']);

// Per Provinsi
Route::get('provinsiapi', [ApiController::class, 'provinsi_index']);
Route::get('kotaapi', [ApiController::class, 'kota_index']);
Route::get('kecamatanapi', [ApiController::class, 'kecamatan_index']);
Route::get('kelurahanapi', [ApiController::class, 'kelurahan_index']);
Route::get('rwapi', [ApiController::class, 'rw_index']);
Route::get('provinsiapi/{id}', [ApiController::class, 'showprovinsi']);

// Negara
Route::get('negaraapi', [NegaraController::class, 'negara_index']);