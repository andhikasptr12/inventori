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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix'=>'master-barang'],function(){
    Route::get('/index','MasterBarang\MasterBarangController@index')->name('master-barang');
    Route::get('/formulir-barang','MasterBarang\MasterBarangController@create')->name('master-barang.formulir-barang');
    Route::get('/edit/{barang}','MasterBarang\MasterBarangController@edit')->name('master-barang.edit');
    Route::post('/index','MasterBarang\MasterBarangController@store')->name('master-barang.store');
    Route::get('/show/{barang}','MasterBarang\MasterBarangController@show')->name('master-barang.show');
    Route::patch('/update/{barang}','MasterBarang\MasterBarangController@update')->name('master-barang.update');
    Route::delete('/delete/{barang}','MasterBarang\MasterBarangController@destroy')->name('master-barang.delete');
    
 });

 Route::group(['prefix'=>'suplier'],function(){
    Route::get('/index','Suplier\SuplierController@index')->name('suplier');
    Route::get('/formulir-barang','Suplier\SuplierController@create')->name('suplier.create');
    Route::get('/edit/{barang}','Suplier\SuplierController@edit')->name('suplier.edit');
    Route::post('/index','Suplier\SuplierController@store')->name('suplier.store');
    Route::get('/show/{barang}','Suplier\SuplierController@show')->name('suplier.show');
    Route::patch('/update/{barang}','Suplier\SuplierController@update')->name('suplier.update');
    Route::delete('/delete/{barang}','Suplier\SuplierController@destroy')->name('suplier.delete');
    
 });

 Route::group(['prefix'=>'transaksi'],function(){
    Route::get('/index','Transaksi\TransaksiController@index')->name('transaksi');
    Route::get('/formulir-barang','Transaksi\BarangKeluarController@create')->name('transaksi.create');
    Route::post('/index','Transaksi\BarangKeluarController@store')->name('transaksi.store');
    ;
    
 });

 Route::group(['prefix'=> 'profile'], function(){
    Route::get('index','Profile\ProfileController@index')->name('profile.index');
    Route::get('create','Profile\ProfileController@create')->name('profile.create');
    Route::post('store','Profile\ProfileController@store')->name('profile.store');
    Route::get('edit/{profile}','Profile\ProfileController@edit')->name('profile.edit');
    Route::get('show/{profile}','Profile\ProfileController@show')->name('profile.detail');
    Route::patch('update/{profile}','Profile\ProfileController@update')->name('profile.update');
    Route::delete('delete/{profile}','Profile\ProfileController@destroy')->name('profile.delete');
});


