@extends('Admin.admin')
@section('content')
@if($product)
<form action="{{ route('products.update',['id'=>$product->id])}}" method="POST" enctype="multipart/form-data">
@else
<form action="{{ route('products.insert')}}" method="POST" enctype="multipart/form-data">
@endif
    @csrf
    <input type="hidden" id="_token" value="{{ csrf_token() }}">
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Tên sách</label>
        @if ($product)
        <input name="name" value="{{$product->name}}" type="text" class="form-control" id="name" placeholder="" required>
        @else
        <input name="name" type="text" class="form-control" id="name" placeholder="" required>             
        @endif
        
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Tác giả</label>
        @if ($product)
            <input value="{{$product->author}}" name="author" type="text" class="form-control" id="author" placeholder="" required>
        @else
            <input name="author" type="text" class="form-control" id="author" placeholder="" required>
        @endif
        
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Số lượng</label>
        @if($product)
            <input value="{{$product->quantity}}" name="quantity" type="text" class="form-control" id="quantity" placeholder="" required>
        @else
            <input name="quantity" type="text" class="form-control" id="quantity" placeholder="" required>
        @endif
       
      </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Giá</label>
        @if ($product)
            <input value="{{$product->price}}" name="price" type="text" class="form-control" id="price" placeholder="" required>
        @else
            <input name="price" type="text" class="form-control" id="price" placeholder="" required>
        @endif
    </div>
   
    @if($cate && $product)
    <div class="mb-3">
        <label for="select" class="form-label">Thể loại</label>
        <select name="category" id="select" class="form-select" aria-label="Default select example" required>
            <option value="">Chọn thể loại</option>
            @foreach ($cate as $item)
                @if ($item->id == $product->category_id)
                    <option value="{{$item->id}}" selected>{{$item->name}}</option>  
                @else
                    <option value="{{$item->id}}">{{$item->name}}</option>  
                @endif
                  
            @endforeach
        </select>
    </div>
    @else
    <div class="mb-3">
        <label for="select" class="form-label">Thể loại</label>
        <select name="category" id="select" class="form-select" aria-label="Default select example" required>
            <option  value="" selected>Chọn thể loại</option>
            @foreach ($cate as $item)
                <option value="{{$item->id}}">{{$item->name}}</option>  
            @endforeach
        </select>
    </div>
    @endif
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Mô tả</label>
        @if ($product)
        <textarea name="description" class="form-control" id="des" rows="3" maxlength="255">{{$product->description}}</textarea>
        @else
        <textarea name="description" class="form-control" id="des" rows="3" maxlength="255"></textarea>
        @endif
    </div>
    <div class="mb-3">
        @if ($product)
        <input value="{{$product->image}}" type="file" name="image" class="form-control" aria-describedby="inputGroupFileAddon03" aria-label="Upload" required>
        <img id="img" src="{{asset($product->image)}}" width="130px" height="100px">
        @else
        <input type="file" name="image" class="form-control" aria-describedby="inputGroupFileAddon03" aria-label="Upload" required>
        @endif
       
    </div>
    @if ($cate && $product)
    <button type="submit" onclick="" class="btn insert btn-success">Cập nhật</button>
    @elseif($cate)
    <button type="submit" onclick="" class="btn insert btn-success">Thêm</button>    
    @endif
</form> 
@endsection