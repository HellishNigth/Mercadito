<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductosController;


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("tipproduc/get", [ProductosController::class, "getTipProducs"]);
Route::get("productos/get", [ProductosController::class, "getProductos"]);
Route::post("productos/post", [ProductosController::class, "crearProducto"]);
Route::post("productos/delete", [ProductosController::class, "cancelarProducto"]);