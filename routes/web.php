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

Route::redirect('/','/site/cliente');

Route::get("site/cliente", "SiteController@cliente")->name('site.cliente');
Route::get("site/listar", "SiteController@listar")->name('site.listar');
Route::get("site/pedido", "SiteController@pedido")->name('site.pedido');

Route::post('site/cliente','SiteController@adicionar')->name('site.adicionar');

Route::post('site/addpedido','SiteController@addpedido')->name('site.addpedido');



