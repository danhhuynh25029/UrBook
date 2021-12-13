@extends('Home.home')
@section('body')
<div class="container-fluid cart" style="width:93%">
	<div class="row">
		<div class="col">
			
		</div>
		<div class="col-6" style="margin-top: 10px;">
		<form action="{{route('home.order')}}" method="POST">
		@csrf
		<div class="mb-3">
		  <label for="exampleFormControlInput1" class="form-label">Họ và tên</label>
		  <input value="{{$user->fullname}}" type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="fullname">
		</div>

		  <div class="mb-3">
		  <label for="exampleFormControlInput1" class="form-label">Địa chỉ</label>
		  <input value="{{$user->address}}" type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="address">
		</div>
		<div class="mb-3">
		  <label for="exampleFormControlInput1" class="form-label">Số điện thoại</label>
		  <input  value="{{$user->phone_number}}" type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="phone">
		</div>
		<div class="mb-3">
		  <label for="exampleFormControlTextarea1" class="form-label">Lời nhắn</label>
		  <textarea name="note" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
		</div>
		<table style="width: 100%;">
			<tr>
				<td>Tổng tiền :</td>
				<td style="text-align: center;"><h3>{{number_format($total,0,',','.')}} vnđ</h3></td>
			</tr>
		</table>
		<button type="submit" class="btn btn-primary" style="float: right;">Xác nhận</button>
		</form>
		</div>
		<div class="col">
			
		</div>
	</div>
</div>
@endsection