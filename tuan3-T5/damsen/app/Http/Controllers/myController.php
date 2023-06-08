<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
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
    public function postlienhe(Request $req)
    {
      Mail::send('mail.contact',[
        'name'=>$req->name,
        'content'=>$req->content,
        'email'=>$req->email,
        'diachi'=>$req->diachi,
        'numberphone'=>$req->numberphone,
      ], function($mail) use($req){
        $mail->to('giacphan09@gmail.com',$req->name);
        $mail->from($req->email);
        $mail->subject('Test mail');

      });
      
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
