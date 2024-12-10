<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NVM-Danh sách khoa</title>
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <section class="container border my-3">
        <h1>Danh Sach Khoa</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Mã Khoa</th>
                    <th>Tên Khoa</th>
                    <th>Chức Năng</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $stt=0;
                @endphp
                @foreach ($nvmKhoas as $item)
                @php
                    $stt++;
                @endphp
                    <tr>
                        <td>{{$stt}}</td>
                        <td>{{$item->nvmMaKhoa }}</td>
                        <td>{{$item->nvmTenKhoa}}</td>
                        <td>
                            <a href="/khoas/detail/{{$item->nvmMaKhoa}}" class="btn btn-success">
                                Chi Tiết</a>                          
                                <a href="/khoas/edit/{{$item->nvmMaKhoa}}" class="btn btn-primary">
                                Sửa </a>
                            </a>                          
                                 delete
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
</body>
</html>