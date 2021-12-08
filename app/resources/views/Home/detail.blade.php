@extends('Home.home')
@section('body')
    <div class="container detail" style="width: 93%;">
        <div class="row">
            <div class="col-5">
                <img src="{{asset($product->image)}}">
            </div>
            <div class="col">
                <table>
                    <tr>
                        <td><h1>{{$product->name}}</h1></td>
                    </tr>
                    <tr>
                        <td><h4>Tác giả : {{$product->author}}</h4></td>
                    </tr>
                    <tr>
                        <td><h5>Số lượng còn lại : {{$product->quantity}}</h5></td>
                    </tr>
                    <tr>
                <td><h4 style="color:blue"><b>Giá : {{ number_format($product->price,0,',','.')}} vnđ</b></h4></td>
                </tr>   
                </table>
                <form action="{{route('cart.add')}}" method="GET">
                    <table>
                        <tr>
                        <td><input type="text" name="id" value="{{$product->id}}" style="display: none;"></td>
                        </tr>
                                                <tr>
                        <td><input type="text" name="price" value="{{$product->price}}" style="display: none;"></td>
                        </tr>
                        <tr>
                        <td><input type="number" name="quantity" step="1" value="0"></td>
                        </tr>
                        <tr>
                        <td><button type="submit" class="btn btn-primary">Mua</button></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
@endsection