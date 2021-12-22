@extends('Admin.admin')
@section('content')
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Hình ảnh</th>
      <th scope="col">Tên</th>
      <th scope="col">Giá</th>
      <th scope="col">Số lượng</th>
    </tr>
  </thead>
  <tbody>
    @foreach($products as $key => $item)
    <tr>
      <th scope="row">{{$item->id}}</th>
      <td><img src="{{asset($item->image)}}" width="130" height="100"></td>
      <td>{{$item->name}}</td>
      <td>{{$item->price}}</td>
      <td>{{$quantity[$key]}}</td>
    </tr>
    @endforeach
    <tr >
      <td colspan="5" style="text-align:right;"><b>Tổng tiền : {{$total}} vnđ</b></td>
    </tr>
  </tbody>
</table>
<div>
  <p><b>Lời nhắn :</b> {{$customer->note}}</p>
</div>
@endsection