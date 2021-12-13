@extends('Home.home')
@section('body')
<div class="container-fluid cart" style="width:93%">
	<div class="row">
		<div class="col">
			
		</div>
		<div class="col-6" style="margin-top: 10px;">
		<form>
		<div class="mb-3">
		  <label for="exampleFormControlInput1" class="form-label">Họ và tên</label>
		  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
		</div>

		  <div class="mb-3">
		  <label for="exampleFormControlInput1" class="form-label">Địa chỉ</label>
		  <input value="{{$user->address}}" type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
		</div>
		<div class="mb-3">
		  <label for="exampleFormControlInput1" class="form-label">Số điện thoại</label>
		  <input  value="{{$user->phone_number}}" type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
		</div>
		<div class="mb-3">
		  <label for="exampleFormControlTextarea1" class="form-label">Lời nhắn</label>
		  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
		</div>
		<table style="width: 100%;	">
			<tr>
				<td>Tổng tiền :</td>
				<td style="text-align: center;"><h3>100000</td>
			</tr>
		</table>
		<button class="btn btn-primary" style="float: right;">Xác nhận</button>
		</form>
		</div>
		<div class="col">
			
		</div>
	</div>
</div>
@endsection