@extends('Admin.admin')
@section('content')
<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Tên đăng nhập</th>
        <th scope="col">Email</th>
        <th scope="col">Ngày tạo<th>
        <th scope="col">Hóa đơn</th>
      </tr>
    </thead>
    <tbody>
      
        @foreach($users as $item)
          @if($item->id != 1)
            <tr>
              <th scope="row">{{$item->id}}</th>
              <td>{{$item->name}}</td>
              <td>{{ $item-> email}}</td>
              <td>{{$item->create_at}}</td>
              <td><a href="">Chi tiết</a></td>
            </tr>
          @endif
        @endforeach        
    </tbody>
  </table>
@endsection