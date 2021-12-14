@extends('User.profile')
@section('content')
<div class="container-fluid">
	<table class="table">
  <thead>
    <tr>
      <th scope="col">STT</th>
      <th scope="col">Họ và tên</th>
      <th scope="col">Ngày tạo</th>
      <th scope="col">Số điện thoại</th>
      <th scope="col">Trạng thái</th>
      <th scope="col">Tổng tiền</th>
    </tr>
  </thead>
  <tbody>
    @foreach($customers as $key => $item)
      <tr>
        <th scope="row">{{$item->id}}</th>
        <td>{{$item->fullname}}</td>
        <td>{{$item->created_at}}</td>
        <td>{{$item->phone_number}}</td>
        <?php 
              $status = array('0'=>'Còn chờ','1'=>'Đang đóng gói','2'=>'Đang giao','3'=>'Đã hoàn thành')
        ?>
        <td>{{$status[$item->status]}}</td>
        <td>{{$bills[$key][0]->total}}</td>
      </tr>
    @endforeach
  </tbody>
</table>
</div>
@endsection