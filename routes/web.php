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

Route::get('/', 'HomeController@index')->name('home');

Route::get('/admins', function () {
    return view('layouts.admin.dashboard');
});


Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/itemslist', 'ItemListController');
Route::get('/search', 'ItemListController@search');

Route::resource('/shows','ShowController');


Auth::routes();

Route::group(['middleware'=>'auth'],function(){


Route::resource('/commodity_exchanges','Commodity_ExchangesController');
Route::resource('/categories','CategoryController');
Route::resource('/items','ItemController');
Route::resource('/itemsprices','ItemPriceController');
Route::resource('/admins','AdminController');
Route::resource('/managers','ManagerController');

Route::resource('/users','RoleController');


Route::resource('/myaccount','MyAccountController');
Route::resource('/buyitems','BuyItemController');
});