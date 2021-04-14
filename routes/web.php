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



//View
Route::name('index')->get('/','PatinaController@index');//Index
Route::name('registro')->get('registro/', function() { return view('content.registro'); });
Route::name('login')->get('login/', function() { return view('login.login'); });

//View Productos 
Route::name('productos')->get('productos/','PatinaController@productos');

//Registro Usuario/Cliente
Route::name('nuevo_usuario')->post('nuevo_usuario/','RegisterController@guardar_registro');

//Login
Route::name('validar_login')->post('validar_login/','LoginController@validar_login');

//----------------ADMINISTRACION

Route::name('admin')->get('admin/','AdminController@admin');
Route::name('admin_usuarios')->get('admin_usuarios/','AdminController@admin_usuarios');
Route::name('admin_productos')->get('admin_productos/','AdminController@admin_productos');
Route::name('admin_pedidos')->get('admin_pedidos/','AdminController@admin_pedidos');
//---------Edicionn
Route::name('editar_usuario')->get('editar_usuario/{id}','AdminController@editar_usuario');
Route::name('salvar_usuario')->put('salvar_usuario/{id}','AdminController@salvar_usuario');