<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function buku(){
    	$buku = App\Buku::all();
		return view('bukku')
    }
}
