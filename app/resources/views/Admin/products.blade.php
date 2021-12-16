@extends('Admin.admin')
@section('content')
<div class="container">
<div class="row">
    <div class="col-3"></div>
    <div class="col-6">
<form method="GET" action="{{route('products.find')}}"style="display: flex;align-items: center;margin-top: 10px;margin-left: 20px;">
    @csrf
    <input name="name" class="form-control" type="text" aria-label="default input example" style="display: inline !important;width: 50%;">
    <button type="submit" class="btn btn-primary">search</button>
</form>
    </div>
    <div class="col-3"></div>
</div>
</div>

<a href="{{ route('products.insert')}}"><button type="button" class="btn insert btn-success">Thêm</button></a>
<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Hình ảnh</th>
        <th scope="col">Tên</th>
        <th scope="col">Tác giả</th>
        <th scope="col">Số lượng</th>
        <th scope="col">Đã bán</th>
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
                <td>{{$item->sold}}</td>
                <td>{{$item->price}}</td>
                <td><a href="{{route('products.update',['id'=>$item->id])}}"><button type="button" class="btn btn-primary">Chỉnh sửa</button></a>
                  <a href="{{route('products.delete',['id'=>$item->id])}}"><button type="button" class="btn btn-danger">Xóa</button></a></td>
              </tr>
        @endforeach
    </tbody>
  </table>
@endsection