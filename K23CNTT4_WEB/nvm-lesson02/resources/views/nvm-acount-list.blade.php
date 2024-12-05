<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ds tai khoan</title>
</head>
<body>
    <section>
        <h1>Nvm-Danh sach tai khoan</h1>
        <table>
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
                @foreach ($list as $item)
                    <tr>
                        <td>1</td>
                        <td>{{$item['id']}}</td>
                        <td>{{$item['UserName']}}</td>
                        <td>{{$item['Password']}}</td>
                        <td>{{$item['FullName']}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>

</body>
</html>