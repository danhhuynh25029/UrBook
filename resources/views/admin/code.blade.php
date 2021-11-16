@extends('admin/admin')
@section('content')
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Mã</th>
      <th scope="col">Số lượng</th>
      <th scope="col">Giá trị</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>xyz2313</td>
      <td>10</td>
      <td>30%</td>
      {{-- <th><a href="#">Cập nhật</a></th> --}}
    </tr>
  </tbody>
</table>
@endsection