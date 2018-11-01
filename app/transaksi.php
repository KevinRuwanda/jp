<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
	protected $table = 'transactions';
	public $timestamps = true;
	protected $fillable = [
		'order_id', 'status', 'pekerja_id','tujuan'
	];
	public function order()
	{
		return $this->belongsTo('App\order','order_id');
	}
    //
}
