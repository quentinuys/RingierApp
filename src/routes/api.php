<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:api')->get('user', function (Request $request) {
    return $request->user();
});

Route::get('items', 'ItemController@index');
Route::group(['prefix' => 'Item'], function () {
    Route::post('add', 'ItemController@add');
    Route::get('edit/{id}', 'ItemController@edit');
    Route::post('update/{id}', 'ItemController@update');
    Route::delete('delete/{id}', 'ItemController@delete');
});