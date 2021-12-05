@extends('Admin.admin')
@section('content')
<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Email</th>
        <th scope="col">Ngày tạo<th>
        <th scope="col">Hóa đơn</th>
      </tr>
    </thead>
    <tbody>
      
        @foreach($users as $item)
        <tr>
          <th scope="row">{{$item->id}}</th>
          <td>{{ $item-> email}}</td>
          <td>{{$item->create_at}}</td>
          <td><a href="">Chi tiết</a></td>
        </tr>
        @endforeach        
    </tbody>
  </table>
@endsection