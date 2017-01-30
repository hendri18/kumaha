<?php

namespace App\Http\Controllers;
use App\Hobi;
use App\Barang;
use App\Anggota;
use App\Transaksi;
use Illuminate\Http\Request;

class HobiController extends Controller
{

    public function relasi($id){
    	$anggota=Anggota::find($id);
    	return view('/relasi', ['anggota'=> $anggota]);
    }

    public function naruto($id){
        $anggota=Anggota::find($id);
        return view('/naruto', ['anggota'=> $anggota])->with('anggota', $anggota);;
    }

    public function create(){
    	return view('/create');
    }

    public function store(Request $request){
    	$anggota = New Transaksi;
    	$anggota->id_anggota = $request->id_anggota;
    	$anggota->id_barang =$request->id_barang;
    	$anggota->save();

    	return redirect('/');
    }
}
