<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DaftarmenuController extends Controller
{
    public function index(){
        return view('menu');
}
public function menu_proses(Request $request){
  

    $makanan = $request->input('makanan');
    $minuman = $request->input('minuman');

    return view ('hasil',[
        'makan'=> $makanan,
        'minum' => $minuman,
    ]);
}

}
