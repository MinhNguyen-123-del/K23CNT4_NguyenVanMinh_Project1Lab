<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vui lòng Điển Thông Tin</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <style>
        body {
            background-image: url("{{ asset('images/banhang2.jpg') }}");
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;

}
    </style>
</head>
<body>
    <section class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3 my-3">
                <div class="card">
                    <div class="card-header">
                        <h2>Đăng kí</h2>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ Route('admins.nvmLoginSubmit') }}">
                            @csrf
                            
                            <div class="inputBox">
                                <input type="text" name="fullname" id="fullname" required placeholder=" ">
                                <label for="fullname">Họ và Tên</label>
                            </div>
                           
                            <div class="inputBox">
                                <input type="email" name="email" id="email" required placeholder=" ">
                                <label for="email">Email</label>
                            </div>
                            
                            <div class="inputBox">
                                <input type="password" name="password" id="password" required placeholder=" ">
                                <label for="password">Mật khẩu</label>
                            </div>
                           
                            <div class="forget">
                                <label>
                                    <input type="checkbox" name="remember"> Ghi nhớ đăng nhập
                                </label>
                                <a href="#">Quên mật khẩu?</a>
                            </div>
                           
                            <button type="submit">Đăng Nhập</button>
                        </form>
                        
                        <div class="register">
                            <p>Bạn chưa có tài khoản? <a href="#">Đăng ký ngay</a></p>
                        </div>
                    </div>
                </div>
            </section>
        </body>
        </html>