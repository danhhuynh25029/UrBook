<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/admin.css')}}">
    <link rel="stylesheet" href="{{ asset('icon/css/all.min.css')}}">
</head>
<body>
    <div class="container-fluid">
        <div class="row head" style="height: 50px;">
            <div class="col" style="line-height: 50px;">
            <a href="#" style="color: white;font-size: 20px;"><i class="far fa-user"></i>admin</a>
            </div>
            <div class="col" style="line-height: 50px;">
                <a href="{{route('signout')}}" style="color:white;float: right;font-size: 20px;"><i class="fas fa-sign-out-alt" style="margin-right: 10px;"></i>logout</a>
            </div>
        </div>
        <div class="row body">
            <div class="col-2 side">
                <ul class="list-group" style="text-align: left">
                    <li class="list-group-item"><a href="{{ route('admin.orders')}}"><i class="fas fa-list"></i>Sách hóa đơn</a></li>
                    <li class="list-group-item"><a href="{{ route('admin.users')}}"><i class="far fa-user"></i>Khách hàng</a></li>
                    <li class="list-group-item"><a href="{{ route('admin.products')}}"><i class="fas fa-book"></i>Tất cả sản phẩm</a></li>
                    <li class="list-group-item"><a href="{{ route('admin.categories')}}"><i class="fas fa-ellipsis-v"></i>Thể loại</a></li>
                    <li class="list-group-item">
                        <a href="{{route('admin.feedbacks')}}"><i class="far fa-comments"></i>Phản hồi</a>
                    </li>
                    <li class="list-group-item"><a href="{{ route('admin.managers')}}"><i class="fas fa-users-cog"></i>Người quản trị</a></li>
                    
                    <li class="list-group-item"><a href="{{ route('admin.infors')}}"><i class="fas fa-info-circle"></i>Thông tin website</a></li>
                    <li class="list-group-item"><a href="{{ route('admin.list')}}"><i class="fas fa-dollar-sign"></i>Thống kê</a></li>


                  </ul>
                  
            </div>
            <div class="col content">
                <div class="container" >
                    @yield('content')    
                </div>
            </div>
        </div>
    </div>
<script type="text/javascript" src="{{ asset('js/jquery-3.6.0.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap.bundle.min.js')}}"></script>
</body>
<!-- <script src="js/popper.min.js"></scrip> -->
<!-- <script src="js/bootstrap.min.js"></script> -->

</html>