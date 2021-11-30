<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/home.css')}}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('icon/css/all.min.css')}}">
</head>
<body>
    <div class="container-fluid">
         <!-- day la header ne -->
        <div class="row header">
            <!-- <div class="col-2" style="line-height: 50px;">
                <h3>UrBook</h3>
            </div> -->
            <div class="col">
                <ul class="nav" style="line-height: 50px;">
                    <li class="nav-item">
                        <a class="nav-link" href="#" style="font-size:30px;">UrBook</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Trang chủ</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Giới thiệu</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link disabled">Liên hệ</a>
                    </li>
                  </ul>
            </div>
            <div class="col-3">
                <ul class="nav" style="line-height: 50px;">  
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-shopping-cart"></i>Giỏ hàng</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('signin')}}"><i class="fas fa-sign-in-alt"></i>Đăng nhập</a>
                    </li>
                </ul>
            </div>
            </div>
        </div>
    </div>
        <!-- Day la noi dung ne -->
    <div class="container-fluid" style="width: 93%;">
        <div class="row body">
            <div class="col-2 categories" >
                <h3>Danh mục</h3>
                <div class="list">
                <ul>
                    @foreach ($cate as $i)
                        <li><a href="#">{{$i->name}}</a></li>
                    @endforeach
                    {{-- <li><a href="#">Sách giáo dục</a></li>
                    <li><a href="#">Ngôn tình</a></li> --}}
                </ul>
            </div>
            </div>
            @yield('content')
        </div>
        <!-- panigation -->
        
        <div class="row" style="margin-top: 10px;">
            @yield('panigation')
        </div>
    </div>
        <!-- footer ne -->
    <div class="container-fluid">
        <div class="row footer">
            <div class="col">
                <p>footer ne nhe</p>
            </div>
        </div>
    </div>
</div>
</body>
</html>