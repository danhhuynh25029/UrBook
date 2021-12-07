@extends('Home.home')
@section('body')
<div class="container-fluid" style="width: 93%;">
  <div class="row body">
            <div class="col-3 side" style="margin-top: 30px;">
                <ul class="list-group" style="text-align: left">
                    <li class="list-group-item"><a href="{{ route('profile.infor')}}">Thông tin cá nhân</a></li>
                    <li class="list-group-item"><a href="{{ route('profile.ordering')}}">Đơn hàng đã hoàn thành</a></li>
                    <li class="list-group-item"><a href="{{ route('profile.ordercompeleted')}}">Đơn hàng đang giao</a></li>
                  </ul>
                  
            </div>
            <div class="col content">
                <div class="container" >
                    @yield('content')    
                </div>
            </div>
        </div>
    <!-- panigation -->
    
    
</div>

@endsection