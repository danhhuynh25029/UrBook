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
			      <td><input onchange="show({{$key}},{{$prices[$key]}})"style="text-align: center;" id="quantity{{$key}}" type="number" name="" min="1" max="{{$item->quantity}}" value="{{$quantitys[$key]}}"></td>
			      <td><b style="color:blue" id="price{{$key}}">{{number_format($total[$key],0,',','.')}}</b><b style="color: blue;"> vnđ</b></td>
			      <td><a href="{{route('cart.delete',['key'=>$key])}}"><button type="button" class="btn btn-danger">Xóa</button></a></td>
			    </tr>
			    @endforeach
			    <?php 
			    	$s = 0;
			    	foreach($products as $key => $item){
			    		$s += $total[$key];
			    	}
				?>
			    <tr>
			    	<td colspan="6">
			    		<div style="float: right;width: 100%;">
			    				<h7 style="display: inline;">Thành tiền : <h5 style="display: inline;" id="sum">{{number_format($s,0,',','.')}}</h5> VND<h7>
			    				<a href="{{route('home.order')}}"><button type="button" class="btn btn-primary" style="float: right;">Thanh toán</button></a>
			    		</div>
			    		{{-- form style="float: right;">
							<button type="button" class="btn btn-primary">Thanh toán</button>
						</form --}}
			    	</td>
			    </tr>
			  </tbody>
			</table>
			@else
				<h3 style="text-align: center;line-height:100vh	;">Vui lòng thêm sản phẩm vào giỏ</h3>
			@endif
		</div>
	</div>
</div>
<script type="text/javascript">
	function show(key,price_d){
		var quantity = document.getElementById(`quantity${key}`).value;
		var total = document.getElementById(`price${key}`).innerHTML;
		total = parseInt(price_d)*parseInt(quantity);
		s = parseInt(document.getElementById('sum').innerHTML);
		s += parseInt(total);
		document.getElementById(`price${key}`).innerHTML = total;
		// document.getElementById('sum').innerHTML = s;
		var ajax = new XMLHttpRequest();
		ajax.onreadystatechange = function(){
			if(this.readyState == 4 && this.status == 200){
				// console.log(this.responseText);
			}
		}
		ajax.open('GET',`{{route('cart.update')}}?key=${key}&quantity=${quantity}&total=${total}`,true);
		ajax.send();
	}
	
</script>
@endsection