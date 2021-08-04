<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\Produc_faltsController;


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Productos

Route::get("tipproduc/get", [ProductosController::class, "getTipProducs"]);
Route::get("faltante/get", [Produc_faltsController::class, "getFaltantes"]);
Route::get("productos/get", [ProductosController::class, "getProductos"]);
Route::post("productos/post", [ProductosController::class, "crearProducto"]);
Route::post("productos/delete", [ProductosController::class, "cancelarProducto"]);

//Productos faltantes

//Route::get("faltantes/get", [Produc_faltsController::class, "getFaltantes"]);
