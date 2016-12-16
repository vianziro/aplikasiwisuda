<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WisudaController extends Controller
{
    public function wisuda(){
      $data = \DB::table('tabel_data_wisuda')
            ->first();
      return view('welcome',compact('data'));
    }
    public function ambil_data_wisuda(Request $Request){
          if($Request->ajax()){
            $urutan = $Request->no+1;
            $data = \DB::table('tabel_data_wisuda')
                    ->where('no',$urutan)
                    ->first();
              return response()->json($data);
          }
    }
}
