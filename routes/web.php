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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::resource('usuarios', 'UserController')->middleware('auth');

//Rutas para la sección de notas
Route::resource('/notas/todas', 'NotasController');
Route::get('/notas/favoritas', 'NotasController@favoritas');
Route::get('/notas/archivadas', 'NotasController@archivadas');

//Rutas para la sección de Discografía
Route::get('grupos/index', 'GruposController@index')->middleware('auth');
Route::get('grupos/ficha/{id}', 'GruposController@ficha')->middleware('auth');

Route::get('discos/index', 'DiscosController@index')->middleware('auth');