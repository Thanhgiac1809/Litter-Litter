
 @extends('templates.index')
@section('sukien')
<div class="bd">
        <h1 class="sk">SỰ KIỆN NỔI BẬT</h1>
        <div class="row ml-5">
            <div class="col-lg-3 ev">
                <div class="card">
                    <div class="card-header" style="    background: url(fontend/img/sk1.png); ">
                    </div>
                    <div class="card-body sk1">
                        <h3>Sự Kiện 1</h3>
                        <p>Đàm sen part</p>
                        <p>30/5/2021-1/6/2021</p>
                        <h3 class="text-warning">25.000 VND</h3>
                      <a  href="{{ url('/sk1') }}">  <button class="btn btn-danger">Xem chi Tiet</button></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 ev">
                <div class="card">
                    <div class="card-header"  style="    background: url(fontend/img/sk1.png); ">
                    </div>
                    <div class="card-body sk1">
                        <h3>Sự Kiện 1</h3>
                        <p>Đàm sen part</p>
                        <p>30/5/2021-1/6/2021</p>
                        <h3 class="text-warning">25.000 VND</h3>
                        <a  href="{{ url('/sk1') }}">  <button class="btn btn-danger">Xem chi Tiet</button></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 ev">
                <div class="card">
                    <div class="card-header"  style="    background: url(fontend/img/sk3.png); ">
                    </div>
                    <div class="card-body sk1">
                        <h3>Sự Kiện 3</h3>
                        <p>Đàm sen part</p>
                        <p>30/5/2021-1/6/2021</p>
                        <h3 class="text-warning">50.000 VND</h3>
                        <a  href="{{ url('/sk1') }}">  <button class="btn btn-danger">Xem chi Tiet</button></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 ev">
                <div class="card">
                    <div class="card-header"  style="    background: url(fontend/img/sk4.png); ">
                    </div>
                    <div class="card-body sk1">
                        <h3>Sự Kiện 4</h3>
                        <p>Đàm sen part</p>
                        <p>30/5/2021-1/6/2021</p>
                        <h3 class="text-warning">55.000 VND</h3>
                        <a  href="{{ url('/sk1') }}">  <button class="btn btn-danger">Xem chi Tiet</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection