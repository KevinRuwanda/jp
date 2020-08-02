<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order extends Model
{
	protected $table = 'produk';
	public $timestamps = true;
	protected $fillable = [
		'tgl_kedatangan', 'paket', 'nama_penerima','tanggal','alamat','foto_alamat','foto_ktp','jam_sampai','phone','email'
	];
	public function user()
	{
		return $this->belongsTo('App\User','pekerja_id');
	}
	public function transaksi()
	{
		return $this->hasOne('App\transaksi');
	}
	public function produks()
	{
		return $this->belongsTo('App\Produk','produk_id');
	}

}
