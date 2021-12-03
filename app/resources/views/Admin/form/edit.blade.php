@extends('Admin.admin')
@section('content')
@if($cate)
<form style="margin-top:10px;" action="{{route($path,['id'=>$cate->id])}}" method="POST">
@else
<form style="margin-top:10px;" action="{{route($path)}}" method="POST">
@endif 
  @csrf
    <div class="row mb-3">
      <label for="inputEmail3" class="col-sm-2 col-form-label">Tên</label><br>
      <div class="col-sm-10">
        @if($cate)
          <input type="text" class="form-control" style="width:50%" name="name" value="{{$cate->name}}">
        @else
          <input type="text" class="form-control" style="width:50%" name="name">
        @endif
      </div>
    </div>
    @if($cate)
      <button type="submit" class="btn btn-success">Cập nhật</button>
    @else
      <button type="submit" class="btn btn-success">Thêm</button>
    @endif
    
</form>
@endsection