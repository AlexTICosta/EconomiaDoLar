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
Route::get('/alerta/{id}', 'App\Http\Controllers\ContasCrudController@getConta');
Route::get('/conta-mes', 'App\Http\Controllers\ContasCrudController@getContaMes');
Route::get('/deletar/{id}', 'App\Http\Controllers\ContasCrudController@deleteConta');
Route::get('/','App\Http\Controllers\homeController@index');
Route::resource('/cadastro', 'App\Http\Controllers\ContaController');
//Route::get('/conta/{id}', 'App\Http\Controllers\ContasCrudController@getConta');

