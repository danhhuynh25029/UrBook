@extends('Home.body')
@section('content')
<div class="col content">
    <ul class="nav nav-book">
        {{-- San pham moi nhat --}}
        @if(strpos(url()->full(),"sort=down") || strpos(url()->full(),"sort=top") || strpos(url()->full(),"sort=sell"))
        <li class="nav-item">
            <?php $URL = preg_replace("/sort=*.[a-z].*/","sort=",url()->full()) ?>
            <a class="nav-link" href="{{str_replace("sort=","sort=date",$URL)}}">Mới nhất</a>
        </li>
        @elseif(strpos(url()->full(),"find?"))
        <li class="nav-item">
            <a class="nav-link" href="{{url()->full()."&".http_build_query(['sort'=>'date'])}}">Mới nhất</a>
        </li>
        @else
             <li class="nav-item">
            <a class="nav-link" href="{{url()->full()."/find?".http_build_query(['sort'=>'date'])}}">Mới nhất</a>
        </li>
        @endif
        {{-- tim kiem theo muc do pho bien --}}
        @if(strpos(url()->full(),"sort=down") || strpos(url()->full(),"sort=top") || strpos(url()->full(),"sort=date"))
        <li class="nav-item">
            <?php $URL = preg_replace("/sort=*.[a-z].*/","sort=",url()->full()) ?>
            <a class="nav-link" href="{{str_replace("sort=","sort=sell",$URL)}}">Bán chạy</a>
        </li>
        @elseif(strpos(url()->full(),"find?"))
        <li class="nav-item">
            <a class="nav-link" href="{{url()->full()."&".http_build_query(['sort'=>'sell'])}}">Bán chạy</a>
        </li>
        @else
             <li class="nav-item">
            <a class="nav-link" href="{{url()->full()."/find?".http_build_query(['sort'=>'sell'])}}">Bán chạy</a>
        </li>
        @endif
        {{-- tim theo gia thap den cao--}}
        @if(strpos(url()->full(),"sort=down") || strpos(url()->full(),"sort=date") || strpos(url()->full(),"sort=sell"))
        <?php $URL = preg_replace("/sort=*.[a-z].*/","sort=",url()->full()) ?>
        <li class="nav-item"><a class="nav-link" href="{{ str_replace("sort=","sort=top",$URL)}}">Thấp-Cao</a></li>
        @elseif(strpos(url()->full(),"find?"))
        <li class="nav-item"><a class="nav-link"  href="{{url()->full(). '&' . http_build_query(['sort' => 'top'])}}">Thấp-Cao</a></li>
        @else
        <li class="nav-item"><a class="nav-link"  href="{{url()->full(). '/find?' . http_build_query(['sort' => 'top'])}}">Thấp-Cao</a></li>
        @endif
        {{-- cao den thap  --}}
        @if(strpos(url()->full(),"sort=date") || strpos(url()->full(),"sort=top") || strpos(url()->full(),"sort=sell"))
        <?php $URL = preg_replace("/sort=*.[a-z].*/","sort=",url()->full()) ?>
        <li class="nav-item"><a class="nav-link"  href="{{ str_replace("sort=","sort=down",$URL)}}">Cao-Thấp</a></li>
        @elseif(strpos(url()->full(),"find?"))
        <li class="nav-item"><a class="nav-link"  href="{{url()->full(). '&' . http_build_query(['sort' => 'down'])}}">Cao-Thấp</a></li>
        @else
        <li class="nav-item"><a class="nav-link"  href="{{url()->full(). '/find?' . http_build_query(['sort' => 'down'])}}">Cao-Thấp</a></li>
        @endif
    </ul>
    <hr style="height: 1px;background-color: rgb(228, 226, 226);">
    <div class="row">
        @foreach ($products as $key => $item)
        @if($item->quantity > 0)
        <div class="col-3 item" id="book">
          <a href="{{route('home.detail',['id'=>$item->id])}}" style="text-decoration:none;color:black;">
            <div class="card" >
                <img src="{{asset($item->image)}}" class="card-img-top" alt="..."  >
                <div class="card-body">
                    @if(strlen($item->name) > 21)
                    <p class="name" class="card-text name">{{substr($item->name,0,18)}}...</p>
                    @else
                    <p class="name" class="card-text name">{{$item->name}}</p>
                    @endif
                    
                    <p class="card-text price"><b>Giá : {{ number_format($item->price,0,',','.')}} vnđ</b></p>
                    <!-- <a href="#" class="card-link">Thêm vào giỏ</a>
                    <a href="#" class="card-link">Xem chi tiết</a> -->
                </div>
              </div>
            </a>
        </div>
        @endif
        @endforeach
    </div>
</div>

@endsection
@section('panigation')
{{-- <nav aria-label="Page navigation example" style="margin: 0 auto;">
    <ul class="pagination" style="color:#079992;">
      <li class="page-item">
        <a class="page-link" href="#" aria-label="Previous">
          <span aria-hidden="true">&laquo;</span>
        </a>
      </li>
      <li class="page-item"><a class="page-link" href="#">1</a></li>
      <li class="page-item"><a class="page-link" href="#">2</a></li>
      <li class="page-item"><a class="page-link" href="#">3</a></li>
      <li class="page-item">
        <a class="page-link" href="#" aria-label="Next">
          <span aria-hidden="true">&raquo;</span>
        </a>
      </li>
    </ul>
  </nav> --}}
  <div class="pagi">
  {{ $products->render() }}
  </div>
<script type="text/javascript">


</script>
@endsection
