<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/stores/{id}',['stores_get_one', 'uses' => 'API\StoreController@getOne']);
Route::get('/stores/{id}/sales',['sales_get', 'uses' => 'API\SaleController@get']);

