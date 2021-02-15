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

/*Route::get('/', function () {
    return view('welcome');
});*/


Route::get('/entrada','App\Http\Controllers\EntradaController@index')->name('entrada');

/*----------------CLIENTES--------------*/

Route::get('/clientes','App\Http\Controllers\ClientesController@index')->name('clientes.index');

Route::get('/clientes/{id}/show','App\Http\Controllers\ClientesController@show')->name('clientes.show');

//criar
Route::get('/clientes/create','App\Http\Controllers\ClientesController@create')->name('clientes.create')->middleware('auth');

Route::post('/clientes','App\Http\Controllers\ClientesController@store')->name('clientes.store')->middleware('auth');

//atualizar

Route::get('/clientes/{id}/edit','App\Http\Controllers\ClientesController@edit')->name('clientes.edit')->middleware('auth');

Route::patch('/clientes','App\Http\Controllers\ClientesController@update')->name('clientes.update')->middleware('auth');

//apagar

Route::get('/clientes/{id}/delete','App\Http\Controllers\ClientesController@delete')->name('clientes.delete')->middleware('auth');

Route::delete('/clientes','App\Http\Controllers\ClientesController@destroy')->name('clientes.destroy')->middleware('auth');

/*---------------ENCOMENDAS--------------*/

Route::get('/encomendas','App\Http\Controllers\EncomendasController@index')->name('encomendas.index');

Route::get('/encomendas/{id}/show','App\Http\Controllers\EncomendasController@show')->name('encomendas.show');

//criar
Route::get('/encomendas/create','App\Http\Controllers\EncomendasController@create')->name('encomendas.create')->middleware('auth');

Route::post('/encomendas','App\Http\Controllers\EncomendasController@store')->name('encomendas.store')->middleware('auth');

//atualizar

Route::get('/encomendas/{id}/edit','App\Http\Controllers\EncomendasController@edit')->name('encomendas.edit')->middleware('auth');

Route::patch('/encomendas','App\Http\Controllers\EncomendasController@update')->name('encomendas.update')->middleware('auth');

//apagar

Route::get('/encomendas/{id}/delete','App\Http\Controllers\EncomendasController@delete')->name('encomendas.delete')->middleware('auth');

Route::delete('/encomendas','App\Http\Controllers\EncomendasController@destroy')->name('encomendas.destroy')->middleware('auth');

/*----------------VENDEDORES--------------*/

Route::get('/vendedores','App\Http\Controllers\VendedoresController@index')->name('vendedores.index');

Route::get('/vendedores/{id}/show','App\Http\Controllers\VendedoresController@show')->name('vendedores.show');

//criar

Route::get('/vendedores/create','App\Http\Controllers\VendedoresController@create')->name('vendedores.create')->middleware('auth');

Route::post('/vendedores','App\Http\Controllers\VendedoresController@store')->name('vendedores.store')->middleware('auth');

//atualizar

Route::get('/vendedores/{id}/edit','App\Http\Controllers\VendedoresController@edit')->name('vendedores.edit')->middleware('auth');

Route::patch('/vendedores','App\Http\Controllers\VendedoresController@update')->name('vendedores.update')->middleware('auth');

//apagar

Route::get('/vendedores/{id}/delete','App\Http\Controllers\VendedoresController@delete')->name('vendedores.delete')->middleware('auth');

Route::delete('/vendedores','App\Http\Controllers\VendedoresController@destroy')->name('vendedores.destroy')->middleware('auth');

/*----------------PRODUTOS--------------*/

Route::get('/produtos','App\Http\Controllers\ProdutosController@index')->name('produtos.index');

Route::get('/produtos/{id}/show','App\Http\Controllers\ProdutosController@show')->name('produtos.show');

//criar

Route::get('/produtos/create','App\Http\Controllers\ProdutosController@create')->name('produtos.create')->middleware('auth');

Route::post('/produtos','App\Http\Controllers\ProdutosController@store')->name('produtos.store')->middleware('auth');

//atualizar

Route::get('/produtos/{id}/edit','App\Http\Controllers\ProdutosController@edit')->name('produtos.edit')->middleware('auth');

Route::patch('/produtos','App\Http\Controllers\ProdutosController@update')->name('produtos.update')->middleware('auth');

//apagar

Route::get('/produtos/{id}/delete','App\Http\Controllers\ProdutosController@delete')->name('produtos.delete')->middleware('auth');

Route::delete('/produtos','App\Http\Controllers\ProdutosController@destroy')->name('produtos.destroy')->middleware('auth');

/*----------------ENCOMENDAS/PRODUTOS--------------*/
Route::get('/encomendasprodutos','App\Http\Controllers\EncomendasProdutosController@index')->name('encomendasProdutos.index');

Route::get('/encomendasprodutos/{id}/show','App\Http\Controllers\EncomendasProdutosController@show')->name('encomendasProdutos.show');


/*----------------FORM--------------*/

Route::post('/form','App\Http\Controllers\FormController@processarForm')->name('processar.form');

Route::get('form','App\Http\Controllers\FormController@mostrarForm')->name('mostrar.form');

/*---------------login--------------*/

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
