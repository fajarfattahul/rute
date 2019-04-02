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
    return view('welcome');
});

Route::get('/master', function () {
    return view('master.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Admin
Route::group(['namespace' => 'Admin'], function (){
    //Admin
    Route::group(['prefix' => 'admin'], function (){
        //sales
        Route::group(['prefix' => 'sales'], function (){
            Route::get('/', 'SalesController@index')->name('index_sales');
            // Route::get('/create', 'SalesController@create')->name('film_create');
            // Route::post('/store', 'SalesController@store')->name('film_store');
            // Route::get('/{id?}/edit', 'SalesController@edit')->name('film_edit');
            // Route::put('/{id?}', 'SalesController@update')->name('film_update');
            // Route::get('/{id?}', 'SalesController@delete')->name('film_delete');
            // Route::get('pencarian', 'SalesController@pencarian')->name('film_pencarian');
        });
    });
});