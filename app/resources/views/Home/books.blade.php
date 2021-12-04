@extends('Home.body')
@section('content')
<div class="col-10 content">
    <!-- <div class="content bg-white" style="width: 100%;margin-top: 10px;">
        <div class="col-12 d-flex justify-content-between align-items-center pb-2">
            <h3>SÁCH MỚI CẬP NHẬT</h3>
            <a href="#" class="btn btn-warning text-white">Xem tất cả</a>
        </div>
    </div> -->
    <!-- Noi hien thi san pham ne -->
    <div class="row">
        @foreach ($products as $item)  
        <div class="col-3 item">
          <a href="{{route('home.detail',['id'=>$item->id])}}" style="text-decoration:none;color:black;">
            <div class="card" >
                <img src="{{asset($item->image)}}" class="card-img-top" alt="..."  >
                <div class="card-body">
                    <p class="card-text name">{{$item->name}}</p>
                    <p class="card-text price"><b>Giá : {{ number_format($item->price,0,',','.')}} vnđ</b></p>
                    <!-- <a href="#" class="card-link">Thêm vào giỏ</a>
                    <a href="#" class="card-link">Xem chi tiết</a> -->
                  </div>
              </div>
            </a>
        </div>
        @endforeach
    </div>
</div>

@endsection
@section('panigation')
<nav aria-label="Page navigation example" style="margin: 0 auto;">
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
  </nav>
@endsection