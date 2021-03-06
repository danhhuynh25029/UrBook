@extends('Admin.admin')
@section('content')
<?php 
  $status = array('-1'=>'Tất cả','0'=>'Còn chờ','1'=>'Đang đóng gói','2'=>'Đang giao','3'=>'Đã hoàn thành');
?>
<form action="{{route('bills.findAll')}}" method="GET" style="margin:10px 0;">
  <label>Trạng thái</label>
  <select name="status" onchange="this.form.submit()">
    @foreach($status as $key => $value )
      @if($key == $s)
          <option value="{{$key}}" selected>{{$value}}</option>
      @else
          <option value="{{$key}}">{{$value}}</option>
      @endif
    @endforeach
  </select>
</form>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Tên</th>
        <th scope="col">Số điện thoại</th>
        <th scope="col">Dịa chỉ</th>
        <th scope="col">Ngày đặt hàng</th>
        <th scope="col">Trạng thái</th>
        <th scope="col">Thao tác</th>

      </tr>
    </thead>
    <tbody>
      @foreach($customers as $item)
        <tr>
          <th scope="row">{{$item->id}}</th>
          <td>{{$item->fullname}}</td>
          <td>{{$item->phone_number}}</td>
          <td>{{$item->address}}</td>
          <td>{{date("d/m/Y", strtotime($item->created_at))}}</td>
          <td><form>
            <select onchange="status({{$item->id}})" id="sta">
              @foreach($status as $key => $value )
              @if($key != -1)
              @if($key == $item->status)
                <option value="{{$key}}" selected>{{$value}}</option>
              @else
                <option value="{{$key}}">{{$value}}</option>
              @endif
              @endif
              @endforeach
            </select>
          </form></td>
          <td><a href="{{route('bills.detail',['id'=>$item->id])}}">Chi tiết</a></td>
        </tr>
      @endforeach
      
    </tbody>
  </table>
<script type="text/javascript">
  function status(key){
    var sta = document.getElementById("sta").value;
    var ajax = new XMLHttpRequest();
    ajax.onreadystatechange = function(){
      if(this.readyState == 4 && this.status == 200){
        // console.log(this.responseText);
          alert("Cập nhật thành công");
      }
    }
    ajax.open('GET',`{{route('bills.update')}}?id=${key}&status=${sta}`);
    ajax.send();
  }
</script>
@endsection