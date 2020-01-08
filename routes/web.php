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
Route::get('/ruang','pageController@ruang');
Route::get('/ruang/create','ruangController@create');
Route::get('/ruang/{id}/delete','ruangController@delete');
Route::post('/storeruang','ruangController@store')->name('storeruang');
Route::get('/ruang/{id}/edit','ruangController@edit');
Route::put('/updateruang/{id}','ruangController@update')->name('ruang.update');

Route::get('/jenis','pageController@jenis');
Route::get('/jenis/create','jenisController@create');
Route::get('/jenis/{id}/delete','jenisController@delete');
Route::post('/storejenis','jenisController@store')->name('storejenis');
Route::get('/jenis/{id}/edit','jenisController@edit');
Route::put('/updatejenis/{id}','jenisController@update')->name('jenis.update');

Route::get('/inventaris','pageController@inventaris');
Route::get('/inventaris/create','inventarisController@create');
Route::get('/inventaris/{id}/delete','inventarisController@delete');
Route::post('/storeinventaris','inventarisController@store')->name('storeinventaris');
Route::get('/inventaris/{id}/edit','inventarisController@edit');
Route::put('/updateinventaris/{id}','inventarisController@update')->name('inventaris.update');

Route::get('/detail_pinjam','pageController@detail_pinjam');
Route::get('/detail_pinjam/create','detail_pinjamController@create');
Route::get('/detail_pinjam/{id}/delete','detail_pinjamController@delete');
Route::post('/storedetail_pinjam','detail_pinjamController@store')->name('storedetail_pinjam');
Route::get('/detail_pinjam/{id}/edit','detail_pinjamController@edit');
Route::put('/updatedetail_pinjam/{id}','detail_pinjamController@update')->name('detail_pinjam.update');

Route::get('/peminjaman','pageController@peminjaman');
Route::get('/peminjaman/create','peminjamanController@create');
Route::post('/storepeminjaman','peminjamanController@store')->name('storepeminjaman');
Route::get('/peminjaman/{id}/delete','peminjamanController@delete');
Route::get('/peminjaman/{id}/edit','peminjamanController@edit');
Route::put('/updatepeminjaman/{id}','peminjamanController@update')->name('peminjaman.update');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
