@extends('Admin.admin')
@section('content')
<a href="{{ route('categories.insert')}}"><button type="button" class="btn insert btn-success">Thêm</button></a>
<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Tên</th>
        <th scope="col">Thao tác</th>
        {{-- <th scope="col">Handle</th> --}}
      </tr>
    </thead>
    <tbody>
      @foreach ($cate as $item)
        <tr>
          <th scope="row">{{ $item->id}}</th>
          <td>{{ $item->name}}</td>
          <td>
            <a href="{{route('categories.update',['id'=>$item->id])}}"><button type="button" class="btn btn-primary">Chỉnh sửa</button></a>
            <a href="{{route('categories.delete',['id'=>$item->id])}}"><button type="button" class="btn btn-danger">Xóa</button></a>
          </td>
      </tr>
      @endforeach
    </tbody>
  </table>
@endsection