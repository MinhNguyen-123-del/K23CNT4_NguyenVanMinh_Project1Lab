<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NVM-Danh Sach Tai Khoan</title>
</head>
<body>
    <section class="container my-3">
        <h1>Nvm-Danh sach tai khoan</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Id</th>
                    <th>UserName</th>
                    <th>Password</th>
                    <th>FullName</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $stt=0
                @endphp
                @foreach ($model as $item)
                @php
                    $stt=0
                @endphp
                    <tr>
                        <td>1</td>
                        <td>{{$item->nvm_id}}</td>
                        <td>{{$item->nvm_usename}}</td>
                        <td>{{$item->nvm_password}}</td>
                        <td>{{$item->nvm_fullname}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>

</body>
</html>