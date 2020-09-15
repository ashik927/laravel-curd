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
    return view('welcome');
});
Route::get('/', 'AdminController@admin');
Route::get('/datatable-advance', 'AdminController@datableAdvance');
//category work
Route::get('/category', 'CategoryController@category');
Route::get('/categoryadd', 'CategoryController@categoryadd');
Route::post('admin/categoryupdate', 'CategoryController@categoryupdate')->name('category.update');

Route::get('/admin/category/edit/{id}', 'CategoryController@edit')->name('category.edit');


Route::post('/categoryinsert', 'CategoryController@store')->name('category.store');

Route::post('/admin/category/delete','CategoryController@delete')->name('category.delete');
Route::get('/admin/category/post/{id}', 'CategoryController@single')->name('category.single');
//category close
//product strat
Route::get('/product', 'ProductModelController@product');
Route::post('/admin/product/delete','ProductModelController@delete')->name('product.delete');
Route::get('/admin/product/post/{id}', 'ProductModelController@single')->name('product.single');

Route::post('admin/productupdate', 'ProductModelController@productupdate')->name('product.update');
Route::get('/admin/product/edit/{id}', 'ProductModelController@edit')->name('product.edit');
//product end

Route::get('/seo', 'ReviewController@seo');

Route::get('/review', 'ReviewstableController@review');

//order work
Route::get('/order', 'OrderController@order');
Route::post('/admin/order/delete','OrderController@delete')->name('order.delete');
Route::get('/admin/order/post/{id}', 'OrderController@single')->name('order.single');
//order close