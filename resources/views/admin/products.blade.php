@extends('admin/admin')
@section('content')
<table class="table">
  <thead>
    <tr>
      <th scope="col">STT</th>
      <th scope="col">Ảnh minh họa</th>
      <th scope="col">Tên Sản phẩm</th>
      <th scope="col">Giá</th>
      <th scope="col">Số lượng</th>
      <th scope="col">Thông tin chi tiết</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td><img src="https://salt.tikicdn.com/cache/400x400/ts/product/83/30/87/737846efdb9f28f0f51352cacf9225c5.jpg.webp" class="img-thumbnail" alt="..." style="width:100px;height: 100px;"></td>
      <td>Lâu tình ái</td>
      <td>20.000vnđ</td>
      <td>
        <input type="number" name="">
      </td>
      <td><a href="#">Chi tiết</a></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Những bông hoa nhỏ</td>
      <td>30.000vnđ</td>
      <td>1</td>
      <td><a href="#">Chi tiết</a></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Cá hồi 3 cô gái</td>
      <td>10.000vnđ</td>
      <td>3</td>
      <td><a href="#">Chi tiết</a></td>
    </tr>
  </tbody>
</table>
@endsection