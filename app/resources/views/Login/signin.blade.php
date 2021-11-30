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
<form>
    <table class="Signin">
        <tr>
            <td colspan="2">Đăng nhập</td>
        </tr>
        <tr>
            <td colspan="2">
                <input name="" class="form-control" placeholder="Email" type="email">
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <input class="form-control" placeholder="******" type="password">
            </td>
        </tr>
        <tr>
        <td><button type="button" class="btn btn-primary">Đăng nhập</button></td>
        <td><a class="small" href="#">Quên mật khẩu ?</a></td>
        </tr>
    </table>
</form>
</body>
<script src="js/bootstrap.min.js"></script>
</html>