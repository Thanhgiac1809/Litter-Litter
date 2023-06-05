<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class myController extends Controller
{
    public function trangchu()
    {
        return view('trangchu');
    }
      public function lienhe()
    {
        return view('lienhe');
    }
      public function sukien()
    {
        return view('sukien');
    }
      public function sk1()
    {
        return view('sk1');
    }
      public function thanhtoan()
    {
        return view('thanhtoan');
    }
         public function tttc()
    {
        return view('tttc');
    }
}
