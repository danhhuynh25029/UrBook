@extends('Admin.admin')
@section('content')
@if($manager)
<form style="margin-top:10px;" action="{{route($path,['id'=>$manager->id])}}" method="POST">
@else
<form style="margin-top:10px;" action="{{route($path)}}" method="POST">
@endif 
  @csrf
    <div class="row mb-3">
      <label for="inputEmail3" class="col-sm-2 col-form-label">Tên đăng nhập</label><br>
      <div class="col-sm-10">
        @if($manager)
          <input type="text" class="form-control" style="width:50%" name="name" value="{{$manager->name}}">
        @else
          <input type="text" class="form-control" style="width:50%" name="name">
        @endif
      </div>
      <label for="inputEmail3" class="col-sm-2 col-form-label">Mật khẩu</label><br>
      <div class="col-sm-10">
        @if($manager)
          <input type="text" class="form-control" style="width:50%" name="password" value="{{$manager->password}}">
        @else
          <input type="text" class="form-control" style="width:50%" name="password">
        @endif
      </div>
    </div>
    @if($manager)
      <button type="submit" class="btn btn-success">Cập nhật</button>
    @else
      <button type="submit" class="btn btn-success">Thêm</button>
    @endif
</form>
@endsection