@extends('templates.index')
@section('thanhtoan')
<div class="bd">
    <h1 class="sk mt-5 mb-5" style="text-align:center;">THANH TOÁN</h1>
    <div class="buyve mt-5">
        <div class="row">
            <div class="col-lg-6 inf" style="margin-left: 300px;">
                <div class="bgvc">
                    <h3 class="vcgd" >Vé Cổng-Vé Gia Đình</h3>
                </div>
                <div class="ttct">
                    <div class="row1">
                        <p class="ttt">Số tiền thanh toán</p>
                        <p style="margin-left: 80px;" class="ttt">Số Lượng Vé</p>
                        <p class="sd">Ngày Sử Dụng</p>
                    </div>
                    <input class="intt">
                    <input class="inslv">
                    <input style="margin-left:20px;  width: 342px;height: 56px;background: #FFFFFF;box-shadow: inset -1px 3px 3px rgba(179, 91, 11, 0.5);border-radius: 16px;flex: none;order: 0;flex-grow: 1;" type="text">
                    <p class="namett">Thông tin liên hệ</p>
                    <input class="ttlh" type="text"> <br>
                    <p class="namett">Số điện thoại</p>
                    <input class="dt" type="text"><br>
                    <p class="namett">Email</p>
                    <input style="   width: 391px;height: 56px;background: #FFFFFF;box-shadow: inset -1px 3px 3px rgba(179, 91, 11, 0.5);border-radius: 16px;flex: none;order: 1;align-self: stretch;flex-grow: 0;" type="text">
                </div>
            </div>
            <div class="col-lg-3 ">
                <div class="savett">
                    <div class="bgtttt">
                        <h3 class="tttt">THÔNG TIN THANH TOÁN</h3>
                    </div>
                    <div class="thanhtoan">
                        <h5 class="namett">Số Thẻ</h5>
                        <input class="sothe" type="text">
                        <h5 class="namett">Họ Và Tên Chủ Thẻ</h5>
                        <input class="sothe" type="text">
                        <h5 class="namett">Ngày Hết Hạn</h5>
                        <input style="   width: 342px;height: 56px;background: #FFFFFF;box-shadow: inset -1px 3px 3px rgba(179, 91, 11, 0.5);border-radius: 16px;flex: none;order: 0;flex-grow: 1;" type="text">
                        <h5 class="namett">CVV/CVC</h5>
                        <input class="cv" type="text">
                        <a href="ttthanhcong.html"> <button style=" position: absolute;  left: 18%;right: 0%; top: 82%;bottom: 10.49%; height: 60.868553161621094px;width: 368.01788330078125px;color: #FFFFFF;background: #FF000A;font-family: 'iCiel Koni';font-style: normal;font-weight: 900;font-size: 28px;line-height: 41px;letter-spacing: 0.06em;">
                                Gửi liên hệ</button></a>

                    </div>
                </div>
            </div>
        </div>
        <img class="alex" src="fontend/img/Trini_Arnold_Votay1 2.png" alt="">
    </div>
</div>
@endsection