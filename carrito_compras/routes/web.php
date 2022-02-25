<?php

use Illuminate\Support\Facades\Route;

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
 //******************************************** */
        //RUTA PARA EL CONTROLADOR PRODUCTOS - METODO POST
        //******************************************** */
        //admin/solicitud/editar/desarrollo

        Route::group(["prefix" => "editar"], function () {
            Route::post("/", [PrductosController::class, "EditarProducto"]);

        });
