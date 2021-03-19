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

Route::get('/', function () {
    return view('index');
});

// Sale Order
Route::group([ 'prefix' => 'sale-order'], function () {
    Route::get('/', 'SaleOrderController@index')->name('sale-order.index');
    Route::get('/edit', 'SaleOrderController@edit')->name('sale-order.edit');
    Route::get('/detail/{id}', 'SaleOrderController@detail')->name('sale-order.detail');
});

// Purchase Order
Route::group([ 'prefix' => 'purchase-order'], function () {
    Route::get('/', 'PurchaseOrderController@index')->name('purchase-order.index');
    Route::get('/create', 'PurchaseOrderController@create')->name('purchase-order.create');
    Route::get('/edit', 'PurchaseOrderController@edit')->name('purchase-order.edit');
    Route::get('/detail', 'PurchaseOrderController@detail')->name('purchase-order.detail');
});

// Contact
Route::group([ 'prefix' => 'contact'], function () {
    Route::get('/', 'ContactController@index')->name('contact.index');
    Route::get('/detail', 'ContactController@detail')->name('contact.detail');
    Route::get('/edit', 'ContactController@edit')->name('contact.edit');
});

// Product
Route::group([ 'prefix' => 'product'], function () {
    Route::get('/', 'ProductController@index')->name('product.index');
    Route::get('/category', 'ProductController@category')->name('product.category');
    Route::get('/create', 'ProductController@create')->name('product.create');
    Route::get('/edit', 'ProductController@edit')->name('product.edit');
});