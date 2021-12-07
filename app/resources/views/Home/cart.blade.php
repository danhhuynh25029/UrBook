@extends('Home.home')
@section('body')
<div class="container-fluid cart" style="width: 93%;">
	<div class="row cart">
		<div class="container-fluid">
			<table class="table">
			  <thead>
			    <tr>
			      <th scope="col">ID</th>
			      <th scope="col">Hình ảnh</th>
			      <th scope="col">Tên</th>
			      <th scope="col">Số lượng</th>
			      <th scope="col">Giá</th>
			      <th scope="col">Thao tác</th>
			    </tr>
			  </thead>
			  <tbody>
			  	@foreach($products as $key => $item)
			    <tr>
			      <th scope="row">{{$item->id}}</th>
			      <td><img src="{{asset($item->image)}}" alt=""></td>
			      <td>{{$item->name}}</td>
			      <td><input style="text-align: center;" type="number" name="" value="{{$quantitys[$key]}}"></td>
			      <td><b style="color:blue">{{$item->price}} vnđ</b></td>
			      <td><a href="{{route('cart.delete',['key'=>$key])}}"><button type="button" class="btn btn-danger">Xóa</button></a></td>
			    </tr>
			    @endforeach
			    <tr>
			    	<td colspan="5">
						<form style="float: right;">
							<button type="button" class="btn btn-primary">Thanh toán</button>
						</form>
			    	</td>
			    </tr>
			  </tbody>
			</table>
		</div>
	</div>
</div>
@endsection