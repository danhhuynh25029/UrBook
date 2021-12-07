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
			      <td><input onchange="show()"style="text-align: center;" id="quantity{{$key}}" type="number" name="" value="{{$quantitys[$key]}}"></td>
			      <td><b style="color:blue" id="price">{{$item->price}} vnđ</b></td>
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
<script type="text/javascript">
	function show(){
		var c = parseInt(quantity0.value);
		console.log(c);
		var ajax = new XMLHttpRequest();
		ajax.onreadystatechange = function(){
			if(this.readyState == 4 && this.status == 200){
				console.log(this.responseText);
			}
		}
		ajax.open('GET',`{{route('cart.update')}}?quantity=${c}`,true);
		ajax.send();
		
		
	}
	
</script>
@endsection