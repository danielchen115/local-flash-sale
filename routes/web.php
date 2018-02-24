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
    return redirect('/login');
});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/products', array('as' => 'products.index', 'uses' => 'ProductController@index'));
Route::get('/sales/create', array('as' => 'sales.create', 'uses' => 'SaleController@create'));
Route::get('/sales/store', array('as' => 'sales.store', 'uses' => 'SaleController@store'));

