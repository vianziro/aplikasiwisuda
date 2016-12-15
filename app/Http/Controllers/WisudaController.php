<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WisudaController extends Controller
{
    public function wisuda(){
      $data = \DB::table('tabel_data_wisuda')
            ->get();
      return view('welcome',compact('data'));
    }
}
