@extends('admin/admin')
@section('content')

<form class="d-flex">
      <button type="button" class="btn btn-primary"><a href="{{route()}}">Thêm</a></button>
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
</form>
<table class="table">
  <thead>
    <tr>
      <th scope="col">STT</th>
      <th scope="col">Thể loại</th>
      <th scope="col">Thao tác</th>
      {{-- <th scope="col">Ngày tham gia</th>
      <th scope="col">Hóa đơn</th> --}}
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Truyện cười</td>
      <td><a href="#">Xóa</a></td>
      {{-- <th><a href="#">Cập nhật</a></th> --}}
    </tr>
  </tbody>
</table>
@endsection