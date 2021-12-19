@extends('Home.home')
@section('body')
<div class="container-fluid" style="width: 93%;">
    <div class="row body">
        <div class="col-2 categories" >
            <h3>Thể loại</h3>
            <hr style="background-color: #079992;height: 2px;">
            <div class="list">
            <ul>
                @if(strpos(url()->full(),"id"))
                <?php $URL= preg_replace('/id=[0-9]+/', 'id=', url()->full()) ?>
                @foreach($categories as $item)
                <li><a href="{{str_replace("id=","id=".$item->id,$URL)}}">{{$item->name}}</a></li>
                @endforeach
                @elseif(strpos(url()->full(),"name"))
                @foreach($categories as $item)
                <li><a href="{{url()->full()."&"."id=".$item->id}}">{{$item->name}}</a></li>
                {{-- <a  href="#">{{$item->name}}</a> --}}
                @endforeach
                @else
                @foreach($categories as $item)
                <li><a href="{{route('home.find',['id'=>$item->id])}}">{{$item->name}}</a></li>
                {{-- <a  href="#">{{$item->name}}</a> --}}
                @endforeach
                @endif
                {{--  --}}
                <h3>Giá</h3>
                <hr style="background-color: #079992;height: 2px;">
                @if(strpos(url()->full(),"price=DESC"))
                <li><a  href="{{ str_replace("DESC","ASC",url()->full())}}">Thấp-Cao</a></li>
                @elseif(strpos(url()->full(),"find?"))
                <li><a  href="{{url()->full(). '&' . http_build_query(['price' => 'ASC'])}}">Thấp-Cao</a></li>
                @else
                <li><a  href="{{url()->full(). '/find?' . http_build_query(['price' => 'ASC'])}}">Thấp-Cao</a></li>
                @endif
                {{--  --}}
                @if(strpos(url()->full(),"price=ASC"))
                <li><a  href="{{ str_replace("ASC","DESC",url()->full())}}">Cao-Thấp</a></li>
                @elseif(strpos(url()->full(),"find?"))
                <li><a  href="{{url()->full(). '&' . http_build_query(['price' => 'DESC'])}}">Cao-Thấp</a></li>
                @else
                <li><a  href="{{url()->full(). '/find?' . http_build_query(['price' => 'DESC'])}}">Cao-Thấp</a></li>
                @endif
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