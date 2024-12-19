<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NVM Danh Quản Trị Viên</title>
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <section class="container border my-3">
        <h1>Danh Sách Quản Trị Viên</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Tài Khoản</th>
                    <th>Mật Khẩu</th>
                    <th>Trạng Thái</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $stt=0;
                @endphp
                @foreach ($nvmQuanTris as $item)
                @php
                    $stt++;
                @endphp
                    <tr>
                        
                        <td>{{$item->id}}</td>
                        <td>{{$item->nvmTaiKhoan}}</td>
                        <td>{{$item->nvmMatKhau}}</td>
                        <td>{{$item->nvmTrangThai}}</td>
                        <td>
                            <a href="/quantris/detail/{{$item->id}}" class="btn btn-success">
                                Thêm Mới</a>                          
                                <a href="/quantris/edit/{{$item->id}}" class="btn btn-primary">
                                Sửa </a>
                            </a href="/quantris/delete/{{$item->id}}" class="btn btn-primary">                          
                                 delete
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
</body>
</html>