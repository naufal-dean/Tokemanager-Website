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

Route::get('/penjualan', 'PagesController@penjualan');
Route::get('/statistik-keuangan', 'PagesController@statistikKeuangan');
// Route::get('/timeline-keuangan', 'PagesController@timelineKeuangan');
Route::get('/statistik-barang', 'PagesController@statistikBarang');
// Route::get('/database-barang', 'PagesController@databaseBarang');
Route::get('/Tokema', 'PagesController@aboutTokema');

Route::resource('/finances','FinancesController');
Route::resource('/incomes','IncomesController');
Route::resource('/outcomes','OutcomesController');
Route::resource('/items','ItemsController');
Route::resource('/inflows','InflowsController');
Route::resource('/outflows','OutflowsController');
