@extends('Admin.admin')
@section('content')
{{-- <a href="{{ route('infors.insert')}}"><button type="button" class="btn insert btn-success">Thêm</button></a> --}}
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
      @foreach ($infor as $item)
      <tr>
        <th scope="row">{{$item->id}}</th>
        <td>{{$item->type}}</td>
        <td>{{$item->infor}}</td>
        <td>
          <a href="{{ route('infors.edit',['id'=>$item->id])}}"><button type="button" class="btn btn-primary">Chỉnh sửa</button></a>
          {{-- <a href="{{ route('infors.delete')}}"><button type="button" class="btn btn-danger">Xóa</button></a> --}}
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>    
@endsection