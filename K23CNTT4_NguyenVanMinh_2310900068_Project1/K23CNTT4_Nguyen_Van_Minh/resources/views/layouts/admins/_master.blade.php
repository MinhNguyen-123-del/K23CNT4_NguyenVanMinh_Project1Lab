<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>@yield('title')t</title>
    <style>
        .sideBar{
            width: 250px;
            background: #fff
        }
        .wrapper{
            width: calc(100%-250px);
            background: #fff;
            margin-left: 40px;
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