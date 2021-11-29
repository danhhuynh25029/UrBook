<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/home.css')}}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
</head>
<body>
    <div class="container-fluid">
         <!-- day la header ne -->
        <div class="row header">
            <!-- <div class="col-2" style="line-height: 50px;">
                <h3>UrBook</h3>
            </div> -->
            <div class="col">
                <ul class="nav" style="line-height: 50px;">
                    <li class="nav-item">
                        <a class="nav-link" href="#" style="font-size:30px;">UrBook</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Trang chủ</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Giới thiệu</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link disabled">Liên hệ</a>
                    </li>
                  </ul>
            </div>
            <div class="col-3">
                <ul class="nav" style="line-height: 50px;">  
                    <li class="nav-item">
                        <a class="nav-link" href="#">Giỏ hàng</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('signin')}}">Đăng nhập</a>
                    </li>
                </ul>
            </div>
            </div>
        </div>
    </div>
        <!-- Day la noi dung ne -->
    <div class="container-fluid" style="width: 93%;">
        <div class="row body">
            <div class="col-2 categories" >
                <h3>Danh mục</h3>
                <div class="list">
                <ul>
                    <li>Sách giáo dục</li>
                    <li>Ngôn tình</li>
                </ul>
            </div>
            </div>
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
        
        </div>
        <!-- panigation -->
        <div class="row" style="margin-top: 10px;">
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
        </div>
    </div>
        <!-- footer ne -->
    <div class="container-fluid">
        <div class="row footer">
            <div class="col">
                <p>footer ne nhe</p>
            </div>
        </div>
    </div>
</div>
</body>
</html>