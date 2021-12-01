@extends('Admin.admin')
@section('content')
<a href="{{ route('infor.edit')}}"><button type="button" class="btn insert btn-success">Thêm</button></a>
<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Loại</th>
        <th scope="col">Thông tin</th>
        <th scope="col">Thao tác</th>
        {{-- <th scope="col">Handle</th> --}}
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Số điện thoại</td>
        <td>
          <a href="{{ route('categories.edit')}}"><button type="button" class="btn btn-primary">Chỉnh sửa</button></a>
          <button type="button" class="btn btn-danger">Xóa</button>
        </td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td colspan="2">Larry the Bird</td>
      </tr>
    </tbody>
  </table>    
@endsection