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
    return redirect('pendaftaran');
});

Route::prefix('admin')->group(function () {
    Route::get('','Admin\AdminController@index');

    // Prodi
    Route::get('prodi','Admin\ProdiController@index');
    Route::get('prodi/create','Admin\ProdiController@createprodi');
    Route::get('jenjang/create','Admin\ProdiController@createjenjang');
    Route::post('jenjang/store','Admin\ProdiController@storejenjang');
    Route::post('prodi/store','Admin\ProdiController@storeprodi');
    Route::get('jenjang/edit/{id}','Admin\ProdiController@editjenjang');
    Route::get('prodi/edit/{id}','Admin\ProdiController@editprodi');
    Route::put('jenjang/update/{id}','Admin\ProdiController@updatejenjang');
    Route::put('prodi/update/{id}','Admin\ProdiController@updateprodi');
    Route::get('prodi/delete/{id}','Admin\ProdiController@destroyprodi');
    Route::get('jenjang/delete/{id}','Admin\ProdiController@destroyjenjang');
    // End prodi routes

    Route::get('pendaftar','Admin\PendaftarController@index');
    Route::get('pendaftar/{id}','Admin\PendaftarController@view');

});

Route::get('/register', function () {
    return redirect('login');
});

Route::resource('pendaftaran','Mahasiswa\PengajuanController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
