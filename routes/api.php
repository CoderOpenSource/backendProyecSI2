<?php

use App\Http\Controllers\Api\ActivoController;
use App\Http\Controllers\Api\BajaController;
use App\Http\Controllers\Api\FacturaController;
use App\Http\Controllers\Api\SolicitudController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\BitacoraApiController;
use App\Http\Controllers\Api\CategoriaApiController;
use App\Http\Controllers\Api\ActivofijoApiController;
use App\Http\Controllers\Api\NotaApiController;
use App\Http\Controllers\Api\RevalorizacionApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('login', [UserController::class, 'login']);

Route::group(['middleware' => ['jwt.verify']], function (){
    Route::get('obtenerUser', [UserController::class, 'obtenerUser']);
    Route::get('obtenerUsuarios', [UserController::class, 'obtenerUsuarios']);
    Route::get('obtenerCategorias', [CategoriaApiController::class, 'index']);
    Route::get('obtenerActivosfijo', [ActivofijoApiController::class, 'index']);
    Route::get('obtenerNota', [NotaApiController::class, 'index']);
    Route::get('obtenerRevalorizacion', [RevalorizacionApiController::class, 'index']);
    Route::get('obtenerActivos', [ActivoController::class, 'obtenerActivos']);
    Route::get('obtenerActivosA', [ActivoController::class, 'obtenerActivosA']);
    Route::get('obtenerActivo', [ActivoController::class, 'obtenerActivo']);
    Route::post('actualizarFoto', [UserController::class, 'actualizarFoto']);
    Route::get('obtenerFacturas', [FacturaController::class, 'obtenerFacturas']);
    Route::get('obtenerSolicitudes', [SolicitudController::class, 'obtenerSolicitudes']);
    Route::post('crearSolicitud', [SolicitudController::class, 'crearSolicitud']);
    Route::post('eliminarSolicitud', [SolicitudController::class, 'eliminarSolicitud']);
    Route::get('obtenerBajas', [BajaController::class, 'obtenerBajas']);
    Route::post('eliminarBaja', [BajaController::class, 'eliminarBaja']);
    Route::get('obtenerBitacora', [BitacoraApiController::class, 'index']);
});


