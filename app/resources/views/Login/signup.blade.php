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
<form action="{{route('signup')}}" method="POST">
    @csrf

    <table class="Signup">
        <tr>
            <td><a href="{{route('signin')}}">Đăng nhập</a></td>
            <td>Đăng kí</td>
        </tr>
        <tr>
            <td colspan="2" style="text-align: left;">
                <label>Tên đăng nhập : </label>
                <input id="name" name="name" class="form-control" placeholder="Tên đăng nhập" type="text" required>
            </td>
        </tr>
        <tr>
            <td colspan="2" style="text-align: left;">
                <label>Email : </label>
                <input id="email" name="email" class="form-control" placeholder="Email" type="email" required>
            </td>
        </tr>
        <tr>
            <td colspan="2" style="text-align: left;">
                <label>Mật khẩu : </label>
                <input id="password" onkeyup="check()"name="password" class="form-control" placeholder="Mật khẩu" type="password" required>
            </td>
        </tr>
        <tr>
            <td colspan="2" style="text-align: left;">
                <label>Xác nhận mật khẩu : </label>
                <input id="con_password" onkeyup="check()" name="con_password" class="form-control" placeholder="Xác nhận mật khẩu" type="password" required>
                <span id='message'></span>
            </td>
        </tr>
        {{-- <tr>
            <td colspan="2" style="text-align: left;">
                <label>Xác nhận mật khẩu : </label>
                <input id="confirm" name="confirm" class="form-control" placeholder="Xác nhận mật khẩu" type="password">
            </td>
        </tr> --}}
        <tr>
        <td colspan="2"><button type="submit" class="btn btn-primary">Đăng kí</button></td>
        </tr>
    </table>
</form>
<div id="status">
    
</div>
</body>
<script type="text/javascript">
    function check() {
         if (document.getElementById('password').value == document.getElementById('con_password').value) {
            document.getElementById('message').style.color = 'green';
            document.getElementById('message').innerHTML = 'giống nhau';
          } else {
            document.getElementById('message').style.color = 'red';
            document.getElementById('message').innerHTML = 'Vui lòng nhập giống nhau';
          }
    }
</script>
<script src="js/bootstrap.min.js"></script>
</html>