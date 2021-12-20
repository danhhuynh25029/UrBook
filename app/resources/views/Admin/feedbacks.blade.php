@extends('Admin.admin')
@section('content')
<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">email</th>
        <th scope="col">Ngày gửi</th>
        <th scope="col">Nội dung</th>
        {{-- <th scope="col">Handle</th> --}}
      </tr>
    </thead>
    <tbody>
      @foreach($feedbacks as $item)
      <tr>
        <th scope="row">{{$item->id}}</th>
        <td>{{$item->email}}</td>
        <td>{{date("d/m/Y",strtotime($item->created_at))}}</td>
        <td>
          {{$item->content}}
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>    
@endsection