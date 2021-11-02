<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function formulir(){
            return view('formulir');
    }

    public function formulir_proses(Request $request){
        //$token = $request->session()->token();
        //echo $token;

        $nama = $request->input('nama');
        $alamat = $request->input('alamat');

        return "Nama : ".$nama.", Alamat :".$alamat;
    }
}
