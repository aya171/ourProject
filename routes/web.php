<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes();
/// products
Route::get('/home', 'HomeController@index')->name('home');
Route::group(['prefix'=>'products','namespace'=>'front\products'],function(){
    Route::get('/all','ProductsController@index');
    // Route::get('/','ProductsController@all');

});
Route::group(['prefix'=>'cities','namespace'=>'front\cities'],function(){
    Route::get('/all','CitiesController@index');
    // Route::get('/','ProductsController@all');

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
