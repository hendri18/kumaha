<?php

namespace App;
use App\Hobi;
use Illuminate\Database\Eloquent\Model;

class Hobi extends Model
{
    protected $table='hobis';
      public function anggota(){
    	return $this->belongsTo('App\Anggota');
    }
}
