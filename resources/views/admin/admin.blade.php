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
      <h3>UrBook</h3>
      <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="{{route('admin.orders')}}">Danh sách hóa dơn</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('admin.users')}}">Danh sách khách hàng</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('admin.products')}}">Danh sách sản phẩm</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('admin.members')}}">Danh sách nhân viên</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('admin.categories')}}">Danh sách thể loại</a>
          </li>
    </ul>
    </div>
    <div class="content">
      <div class="container-fluid">
        <ul class="nav justify-content-end">
          <li><a href="#">Danh Huynh</a></li>
        </ul>
      </div>
      <div class="container-fluid">
      @yield('content')
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