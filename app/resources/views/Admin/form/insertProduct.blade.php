@extends('Admin.admin')
@section('content')
<form action="{{ route('products.insert')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Tên sách</label>
        <input name="name" type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Tác giả</label>
        <input name="author" type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Số lượng</label>
        <input name="quantity" type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
      </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Giá</label>
        <input name="price" type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Mô tả</label>
        <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
    @if($cate)
    <div class="mb-3">
        <label for="select" class="form-label">Thể loại</label>
        <select name="category" id="select" class="form-select" aria-label="Default select example">
            <option selected>Chọn thể loại</option>
            @foreach ($cate as $item)
                <option value="{{$item->id}}">{{$item->name}}</option>    
            @endforeach
        </select>
    </div>
    @endif
    <div class="mb-3">
        <input type="file" name="image" class="form-control" id="inputGroupFile03" aria-describedby="inputGroupFileAddon03" aria-label="Upload">
    </div>
    @if ($cate)
    <button type="submit" class="btn insert btn-success">Thêm</button>
    @endif
    @if($product)
    <button type="submit" class="btn insert btn-success">Thêm</button>    
    @endif
</form>    
@endsection