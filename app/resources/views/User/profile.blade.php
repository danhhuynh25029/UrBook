@extends('Home.home')
@section('body')
<div class="container-fluid" style="width: 93%;">
  <div class="row body">
            <div class="col-3 side" style="margin-top: 30px;">
                <div class="row" style="text-align: center;">
                    <div class="col-12">
                        <img class="img-thumbnail" src="{{asset('image/users.png')}}" width="100px">
                    </div>
                    <div class="col-12" style="margin-top: 20px;">
                        <a href="{{route('signout')}}" style="color:red"><i class="fas fa-sign-out-alt" style="font-size: 30px;"></i></a>
                    </div>
                </div>
                <ul class="list-group" style="text-align: left;margin-top: 25px;">
                    <li class="list-group-item"><a href="{{ route('profile.infor')}}">Thông tin cá nhân</a></li>
                    <li class="list-group-item"><a href="{{ route('profile.ordercompeleted')}}">Đơn hàng đã hoàn thành</a></li>
                    <li class="list-group-item"><a href="{{ route('profile.ordering')}}">Đơn hàng đang giao</a></li>
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