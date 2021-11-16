<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css')}}">
  <title></title>
</head>
<body>
<div class="containers">
    <div class="sidebar">
      <h3><a href="{{ route('home')}}">UrBook</a></h3>
      
      <ul class="nav">
          
          <li class="nav-item">
            <a class="nav-link" href="{{route('admin.orders')}}">Danh sách sách hóa đơn</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('admin.users')}}">Xem khách hàng</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('admin.products')}}">Sản phẩm phẩm hiện có</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('admin.members')}}">Xem nhân viên</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('admin.categories')}}">Tất cả thể loại</a>
          </li>
          <li class="nav-item">
            <a  class="nav-link" href="{{route('admin.infors')}}">Cập nhật thông tin web</a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.code')}}" class="nav-link">Danh sách mã giảm giá</a>
          </li>
    </ul>
    </div>
    <div class="content">
      <div class="head">
         <h5><a href="{{route('admin')}}">Danh Huynh</a></h5>
      </div>
      <div class="body">
      <div class="container-fluid">
      @yield('content')
      </div>
      {{-- <h1>Simple Sidebar</h1> --}}
      {{-- <p>
        Make sure to keep all page content within the 
        <code>#content</code>.
      </p> --}}
    </div>
    </div>
</div>
</body>
<script type="text/javascript" src="{{ asset('js/bootstrap.min.js')}}"></script>
</html>