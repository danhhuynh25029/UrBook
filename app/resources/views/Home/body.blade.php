@extends('Home.home')
@section('body')
<div class="container-fluid" style="width: 93%;">
    <div class="row body">
        <div class="col-2 categories" >
            <h3>Danh mục</h3>
            <div class="list">
            <ul>
                @foreach($categories as $item)
                <li><a href="{{route('home.find',['id'=>$item->id])}}">{{$item->name}}</a></li>
                @endforeach
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