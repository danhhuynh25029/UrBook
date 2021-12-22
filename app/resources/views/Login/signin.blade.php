<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>
<form action="{{route('signin')}}" method="POST">
    @csrf
    <table class="Signin">
        <tr>
            <td>Đăng nhập</td>
            <td><a href="{{route('signup')}}">Đăng ký</a></td>
        </tr>
        <tr>
            <td colspan="2">
                <input value="{{$name}}" name="name" class="form-control" placeholder="email" type="text" required>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <input  value="{{$password}}" name="password" class="form-control" placeholder="******" type="password" required>
            </td>
        </tr>
        <tr>
        <td colspan="2"><button type="submit" class="btn btn-primary">Đăng nhập</button></td>
        {{-- <td><a class="small" href="#">Quên mật khẩu ?</a></td> --}}
        </tr>
    </table>
</form>
</body>
<script src="js/bootstrap.min.js"></script>
</html>