@extends('Admin.admin')
@section('content')
<a href="{{ route('managers.insert')}}"><button type="button" class="btn insert btn-success">Thêm</button></a>
<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Tên đăng nhập</th>
        <th scope="col">Mật khẩu</th>
        <th scope="col">Thao tác</th>
      </tr>
    </thead>
    <tbody>
      
        @foreach($managers as $item)
            <tr>
              <th scope="row">{{$item->id}}</th>
              <td>{{$item->name}}</td>
              <td>{{ $item->password}}</td>
              <td>
                <a href="{{route('managers.update',['id'=>$item->id])}}">
              <button type="button" class="btn btn-primary">Chỉnh sửa</button>
              </a>
                <a href="{{route('managers.delete',['id'=>$item->id])}}"><button type="button" class="btn btn-danger">Xóa</button></a>
                
              </td>
            </tr>
        @endforeach        
    </tbody>
  </table>
@endsection