@extends('templates.index')
@section('lienhe')
<style>

</style>
<div class="bd">
    <h1 class="sk mt-5" style="text-align:center;">LIÊN HỆ</h1>
    <div class="buyve mt-5">
        <div class="row">
            <div class="col-lg-6 inf" style="margin-left: 340px;">
                <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse ac mollis
                    justo.
                    Etiam volutpat tellus quis risus volutpat, ut posuere ex facilisis. </p>
                <form action="{{url('/')}}" method="post">
                    @csrf
                    <input name="name" style=" margin:0px 30px 30px 90px ;width: 293px;height: 56px;background: #FFFFFF;box-shadow: inset -1px 3px 3px rgba(179, 91, 11, 0.5);border-radius: 16px;flex: none;order: 0;flex-grow: 0; " type="text" placeholder="Tên">
                    <input name="email" style="width: 491px;height: 56px;background: #FFFFFF;box-shadow: inset -1px 3px 3px rgba(179, 91, 11, 0.5);border-radius: 16px;flex: none;order: 0;flex-grow: 0; " type="email" placeholder="email">
                    <input name="numberphone" style=" margin:0px 30px 0px 90px ; width: 293px;height: 56px;background: #FFFFFF;box-shadow: inset -1px 3px 3px rgba(179, 91, 11, 0.5);border-radius: 16px;flex: none;order: 0;flex-grow: 1; " type="number" placeholder="Số Điện Thoại">
                    <input name="diachi" class="dc" type="text" placeholder="Địa Chỉ">
                    <input name="content" style="margin-top: 15px; width:820px;" class="note " type="text" placeholder="lời Nhắn">
                    <button class="bt " type="submit">Gửi liên hệ</button>


                </form>
            </div>
            <div class="col-lg-3  ml-5">
                <div class="infove">

                    <div class="pt-5 pl-5">
                    <div style="display: flex;">
                            <img style="margin-right: 10px; height: 60px;" src="fontend/img/location.png" alt="">
                            <div>
                                <h4>Đia Chỉ :</h4>
                                <p class="ml-1">86/33 Âu Cơ, Phường 9, Quận Tân Bình, TP. Hồ Chí Minh</p>
                            </div>
                         
                          </div>
                    </div>
                </div>
                <div class="infove mt-5">
                    <div class="pt-5 pl-5">
                    <div style="display: flex;">
                            <img style="margin-right: 10px; height: 60px;" src="fontend/img/location.png" alt="">
                            <div>
                                <h4>Đia Chỉ :</h4>
                                <p class="ml-1">86/33 Âu Cơ, Phường 9, Quận Tân Bình, TP. Hồ Chí Minh</p>
                            </div>
                         
                          </div>
                    </div>
                </div>
                <div class="infove mt-5">
                    <div class="pt-5 pl-5">
                    <div style="display: flex;">
                            <img style="margin-right: 10px; height: 60px;" src="fontend/img/location.png" alt="">
                            <div>
                                <h4>Đia Chỉ :</h4>
                                <p class="ml-1">86/33 Âu Cơ, Phường 9, Quận Tân Bình, TP. Hồ Chí Minh</p>
                            </div>
                         
                          </div>
                </div>
            </div>
        </div>
        <img class="alex" src="fontend/img/Alex_AR_Lay_Do shadow 1.png" alt="">

    </div>
</div>
@endsection