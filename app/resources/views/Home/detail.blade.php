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
                        <td><input type="number" name="quantity"  value="1" step="1" value="{{$product->quantity}}"></td>
                        </tr>
                        <tr>
                        <td><button type="submit" class="btn btn-primary">Mua</button></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col" style="margin-bottom: 10px;">
                <h3 style="text-align: center;">Review</h3>
                <div class="cmt">
                    <ul>
                        @foreach($comments as $key => $item)
                        <li><b><i class="far fa-user"></i>{{$user_name[$key]}} :</b> {{$item->content}}</li>
                        @endforeach
                    </ul>
                </div>
                <form style="width: 70%;margin:10px auto;" method="POST" action="{{route('home.comment')}}">
                    @csrf
                <div class="mb-3">
                  <input type="text" name="product" style="display: none;" value="{{$product->id}}">
                  <input type="text" name="user" style="display: none;" value="{{$user->id}}">
                  <textarea style="height: 100px;" name="content" class="form-control review" id="exampleFormControlTextarea1" rows="3"></textarea>
                  <button type="submit" style="float: right;margin-top: 5px;"class="btn btn-primary">Bình luận</button>
                </div>
                </form>
            </div>
        </div>
    </div>
@endsection