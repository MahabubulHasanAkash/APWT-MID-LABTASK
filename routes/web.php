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

Route::get('/',  function () {
	return redirect('/login');
});
Route::get('/login', 'loginController@index');
Route::post('/login', 'loginController@verify');
Route::get('/logout', 'logoutController@index');
Route::get('/signup', 'signupController@index');
Route::group(['middleware' => ['session']], function () {
	Route::get('/home', 'homeController@index')->middleware('session')->name('home.index');
	Route::get('/system/sales', 'saleController@index')->middleware('session')->name('home.sale');
	Route::get('/system/sales/sell-product', 'saleController@sellproduct')->middleware('session')->name('home.sale');
});
