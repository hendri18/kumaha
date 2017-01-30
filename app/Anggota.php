<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
	protected $table='anggota';
	 public function hobis(){
    	return $this->hasMany('App\Hobi','id_anggota');
    }

    public function barang(){
    	return $this->hasMany('App\Barang','id_barang');
    }
}
