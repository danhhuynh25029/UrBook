@extends("Admin.admin")
@section("content")
<div class="row" style="margin-top: 10px;text-align: center;">
	<div class="col-4">
	<div class="bd-callout bd-callout-default bg-danger" style="color:white;padding:10px 0px;">
      <h4>Tổng doanh thu</h4>
      <h5>{{$total}} vnđ</h5>
 	</div>
	</div>
	<div class="col-4">
		<div class="bd-callout bd-callout-default bg-primary" style="color:white;padding:10px 0px">
      <h4>Tổng số lượng hóa đơn</h4>
      <h5>{{count($bills)}}<h5>
 </div>
	</div>
	<div class="col-4">
		<div class="bd-callout bd-callout-default bg-success" style="color:white;padding:10px 0px">
      <h4>Tổng số người dùng</h4>
      <h5>{{count($users)}}</h5>
</div>
	</div>
</div>
<div class="row">
	<div class="col">
		<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Doanh thu</th>
      <th scope="col">Tháng</th>
      {{-- <th scope="col">Handle</th> --}}
    </tr>
  </thead>
  <tbody>
  	@foreach($sale as $item)
    <tr>
      <th scope="row">{{$item->id}}</th>
      <td>{{$item->total}} vnđ</td>
      <td>{{$item->month}}/{{$item->year}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
	</div>
</div>
@endsection