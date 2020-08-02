<?php


Route::group(['middleware' => 'auth'], function(){
	Route::resource('produk', 'ProdukController', ['except' => ['show']]);
	Route::get('/produk/{id}/destroy', 'ProdukController@destroy');

	Route::resource('pekerja', 'PekerjaController');
	Route::get('/pekerja/{id}/destroy', 'PekerjaController@destroy');
	Route::get('/pembeli', 'PekerjaController@pembeli');

	Route::get('/setting/{id}', 'HomeController@setting');
	Route::put('/Setting-edit/{id}', 'HomeController@updateProfile');

	Route::resource('pesanan', 'PesananController');
	Route::post('/bayar-produk', 'PesananController@bayarProduk');
	Route::get('/transaksi-pembayaran', 'TransaksiController@pembayaranProduk');
	Route::post('/pembayaran/upload', 'TransaksiController@pembayaranUpload');
	Route::get('/transaksi-berhasil', 'TransaksiController@ucapanBerhasil');
	Route::get('/history', 'TransaksiController@historyPesanan');
	Route::get('/pembayaran-verifikasi', 'TransaksiController@getPembayaranverif');
	Route::post('/pembayaran/verifikasi/{id}', 'TransaksiController@updatePembayaran');
	Route::get('/pengiriman/pesanan', 'TransaksiController@pengirimanPesanan');
	Route::post('/pengiriman/pesanan-user', 'TransaksiController@pengirimanPekerja');
	Route::get('/pengiriman-pesanan-pekerja', 'TransaksiController@pengirimanDataPesanan');
	Route::post('/pengiriman/paket/pesanan-user', 'TransaksiController@updatePaketPengiriman');
	Route::get('/data-orders/{id}/destroy', 'PesananController@destroyOrders');

	Route::resource('transaksi', 'TransaksiController');
	Route::resource('Setting', 'SettingController', ['except' => ['index','show']]);
	Route::resource('Transaction', 'TransactionController', ['except' => ['index','show']]);
	Route::resource('Order', 'OrderController', ['except' => ['index','show']]);
	Route::resource('Profile', 'ProfileController', ['except' => ['index','show']]);

	Route::put('/Data/keamanan/{id}', 'PekerjaController@update_keamanan');
});


Route::get('/home', 'HomeController@index');
Route::get('/', 'HomeController@index');

Route::resource('produk', 'ProdukController', ['only' => ['show']]);
Route::resource('ProdukUser','ProdukUserController');


Auth::routes();
