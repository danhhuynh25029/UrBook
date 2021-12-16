@extends('Admin.admin')
@section('content')
<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">email</th>
        <th scope="col">Ngày gửi</th>
        <th scope="col">Thông tin</th>
        {{-- <th scope="col">Handle</th> --}}
      </tr>
    </thead>
    <tbody>
      @foreach($feedbacks as $item)
      <tr>
        <th scope="row">{{$item->id}}</th>
        <td>{{$item->email}}</td>
        <td>{{$item->created_at}}</td>
        <td>
          <a href="{{ route('infors.update',['id'=>$item->id])}}"><button type="button" class="btn btn-primary">Chỉnh sửa</button></a>
          {{-- <a href="{{ route('infors.delete')}}"><button type="button" class="btn btn-danger">Xóa</button></a> --}}
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>    
@endsection