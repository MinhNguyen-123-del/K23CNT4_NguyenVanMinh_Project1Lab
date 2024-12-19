<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thông Tin Chi Tiết Quản Trị</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <section class="container my-3">
        <form action="{{route('admins.editQuanTri',['id' => $id]) }}" method="POST">
            @csrf
            <div class="card">
                <div class="card-header">
                    <h3>Thông tin chi tiết Quản Trị cần sửa</h3>
                </div>
                <div class="card-body">
                    <div class="mb-3 row">
                        <label for="id" class="col-sm-2 col-form-label">id</label>
                        <div class="col-sm-10">
                          <input type="text" readonly class="form-control" 
                            id="id" name="id"
                            value="{{$id->id}}">
                        </div>
                      </div>
                      <div class="mb-3 row">
                        <label for="nvmTaiKhoan" class="col-sm-2 col-form-label">Tài Khoản</label>
                        <div class="col-sm-10">
                          <input type="text" readonly class="form-control" 
                            id="nvmInsert" name="nvmTaiKhoan"
                            value="{{$id->nvmTaiKhoan}}">
                        </div>
                      </div>
                      <div class="mb-3 row">
                        <label for="nvmMatKhau" class="col-sm-2 col-form-label">Mật Khẩu</label>
                        <div class="col-sm-10">
                          <input type="text" readonly class="form-control" 
                            id="nvmMatKhau" name="nvmMatKhau"
                            value="{{$id->nvmMatKhau}}">
                        </div>
                      </div>
                      <div class="mb-3 row">
                        <label for="	nvmTrangThai" class="col-sm-2 col-form-label">Trạng Thái</label>
                        <div class="col-sm-10">
                          <input type="text" readonly class="form-control" 
                            id="nvmTrangThai" name="nvmTrangThai"
                            value="{{$id->nvmTrangThai}}">
                        </div>
                      </div>
                </div>
                <div class="card-footer">
                    <button class="btn btn-primary mx-2">Submit</button>
                <a href="/khoas" class="btn btn-primary">Back</a>
                </div>
                </div>
        </form>
        
        </section>
</body>
</html>