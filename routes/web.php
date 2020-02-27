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
Route::get('/index', 'PageController@index')->name('index');
Route::get('/createinvoice', 'CreateInvoiceController@create')->name('createinvoice.create');
Route::post('createinvoice', 'CreateInvoiceController@store')->name('createinvoice.store');
Route::get('/showinvoice', 'CreateInvoiceController@show')->name('showinvoice.show');
Route::get('delete/{id_faktury}','CreateInvoiceController@destroy')->name('showinvoice.destroy');
Route::get('delete/{id_faktury}','CreateInvoiceController@destroy')->name('showinvoice.destroy');
Route::get('edit/{id_faktury}','CreateInvoiceController@edit')->name('editinvoice.edit');
Route::post('edit/{id_faktury}','CreateInvoiceController@store')->name('editinvoice.store');