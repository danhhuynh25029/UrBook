@extends('Admin.admin')
@section('content')
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Tên</th>
        <th scope="col">Số điện thoại</th>
        <th scope="col">Dịa chỉ</th>
        <th scope="col">Ngày đặt hàng</th>
        <th scope="col">Trạng thái</th>
        <th scope="col">Thao tác</th>

      </tr>
    </thead>
    <tbody>
      @foreach($customers as $item)
        <tr>
          <th scope="row">{{$item->id}}</th>
          <td>{{$item->fullname}}</td>
          <td>{{$item->phone_number}}</td>
          <td>{{$item->address}}</td>
          <td>{{$item->created_at}}</td>
          <td><form>
            <select>
              <option>Còn chờ</option>
              <option>Đang đóng gói</option>
              <option>Đang giao</option>
              <option>Đã hoàn thành</option>
            </select>
          </form></td>
          <td><a href="">Chi tiết</a></td>
        </tr>
      @endforeach
      
    </tbody>
  </table>
@endsection