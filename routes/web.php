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

//Halaman Utama
Route::get('/', 'BerandaController@index');

//Halaman Tentang
Route::get('tentang', 'TentangController@index');

//Halaman Berita
Route::get('informasi', 'BeritaController@index');
Route::get('informasi/search', 'BeritaController@search');
Route::get('informasi/{judul}', 'BeritaController@show');

//Halaman Penduduk
Route::get('penduduk', 'PendudukController@keluarga');
Route::get('penduduk/search', 'PendudukController@search');
Route::get('penduduk/{id}', 'PendudukController@show');

//Halaman Galeri
Route::get('galeri', 'GaleriController@index');

Auth::routes();

//Halaman Pengurus
Route::get('pengurus', 'PengurusController@index');

Route::prefix('pengurus')->group(function(){

	Route::prefix('beranda')->group(function(){
		Route::get('/', 'Pengurus\BerandaController@index');
	});

	Route::prefix('tentang')->group(function(){
		Route::get('/', 'Pengurus\TentangController@index');
		Route::get('/{id}/edit', 'Pengurus\TentangController@edit');
		Route::put('/{id}/edit', 'Pengurus\TentangController@update');
	});

	Route::prefix('berita')->group(function(){
		Route::get('/', 'Pengurus\BeritaController@index');
		Route::get('tambah', 'Pengurus\BeritaController@create');
		Route::post('tambah', 'Pengurus\BeritaController@store');
		Route::get('/{id}', 'Pengurus\BeritaController@show');
		Route::get('/{id}/edit', 'Pengurus\BeritaController@edit');
		Route::put('/{id}/edit', 'Pengurus\BeritaController@update');
		Route::delete('/{id}/delete', 'Pengurus\BeritaController@destroy');
	});

	Route::prefix('keluarga')->group(function(){
		Route::get('/', 'Pengurus\KeluargaController@index');
		Route::get('tambah', 'Pengurus\KeluargaController@create');
		Route::post('tambah', 'Pengurus\KeluargaController@store');
		Route::get('/{id}/edit', 'Pengurus\KeluargaController@edit');
		Route::put('/{id}/edit', 'Pengurus\KeluargaController@update');
		Route::delete('/{id}/delete', 'Pengurus\KeluargaController@destroy');
		Route::get('/{id}', 'Pengurus\KeluargaController@show');
	});

	Route::prefix('warga')->group(function(){
		Route::get('/', 'Pengurus\WargaController@index');
		Route::get('tambah', 'Pengurus\WargaController@create');
		Route::post('tambah', 'Pengurus\WargaController@store');
		Route::get('/{id}', 'Pengurus\WargaController@show');
		Route::get('/{id}/edit', 'Pengurus\WargaController@edit');
		Route::put('/{id}/edit', 'Pengurus\WargaController@update');
		Route::delete('/{id}/delete', 'Pengurus\WargaController@destroy');
	});

	Route::prefix('galeri')->group(function(){
		Route::get('/', 'Pengurus\GaleriController@index');
		Route::get('/tambah', 'Pengurus\GaleriController@create');
		Route::post('/tambah', 'Pengurus\GaleriController@store');
		Route::get('/{id}/edit', 'Pengurus\GaleriController@edit');
		Route::put('/{id}/edit', 'Pengurus\GaleriController@update');
		Route::delete('/{id}/delete', 'Pengurus\GaleriController@destroy');
		Route::get('/{id}', 'Pengurus\GaleriController@show');
	});

	Route::prefix('android')->group(function(){
		Route::get('/', 'Pengurus\userAndroidController@index');
		Route::get('tambah', 'Pengurus\userAndroidController@create');
		Route::post('tambah', 'Pengurus\userAndroidController@store');
		Route::get('/{id}/edit', 'Pengurus\userAndroidController@edit');
		Route::put('/{id}/edit', 'Pengurus\userAndroidController@update');
		Route::delete('/{id}/delete', 'Pengurus\userAndroidController@destroy');
	});

	Route::prefix('apk')->group(function(){
		Route::get('/', 'Pengurus\ApkController@index');
		Route::get('tambah', 'Pengurus\ApkController@create');
		Route::post('tambah', 'Pengurus\ApkController@store');
		Route::get('/{id}/edit', 'Pengurus\ApkController@edit');
		Route::put('/{id}/edit', 'Pengurus\ApkController@update');
		Route::delete('/{id}/delete', 'Pengurus\ApkController@destroy');
	});

	Route::prefix('user')->group(function(){
		Route::get('/', 'Pengurus\UserController@index');
		Route::get('reset',['as'=>'reset', 'uses'=> 'Pengurus\UserController@formResetPassword']);
		Route::post('reset',['as'=>'reset', 'uses'=> 'Pengurus\UserController@resetPassword']);
		Route::get('/{id}', 'Pengurus\UserController@edit');
		Route::put('/{id}', 'Pengurus\UserController@update');
	});
});

Route::group(['prefix' => 'apiandroid'], function(){
	Route::resource('warga', 'Api\WargaController', ['except' => ['create, edit']]);
	Route::resource('user', 'Api\UserController', ['except' => ['create, edit']]);
	Route::resource('keluarga', 'Api\KeluargaController', ['except' => ['create, edit']]);
});

Route::prefix('webview')->group(function(){
	Route::get('berita', 'WebView\BeritaController@index');
	Route::get('berita/{juduls}', 'WebView\BeritaController@show');
	Route::get('galeri', 'WebView\GaleriController@index');
});