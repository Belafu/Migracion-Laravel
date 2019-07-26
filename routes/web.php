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
    return view('index');
});

Route::get('/product-add', 'ProductController@create');
Route::post('/product-add', 'ProductController@store');

Route::get('/products', 'ProductController@index');
Route::get('/product/edit/{id}', 'ProductController@edit');
Route::post('/product/edit/{id}', 'ProductController@update');

//  /product/{id} dice que al metodo show del controlador le paso la variable id
Route::get('/product/{id}', 'ProductController@show');
Route::post('/product/{id}', 'ProductController@destroy');
Route::get('/product/addtocart/{id}', 'CartController@store');//->middleware('auth');

Route::get('/cart', 'CartController@show');//->middleware('auth');
Route::post('/cart/{id}', 'CartController@update');
Route::delete('/cart/{id}', 'CartController@destroy');

Route::get('/products/search', 'HeaderController@search');

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/resumen', 'CartController@comprar')->middleware('auth');
Route::post('/productosFiltrados', 'ProductController@filtros');
