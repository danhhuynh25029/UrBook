@extends('Home.home')
@section('body')
<div class="container-fluid" style="width: 93%;">
    <div class="row body">
        <div class="col-2 categories" >
            <h3>Danh mục</h3>
            <hr style="background-color: #079992;height: 2px;">
            <div class="list">
            <ul>
                <form action="{{route('home.find')}}" method="GET">
                @foreach($categories as $item)
                {{-- <li><a href="{{route('home.find',['id'=>$item->id])}}">{{$item->name}}</a></li> --}}
                <input type="radio" name="id" id="{{$item->cate}}" value="{{$item->id}}">
                <label for="{{$item->cate}}">{{$item->name}}</label><br>
                @endforeach
                <h3>Giá</h3>
                <hr style="background-color: #079992;height: 2px;">
                <input type="radio" id="price" name="price" value="ASC">
                <label for="a">Thấp-Cao</label><br>
                <input type="radio" id="price" name="price" value="DESC">
                <label for="">Cao-Thấp</label><br>
                <button type="submit" class="btn btn-primary">Tìm</button>
                </form>
                {{-- <li><a href="#">Sách giáo dục</a></li>
                <li><a href="#">Ngôn tình</a></li> --}}
            </ul>
        </div>
        </div>
        @yield('content')
    </div>
    <!-- panigation -->
    <div class="row" style="margin-top: 10px;">
        @yield('panigation')
    </div>
</div>
@endsection