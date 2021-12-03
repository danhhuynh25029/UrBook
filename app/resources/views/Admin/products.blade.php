@extends('Admin.admin')
@section('content')
<a href="{{ route('products.insert')}}"><button type="button" class="btn insert btn-success">Thêm</button></a>
<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Hình ảnh</th>
        <th scope="col">Tên</th>
        <th scope="col">Tác giả</th>
        <th scope="col">Số lượng</th>
        <th scope="col">Giá</th>
        <th scope="col">Thao tác</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($products as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td><img src="{{asset($item->image)}}" alt="" width="130" height="100"></td>
                <td>{{$item->name}}</td>
                <td>{{$item->author}}</td>
                <td>{{$item->quantity}}</td>
                <td>{{$item->price}}</td>
                <td><a href="{{route('products.update',['id'=>$item->id])}}"><button type="button" class="btn btn-primary">Chỉnh sửa</button></a>
                  <a href="{{route('products.delete',['id'=>$item->id])}}"><button type="button" class="btn btn-danger">Xóa</button></a></td>
              </tr>
        @endforeach
    </tbody>
  </table>
@endsection