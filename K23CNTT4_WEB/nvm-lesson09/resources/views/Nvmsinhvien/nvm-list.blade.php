<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh sach sinh vien</title>
    <link rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <section class="container my-3">
        <div class="card">
             <div class="card-header">
                <h1>Danh sách sinh viên</h1>
        </div>
        <div class="card-body">
          <table class="table table-bordered">
             <thead>
                <tr>
                    <th class="text-center">#</th>
                    <th>Mã sinh viên</th>
                    <th>Họ và tên</th>
                    <th>Giới tính</th>
                    <th>Ngày sinh</th>
                    <th>Nơi sinh</th>
                    <th>Mã khoa</th>
                    <th>Học bổng</th>
                    <th class="text-center">Chức năng</th>
                </tr>
        </thead>
        <tbody>
            @if (Session::has('sinhVien_deleted'))
            <div class="alert alert-success" role="alert">
            {{Session::get('sinhVien_deleted')}}
            </div>
            @endif
            @php
            $stt=0;
            @endphp
            @foreach ($nvmsinhvien as $item)
            @php
            $stt++;
            @endphp
                <tr>
                    <th class="text-center">{{$stt}}</th>
                    <td>{{$item->NVMMaSV}}</td>
                    <td>{{$item->NVMHoSV}} {{$item->NVMHoSV}}</td>
                    <td>{{$item->Phai}}</td>
                    <td>{{$item->NgaySinh}}</td>
                    <td>{{$item->NoiSinh}}</td>
                    <td>{{$item->NVMMaKH}}</td>
                    <td>{{$item->HocBong}}</td>
                    <td class="text right">{{$item->HocBong}}</td>
                    <td class="text-center">
                        view/ edit / delete
                </tr>
            @endforeach
            </tbody>
        

        </div>
    </div>
    <div class="card-footer">
        <h3>Tong So Sinh Vien {{$nvmsinhvien->count()}}</h3>
        <a href="/nvm-sinhviens/create" class="btn btn-primary">Them Moi</a>
    </div>
    </section>
</body>
</html>