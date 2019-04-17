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

Route::group(['prefix' => '/admin', 'namespace' => 'Admin', 'middleware' => ['auth', 'admin']], function () {
    //========================= CRUD lokasi =============================//
    Route::group(['prefix' => '/lokasi'], function () {
        Route::get('/datalokasi', 'LokasiController@index')->name('datalokasi');
        Route::get('/createlokasi', 'LokasiController@create')->name('createlokasi');
        Route::post('/storelokasi', 'LokasiController@store')->name('storelokasi');
        Route::get('/editlokasi/{id}', 'LokasiController@edit')->name('editlokasi');
        Route::put('/updatelokasi/{id}', 'LokasiController@update')->name('updatelokasi');
        Route::delete('/deletelokasi', 'LokasiController@destroy')->name('deletelokasi');
    });
    //====================================================================================//

    //========================= CRUD kendaraan =============================//
    Route::group(['prefix' => '/kendaraan'], function () {
        Route::get('/datakendaraan', 'KendaraanController@index')->name('datakendaraan');
        Route::get('/createkendaraan', 'KendaraanController@create')->name('createkendaraan');
        Route::post('/storekendaraan', 'KendaraanController@store')->name('storekendaraan');
        Route::get('/editkendaraan/{id}', 'KendaraanController@edit')->name('editkendaraan');
        Route::put('/updatekendaraan/{id}', 'KendaraanController@update')->name('updatekendaraan');
        Route::delete('/deletekendaraan', 'KendaraanController@destroy')->name('deletekendaraan');
    });
    //====================================================================================//

    //========================= CRUD barang =============================//
    Route::group(['prefix' => '/barang'], function () {
        Route::get('/databarang', 'BarangController@index')->name('databarang');
        Route::get('/createbarang', 'BarangController@create')->name('createbarang');
        Route::post('/storebarang', 'BarangController@store')->name('storebarang');
        Route::get('/editbarang/{id}', 'BarangController@edit')->name('editbarang');
        Route::put('/updatebarang/{id}', 'BarangController@update')->name('updatebarang');
        Route::delete('/deletebarang', 'BarangController@destroy')->name('deletebarang');
    });
    //====================================================================================//
    //========================= CRUD User =============================//
    Route::group(['prefix' => '/user'], function () {
        // Route::get('/', 'UserController@admin')->name('dataadmin');
        Route::get('/datauser', 'UserController@index')->name('datauser');
        Route::get('/createuser', 'UserController@create')->name('createuser');
        Route::post('/storeuser', 'UserController@store')->name('storeuser');
        Route::get('/edituser/{id}', 'UserController@edit')->name('edituser');
        Route::put('/updateuser/{id}', 'UserController@update')->name('updateuser');
        Route::delete('/deleteuser', 'UserController@destroy')->name('deleteuser');
    });

    Route::group(['prefix' => '/pemasaran'], function () {
        Route::get('/datapemasaran', 'PemasaranController@index')->name('datapemasaran');
        Route::get('/createpemasaran', 'PemasaranController@create')->name('createpemasaran');
        Route::post('/storepemasaran', 'PemasaranController@store')->name('storepemasaran');
        Route::get('/editpemasaran/{id}', 'PemasaranController@edit')->name('editpemasaran');
        Route::put('/updatepemasaran/{id}', 'PemasaranController@update')->name('updatepemasaran');
        Route::delete('/deletepemasaran', 'PemasaranController@destroy')->name('deletepemasaran');
    });
});

Route::group(['prefix' => '/sales', 'namespace' => 'Sales', 'middleware' => ['auth', 'sales']], function () {
    Route::get('/datasales', 'SalesController@index')->name('datasales');
});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
