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

/* General get request route. */
Route::get('/statistik-keuangan', 'PagesController@statistikKeuangan');
// Route::get('/timeline-keuangan', 'PagesController@timelineKeuangan');
Route::get('/statistik-barang', 'PagesController@statistikBarang');
// Route::get('/database-barang', 'PagesController@databaseBarang');
Route::get('/Tokema', 'PagesController@aboutTokema');
Route::get('/suplai-barang', 'ItemsController@itemsList');
Route::get('/suplai-barang/{id}', 'ItemsController@redirectToSupply');
Route::get('/finances/history', 'FinancesController@indexHistory');
Route::get('/home', 'HomeController@index')->name('home');

/* Route to handle form */
// Route::get("addmore","FormsController@addMore");
Route::get('/penjualan', 'PagesController@penjualan');
Route::post('/penjualan/submit','FormsController@addRow');

/* Put request. */
Route::put('/suplai-barang/{id}/submit', 'ItemsController@supply');

/* Route resource. */
Route::resource('/finances','FinancesController');
Route::resource('/incomes','IncomesController');
Route::resource('/outcomes','OutcomesController');
Route::resource('/items','ItemsController');
Route::resource('/inflows','InflowsController');
Route::resource('/outflows','OutflowsController');
Route::resource('/invoices','InvoicesController');

/* Authentication */
Auth::routes();
