@extends('admin/admin')
@section('content')
<form method="GET" action="{{route('admin.infors')}}">
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Địa chỉ email</label>
  <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Địa chỉ Facebook</label>
  <input type="email" name="facebook" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Số điện thoại</label>
  <input type="email" name="phone" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
</div>
<button type="submit" class="btn btn-success">Cập nhật</button>
</form>
@endsection