<?php

use App\Http\Controllers\ClienteController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::post('login','App\Http\Controllers\UserController@login');
Route::post('register','App\Http\Controllers\UserController@register');

Route::group(['middleware' => 'auth:api'], function () {
    Route::post('logout','App\Http\Controllers\UserController@logout');    
    Route::post('crear-venta', 'App\Http\Controllers\VentaController@crearVenta');
    Route::get('ventas', 'App\Http\Controllers\VentaController@ventas');
    Route::resource('cliente', ClienteController::class);
});
