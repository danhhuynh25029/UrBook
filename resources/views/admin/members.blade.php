@extends('admin/admin')
@section('content')

<form class="d-flex">
      <button type="button" class="btn btn-primary">Thêm</button>
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
</form>
<table class="table">
  <thead>
    <tr>
      <th scope="col">STT</th>
      <th scope="col">Họ và Tên</th>
      <th scope="col">Tài khoản</th>
      <th scope="col">Mật khẩu</th>
      <th scope="col">Thao tác</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>danh11@</td>
      <td>danh1213</td>
      <td>12345</td>
      <td>
        <button type="button" class="btn btn-success">Cập nhật</button>
        <button type="button" class="btn btn-danger">Xóa</button>
      </td>
    </tr>
  </tbody>
</table>
@endsection