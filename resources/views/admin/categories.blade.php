@extends('admin/admin')
@section('content')
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
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