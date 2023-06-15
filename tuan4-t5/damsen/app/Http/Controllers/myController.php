<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class myController extends Controller
{

  // trang chu
  public function trangchu()
  {
    return view('trangchu');
  }

  public function lienhe()
  {
    return view('lienhe');
  }
  //gui email trang lien he
  public function postlienhe(Request $req)
  {
    Mail::send('mail.contact', [
      'name' => $req->name,
      'content' => $req->content,
      'email' => $req->email,
      'diachi' => $req->diachi,
      'numberphone' => $req->numberphone,
    ], function ($mail) use ($req) {
      $mail->to('giacphan09@gmail.com', $req->name);
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

  public function thanhtoan(Request $request)
  {
    $gia = $request->car;
    if ($gia = 0)
      $dongia = 30000;
    else if ($gia = 1)
      $dongia = 70000;


    $tongtien = $request->slv * $dongia;
    $dl = [
      'slv' => $request->slv,
      'ngayuse' => $request->ngayuse,
      'hoten' => $request->hoten,
      'sodienthoai' => $request->sodienthoai,
      'gmail' => $request->gmail,
      'tongtien' => $tongtien,
    ];
    session()->put('dl', $dl);

    return view('thanhtoan');
  }
  function generateRandomString($length = 10)
  {
    $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
      $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
  }
  
  public function tttc(Request $req)
  {
    $mave= $this->generateRandomString();
    $tong = $req->tongtien;
    $dateuse = Carbon::parse($req->ngaysd)->format('d-m-Y');
    $mua = [
      'ten' => $req->ten,
      'phone' => $req->phone,
      'email' => $req->email,
      'vene' => $req->vene,
      'ngaysd' => $dateuse,
      'tong' => $tong,
      'mave' => $mave,
    ];

    session()->put('mua', $mua);
    DB::insert('insert into vemua (id, hoten, phone, email,dongia ,vene,dateuse )
    values (?, ?, ?, ?, ?, ?, ?)', [1, $req->ten, $req->phone, $req->email, $tong, $req->vene,  $dateuse,]);

    return view('tttc', ['success' => 'Nhập thành công']);
  }

  //gửi mail
  public function sentmail(Request $req)
  {
    $dateuse = Carbon::parse($req->ngaysd)->format('d-m-Y');

    Mail::send('mail.buy', [
      'name' => $req->name,
      'phone' => $req->phone,
      'vene' => $req->vene,
      'ngaysd' => $dateuse,
      'tong' =>  $req->tongtien,
      'mave' => '{{session(mua.mave)}}',
    ], function ($mail) use ($req) {
      $mail->to('giacphan09@gmail.com', $req->name);
      $mail->from($req->email);
      $mail->subject('Test mail');
    });
  }

}
