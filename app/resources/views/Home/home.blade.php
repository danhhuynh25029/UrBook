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
     <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>
    <div class="container-fluid">
         <!-- day la header ne -->
        <div class="row header">
            <!-- <div class="col-2" style="line-height: 50px;">
                <h3>UrBook</h3>
            </div> -->
            <div class="col-4">
                <ul class="nav" style="line-height: 50px;">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('home')}}" style="font-size:30px;">UrBook</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{route('home')}}">Trang chủ</a>
                    </li>
                    {{-- <li class="nav-item">
                      <a class="nav-link" href="#">Giới thiệu</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link disabled">Liên hệ</a>
                    </li> --}}
                  </ul>
            </div>
            <div class="col">
                <form method="GET" action="{{route('home.find')}}"style="display: flex;align-items: center;margin-top: 10px;margin-left: 20px;">
                    {{-- @csrf --}}
                    <input name="name" class="form-control" type="text" aria-label="default input example" style="display: inline !important;width: 50%;">
                    <button type="submit" class="btn btn-primary">Tìm kiếm</button>
                </form>
            </div>
            <div class="col-3">
                <ul class="nav" style="line-height: 50px;">  
                    <li class="nav-item">

                        <a class="nav-link" href="{{route('home.cart')}}"><button type="button" class="button"><i class="fas fa-shopping-cart"></i>Giỏ hàng 
                            @if($cart)
                            <span class="badge bg-danger">{{count($cart)}}</span>
                            @else
                            
                            @endif
                        </button></a>
                    </li>
                    <li class="nav-item">
                        @if($user != null)
                        <a class="nav-link" href="{{ route('profile')}}"><i class="far fa-user"></i>{{$user->name}}</a>
                        @else
                        <a class="nav-link" href="{{ route('signin')}}"><i class="fas fa-sign-in-alt"></i>Đăng nhập</a>
                        @endif
                    </li>
                </ul>
            </div>
            </div>
        </div>
    </div>
        <!-- Day la noi dung ne -->
        @yield('body');
        <!-- footer ne -->
    <div class="container-fluid">
        <div class="row footer">
            <div class="container-fluid">
                <div class="row">
                <div class="col-5">
                    <div style="width: 70%;margin:0 auto;">
                    <ul>
                        <li style="margin-bottom:10px;text-align: center;"><h3>Urbook</h3></li>
                        <hr style="background-color:white;height: 3px;">
                        @foreach($infors as $key => $item)
                            <li style="margin-top: 10px;"><i class="{{$icon[$key]}}"></i>{{$item->infor}}</li>
                        @endforeach
                    </ul>
                    </div>
                </div>
                <div class="col-4">
                    <ul>
                        <li><h3>Phương thức thanh toán</h3></li>
                        <hr style="background-color:white;height: 3px;">
                        <li style="margin-top: 10px;">Trực tiếp</li>                
                    </ul>
                </div>
                <div class="col-3">
                    <h3 style="color:white;margin-top: 10px;">Phản hồi</h3>
                    <hr style="background-color:white;height: 3px;">
                    <form method="POST" action="{{route('home.feedback')}}">
                        @csrf
                        <input type="hidden" id="_token" value="{{ csrf_token() }}">
                        <div class="mb-3">
                          <label for="exampleFormControlInput1" class="form-label">Địa chỉ email</label>
                          <input type="email" name="email" class="form-control" id="email" placeholder="">
                        </div>
                        <div class="mb-3">
                          <label for="exampleFormControlTextarea1" class="form-label">Nội dung</label>
                          <textarea name="content" class="form-control" id="content" rows="3"></textarea>
                        </div>
                       <button type="button" class="btn btn-light" onclick="sendFeedback()">Gửi</button>
                    </form>
                </div>
                {{-- <div class="col-4">

                </div> --}}
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    function sendFeedback(){
        var email = document.getElementById("email").value;
        var content = document.getElementById("content").value;
        var token = document.getElementById("_token").value;
        var ajax = new XMLHttpRequest();
        // Check mail
        var regexEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        if (email.match(regexEmail)) {
            ajax.onreadystatechange = function(){
                if(this.status = 200 && this.readyState == 4){
                    alert("Gửi thành công");
                }
            }
            ajax.open('POST',`{{route('home.feedback')}}?_token=${token}&email=${email}&content=${content}`,true);
            ajax.send();
        } else {
            alert("Vui lòng nhập địa chỉ email của bạn"); 
        }
        
    }
</script>
</body>
</html>