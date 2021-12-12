@extends('Admin.admin')
@section('content')
<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Tên đăng nhập</th>
        <th scope="col">Mật khẩu</th>
      </tr>
    </thead>
    <tbody>
      
        @foreach($managers as $item)
            <tr>
              <th scope="row">{{$item->id}}</th>
              <td>{{$item->name}}</td>
              <td>{{ $item->password}}</td>
            </tr>
        @endforeach        
    </tbody>
  </table>
@endsection