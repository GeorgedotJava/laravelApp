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
    return view('index');
});


Route::get('/produtos', 'ProdutoController@index');
Route::get('/categorias', 'CategoriaController@index');

Route::get('/categorias/novo', 'CategoriaController@create');
Route::post('/categorias', 'CategoriaController@store');