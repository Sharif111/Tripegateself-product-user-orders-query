<?php

use Illuminate\Support\Facades\Route;




Route::get('/', function () {
    return view('index');
});

Route::get('show-order','OrderController@index')->name('show-order');
Route::get('get-order','OrderController@getOrder');

Route::get('highest-amount-order/query','OrderController@mostSellingProductAmountWise')->name('highest-amount-order/query');
Route::get('highest-amount-order/eloquent','OrderController@mostSellingProductAmountWiseElo')->name('highest-amount-order/eloquent');

Route::get('highest-selling-product/query','OrderController@mostSellingProductPriceWise')->name('highest-selling-product/query');
Route::get('highest-selling-product/eloquent','OrderController@mostSellingProductPriceWiseElo')->name('highest-selling-product/eloquent');

Route::get('country-wise-order','OrderController@viewCountryOrder')->name('country-wise-order');
Route::get('product-wise-order','OrderController@viewProductOrder')->name('product-wise-order');
