<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $table='buku';
    public function member(){
    return $this->belongsTo('App\Member') ;
    }  
}
