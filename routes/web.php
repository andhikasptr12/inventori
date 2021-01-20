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

/**
 * mendapatkan url atau route baru
 * untuk master barang
 */

 Route::group(['prefix' => 'master-barang'], function(){
     Route::get('/index','BarangController@index')->name('master-barang');
     Route::get('/formulir-barang', 'MasterBarang\MasterBarangController@create')->name('master-barang.formulir-barang');
     Route::get('/edit', 'MasterBarang\MasterBarangController@edit')->name('master-barang.edit');
 });

 Route::group(['prefix' => 'transaksi'], function(){
     Route::get('/index','Transaksi\TransaksiController@index')->name('transaksi');
     Route::get('/create','Transaksi\BarangKeluarController@create')->name('transaksi.barang-keluar');   
 });