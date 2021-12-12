@extends('Home.home')
@section('body')
<div class="container-fluid cart" style="width: 93%;">
	<div class="row cart">
		<div class="container-fluid">
				@if($products)
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
			      <th scope="row">{{$key}}</th>
			      <td><img src="{{asset($item->image)}}" alt=""></td>
			      <td>{{$item->name}}</td>
			      <td><input onchange="show({{$key}},{{$prices[$key]}})"style="text-align: center;" id="quantity{{$key}}" type="number" name="" value="{{$quantitys[$key]}}"></td>
			      <td><b style="color:blue" id="price{{$key}}">{{$total[$key]}}</b><b style="color: blue;"> vnđ</b></td>
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
			@else
				<p>Vui lòng thêm sản phẩm vào giỏ</p>
			@endif
		</div>
	</div>
</div>
<script type="text/javascript">
	function show(key,price_d){
		var quantity = document.getElementById(`quantity${key}`).value;
		var total = document.getElementById(`price${key}`).innerHTML;
		total = parseInt(price_d)*parseInt(quantity);
		document.getElementById(`price${key}`).innerHTML = total 
		var ajax = new XMLHttpRequest();
		ajax.onreadystatechange = function(){
			if(this.readyState == 4 && this.status == 200){
				console.log(this.responseText);
			}
		}
		ajax.open('GET',`{{route('cart.update')}}?key=${key}&quantity=${quantity}&total=${total}`,true);
		ajax.send();
	}
	
</script>
@endsection