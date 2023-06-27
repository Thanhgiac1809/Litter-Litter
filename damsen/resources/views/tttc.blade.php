@extends('templates.index')
@section('tttc')
<div class="bd">
    <div class="til">
        <h1 class="sk">THANH TOÁN THÀNH CÔNG</h1>
    </div>
    <div class="event1">
        <div class="row">
            <div class="col-lg-3">
                <div class="pd">
                    <div class="images">
                        <img src="fontend/img/qr.png" alt="">
                    </div>
                    <p class="macode">{{session('mua.mave')}}</p>
                    <p class="vecongne">Vé Cổng</p>
                    <p class="linehigh">---</p>
                    <p class="datesdnn">Ngày sử dụng: {{session('mua.ngaysd')}}</p>
                    <div class="check">
                        <i style="margin-left: 15px;" class="fa fa-check"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="pd">
                    <div class="images">
                        <img src="fontend/img/qr.png" alt="">
                    </div>
                    <p class="macode">{{session('mua.mave')}}</p>
                    <p class="vecongne">Vé Cổng</p>
                    <p class="linehigh">---</p>
                    <p class="datesdnn">Ngày sử dụng: {{session('mua.ngaysd')}}</p>
                    <div class="check">
                        <i style="margin-left: 15px;" class="fa fa-check"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="pd">
                    <div class="images">
                        <img src="fontend/img/qr.png" alt="">
                    </div>
                    <p class="macode">{{session('mua.mave')}}</p>
                    <p class="vecongne">Vé Cổng</p>
                    <p class="linehigh">---</p>
                    <p class="datesdnn">Ngày sử dụng: {{session('mua.ngaysd')}}</p>
                    <div class="check">
                        <i style="margin-left: 15px;" class="fa fa-check"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="pd">
                    <div class="images">
                        <img src="fontend/img/qr.png" alt="">
                    </div>
                    <p class="macode"> {{session('mua.mave')}}</p>
                    <p class="vecongne">Vé Cổng</p>
                    <p class="linehigh">---</p>
                    <p class="datesdnn">Ngày sử dụng: {{session('mua.ngaysd')}}</p>
                    <div class="check">
                        <i style="margin-left: 15px;" class="fa fa-check"></i>
                    </div>
                </div>
            </div>
        </div>
        <p style="margin-top: 100px;" class="slvne ">Số lượng: {{session('mua.vene')}} vé</p>
        <p style="margin-top: 100px;" class="page  ">Trang 1/3</p>
    </div>
    <div class="anh mt-5">
        <img src="fontend/img/Alex_AR_Lay_Do shadow 1.png" alt="">
    </div>
    <div class="nut">
        <button class="down">Tải về</button>
        <form style="display: flex;" action="{{url('/')}}" method="post">
        @csrf
            <input class="d-none" name="name" value="{{session('dl.hoten')}}">
            <input class="d-none" name="phone" value="{{session('dl.sodienthoai')}}">
            <input class="d-none" name="email" value="{{session('dl.gmail')}}">
            <input class="d-none" name="vene" value="{{session('dl.slv')}}">
            <input class="d-none" name="ngaysd" value="{{session('dl.ngayuse')}}">
            <input class="d-none" name="tongtien" value="{{ number_format(session('dl.tongtien')).' đ'}}">
            <input class="d-none" name="mave" value="{{session('mua.mave')}}">
            <button class="sent"> Gửi Email</button>
        </form>
    </div>
</div>
@endsection