<?php

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

//View
Route::name('index')->get('index/', function() { return view('content.index'); });
Route::name('registro')->get('registro/', function() { return view('content.registro'); });
Route::name('login')->get('login/', function() { return view('login.login'); });
//Registro Usuario/Cliente
Route::name('guardarCliente')->post('guardarCliente/','PatinaController@guardar_registro');

//Login
Route::name('validar_login')->post('validar_login/','LoginController@validar_login');