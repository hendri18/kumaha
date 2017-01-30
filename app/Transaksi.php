<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
   protected $table="transaksi";

  	 public function anggota(){
    	return $this->belongsTo('App\Anggota','id');
    }
}

