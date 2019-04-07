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

Route::group(['prefix' => '/admin', 'namespace' => 'Admin'], function () {
    //========================= CRUD lokasi =============================//
    Route::group(['prefix' => '/lokasi', 'namespace' => 'Admin'], function () {
        Route::get('/datalokasi', 'LokasiController@index')->name('datalokasi');
        Route::get('/createlokasi', 'LokasiController@create')->name('createlokasi');
        Route::post('/storelokasi', 'LokasiController@store')->name('storelokasi');
        Route::get('/editlokasi/{id}', 'LokasiController@edit')->name('editlokasi');
        Route::put('/updatelokasi/{id}', 'LokasiController@update')->name('updatelokasi');
        Route::delete('/deletelokasi/{id}', 'LokasiController@destroy')->name('deletelokasi');
    });
    //====================================================================================//

    //========================= CRUD kendaraan =============================//
    Route::group(['prefix' => '/kendaraan', 'namespace' => 'Admin'], function () {
        Route::get('/datakendaraan', 'KendaraanController@index')->name('datakendaraan');
        Route::get('/createkendaraan', 'KendaraanController@create')->name('createkendaraan');
        Route::post('/storekendaraan', 'KendaraanController@store')->name('storekendaraan');
        Route::get('/editkendaraan/{id}', 'KendaraanController@edit')->name('editkendaraan');
        Route::put('/updatekendaraan/{id}', 'KendaraanController@update')->name('updatekendaraan');
        Route::delete('/deletekendaraan/{id}', 'KendaraanController@destroy')->name('deletekendaraan');
    });
    //====================================================================================//

    //========================= CRUD barang =============================//
    Route::group(['prefix' => '/barang', 'namespace' => 'Admin'], function () {
        Route::get('/databarang', 'BarangController@index')->name('databarang');
        Route::get('/createbarang', 'BarangController@create')->name('createbarang');
        Route::post('/storebarang', 'BarangController@store')->name('storebarang');
        Route::get('/editbarang/{id}', 'BarangController@edit')->name('editbarang');
        Route::put('/updatebarang/{id}', 'BarangController@update')->name('updatebarang');
        Route::delete('/deletebarang/{id}', 'BarangController@destroy')->name('deletebarang');
    });
    //====================================================================================//
});

// Route::group(['prefix' => '/admin', 'namespace' => 'Admin'], function () {

// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
