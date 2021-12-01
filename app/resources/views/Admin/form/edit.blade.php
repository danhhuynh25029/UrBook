@extends('Admin.admin')
@section('content')
<form style="margin-top:10px;" action="{{route($path)}}" method="POST">
    @csrf
    <div class="row mb-3">
      <label for="inputEmail3" class="col-sm-2 col-form-label">Tên</label><br>
      <div class="col-sm-10">
        @if($name)
          <input type="text" class="form-control" style="width:50%" name="name" value="{{$name}}">
        @else
          <input type="text" class="form-control" style="width:50%" name="name">
        @endif
      </div>
    </div>
    @if($name)
      <button type="submit" class="btn btn-success">Cập nhật</button>
    @else
      <button type="submit" class="btn btn-success">Thêm</button>
    @endif
    
</form>
@endsection