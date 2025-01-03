<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>@yield('title')t</title>
    <style>
         {
            width: 250px;
            background: #f8f9fa; /* Màu sáng dễ nhìn */
            height: 100vh; /* Chiều cao full màn hình */
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1); /* Tạo bóng để nổi bật */
            position: fixed; /* Cố định sidebar */
            padding: 15px;
        }
    
        .wrapper {
            margin-left: 270px; /* Đẩy toàn bộ nội dung sang phải */
            width: calc(.sideBar100% - 270px); /* Điều chỉnh chiều rộng để tránh tràn */
            background: #fff;
            padding: 20px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); /* Tạo bóng nhẹ */
            border-radius: 10px; /* Tạo góc bo tròn */
        }
    
        body {
            font-family: 'Poppins', sans-serif; /* Font đẹp hơn */
            background: #f1f1f1; /* Màu nền tổng thể nhẹ nhàng */
            margin: 0;
            padding: 0;
        }
    
        header {
            background: #f8f9fa; /* Header nổi bật hơn */
            border-radius: 8px;
            padding: 10px 15px;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1); /* Hiệu ứng nổi bật */
        }
    
        h2 {
            color: #333; /* Màu chữ đậm hơn để dễ nhìn */
        }
    </style>
    
</head>
<body>
    <section class="container-fluid d-flex">
        <nav class="sideBar my-1">
            @include('layouts.admins._menu')
            

        </nav>
        <section class="wrapper m-1">
            <header class="border my-1 p-1">
                @include('layouts.admins._headerTitle')
                <h2>@yield('headerTitle')</h2>
            </header>
            <section class="content-body my-1 p-1">
                @yield('content-body')
            </section>
        </section>
    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>;
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>