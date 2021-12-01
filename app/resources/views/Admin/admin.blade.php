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
        <div class="row head">
            <div class="col">
            <nav id="navbar-example2" class="navbar  px-3">
                <a class="navbar-brand" href="#" style="font-size: 25px;">UrBook</a>
                <ul class="nav nav-pills">
                  <li class="nav-item">
                    <a href="#"><i class="far fa-user"></i>admin</a>
                    <!-- <a class="nav-link" href="#scrollspyHeading2">admin</a> -->
                  </li>
                </ul>
              </nav>
            </div>
        </div>
        <div class="row body">
            <div class="col-2 side">
                <ul class="list-group" style="text-align: left">
                    <li class="list-group-item"><a href="{{ route('admin.orders')}}"><i class="fas fa-list"></i>Sách hóa đơn</a></li>
                    <li class="list-group-item"><a href="{{ route('admin.users')}}"><i class="far fa-user"></i>Khách hàng</a></li>
                    <li class="list-group-item"><a href="{{ route('admin.products')}}"><i class="fas fa-book"></i>Tất cả sản phẩm</a></li>
                    <li class="list-group-item"><a href="{{ route('admin.categories')}}"><i class="fas fa-dollar-sign"></i>Thể loại</a></li>
                    <li class="list-group-item"><a href="{{ route('admin.infors')}}"><i class="fas fa-info-circle"></i>Thông tin website</a></li>
                  </ul>
                  
            </div>
            <div class="col content">
                <div class="container" >
                    @yield('content')    
                </div>
            </div>
        </div>
    </div>
<script type="text/javascript" src="{{ asset('js/bootstrap.bundle.min.js')}}"></script>
</body>
<!-- <script src="js/popper.min.js"></script> -->
<!-- <script src="js/bootstrap.min.js"></script> -->

</html>