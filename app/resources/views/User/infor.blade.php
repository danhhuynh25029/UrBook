@extends('User.profile')
@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col">
			<form>
			<div class="mb-3">
			  	<label for="exampleFormControlInput1" class="form-label">Tên đăng nhập</label>
			  	<input value="{{$user->name}}"type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
			</div>
			<label for="exampleFormControlInput1" class="form-label">Mật khẩu</label>
			<div class="input-group mb-3">
				 
			  	  <input id="pass"  value="{{$user->password}}"type="password" class="form-control" id="exampleFormControlInput1" placeholder="">
				  <button onclick="display()"class="btn btn-primary" type="button" id="button-addon2">Hiển thị</button>
			</div>
	{{-- 		<div class="mb-3">
			  	<label for="exampleFormControlInput1" class="form-label">Mật khẩu</label>
			  	<input type="email" class="form-control" id="exampleFormControlInput1" placeholder="">
			</div> --}}
			<div class="mb-3">
			  	<label for="exampleFormControlInput1" class="form-label">Số điện thoại</label>
			  	<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
			</div>
			<div class="mb-3">
			  	<label for="exampleFormControlInput1" class="form-label">Địa chỉ email</label>
			  	<input value="{{$user->email}}"type="email" class="form-control" id="exampleFormControlInput1" placeholder="">
			</div>
			<div class="mb-3">
			  	<label for="exampleFormControlInput1" class="form-label">Địa chỉ liên hệ</label>
			  	<input type="email" class="form-control" id="exampleFormControlInput1" placeholder="">
			</div>
			<div class="mb-3" style="text-align: right;">
				<button type="button" class="btn btn-success">Cập nhật</button>
			</div>
			</form>	
		</div>
	</div>
</div>
<script type="text/javascript">
	function display(){
		var t = document.getElementById('pass').type;
		if(t == 'password'){
			document.getElementById('pass').type = 'text';
		}else{
			document.getElementById('pass').type = 'password';
		}
	}
</script>
@endsection