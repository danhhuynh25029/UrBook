@extends('Admin.admin')
@section('content')
<form style="margin-top:10px;" action="{{route($path)}}" method="POST">
    @csrf
    <div class="row mb-3">
      <label for="inputEmail3" class="col-sm-2 col-form-label">Tên</label><br>
      <div class="col-sm-10">
        <input type="text" class="form-control" style="width:50%" name="name">
      </div>
    </div>
    <button type="submit" class="btn btn-success">Cập nhật</button>
</form>
@endsection