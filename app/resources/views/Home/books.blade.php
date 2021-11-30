@extends('Home.home')
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
        <div class="col-3 item">
            <div class="card" >
                <img src="./images/1.jpg" class="card-img-top" alt="..."  >
                <div class="card-body">
                    <p class="card-text">Những bông hoa nhỏ</p>
                    <p class="card-text">Tác giả : haha</p>
                    <!-- <a href="#" class="card-link">Thêm vào giỏ</a>
                    <a href="#" class="card-link">Xem chi tiết</a> -->
                  </div>
              </div>
        </div>
        <div class="col-3 item">
            <div class="card">
                <img src="./images/1.jpg" class="card-img-top" alt="..."  >
                <div class="card-body">
                    <p class="card-text">Những bông hoa nhỏ</p>
                    <p class="card-text">Tác giả : haha</p>
                  </div>
              </div>
        </div>
        <div class="col-3 item">
            <div class="card" >
                <img src="./images/1.jpg" class="card-img-top" alt="..."  >
                <div class="card-body">
                    <p class="card-text">Những bông hoa nhỏ</p>
                    <p class="card-text">Tác giả : haha</p>
                    <!-- <a href="#" class="card-link">Thêm vào giỏ</a>
                    <a href="#" class="card-link">Xem chi tiết</a> -->
                </div>
              </div>
        </div>
        <div class="col-3 item">
            <div class="card">
                <img src="./images/1.jpg" class="card-img-top" alt="..."  >
                <div class="card-body">
                  <p class="card-text">Những bông hoa nhỏ</p>
                  <p class="card-text">Tác giả : haha</p>
                </div>
              </div>
        </div>
        <div class="col-3 item">
            <div class="card">
                <img src="./images/1.jpg" class="card-img-top" alt="..."  >
                <div class="card-body">
                  <p class="card-text">Những bông hoa nhỏ</p>
                  <p class="card-text">Tác giả : haha</p>
                  
                </div>
              </div>
        </div>
        <div class="col-3 item">
            <div class="card">
                <img src="./images/2.jpg" class="card-img-top" alt="..."  >
                <div class="card-body">
                  <p class="card-text">Những bông hoa nhỏ</p>
                  <p class="card-text">Tác giả : haha</p>
                </div>
              </div>
        </div>
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