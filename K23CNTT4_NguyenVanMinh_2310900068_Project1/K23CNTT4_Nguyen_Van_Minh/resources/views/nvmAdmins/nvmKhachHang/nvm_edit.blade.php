@extends('layouts.admins._master')
@section('title','Sửa Thông Tin Khách Hàng')

    @section('content-body')
    <div class="container boder">
        <div class="row ">
            <div class="col">
              <form action="{{route('nvmadmins.nvmkhachhang.nvmeditsubmit')}}" method="POST">
                    @csrf
                    <input type="hidden" name="id" id="id" value="{{$nvmKhachHang->id}}">
                    <div class="card-header">
                        <h2>Sửa Thông Tin Khách Hàng</h2>
                    </div>
                    <div class="card-body container-fluid">
                        <div class="mb-3 row">
                            <label for="nvmMaKhachHang" class="col-sm-2 col-form-label">Mã Khách Hàng</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="nvmMaKhachHang" name="nvmMaKhachHang" value="{{$nvmKhachHang->nvmMaKhachHang}}">
                            </div>  
                        </div>
                        <div class="card-body container-fluid">
                            <div class="mb-3 row">
                                <label for="nvmHoTenKhachhang" class="col-sm-2 col-form-label">Họ và Tên Khách Hàng</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="nvmHoTenKhachhang" name="nvmHoTenKhachhang" value="{{ old('nvmHoTenKhachhang', $nvmHoTenKhachhang ?? '') }}" >
                                </div>
                            </div>
                        </div>
                        <div class="card-body container-fluid">
                            <div class="mb-3 row">
                                <label for="nvmEmail" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="nvmEmail" name="nvmEmail" value="{{ old('nvmEmail', $nvmEmail ?? '') }}">
                                </div>
                            </div>
                        </div>
                        <div class="card-body container-fluid">
                            <div class="mb-3 row">
                                <label for="nvmMatKhau" class="col-sm-2 col-form-label">Mật Khẩu</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="nvmMatKhau" name="nvmMatKhau" value="{{ old('nvmMatKhau', $nvmMatKhau ?? '') }}">
                                </div>
                            </div>
                        </div>
                        <div class="card-body container-fluid">
                            <div class="mb-3 row">
                                <label for="nvmDienThoai" class="col-sm-2 col-form-label">Điện Thoại</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="nvmDienThoai" name="nvmDienThoai" value="{{ old('nvmDienThoai', $nvmDienThoai ?? '') }}">
                                </div>
                            </div>
                        </div>
                        <div class="card-body container-fluid">
                            <div class="mb-3 row">
                                <label for="nvmDiaChi" class="col-sm-2 col-form-label">Địa Chỉ</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="nvmDiaChi" name="nvmDiaChi" value="{{ old('nvmDiaChi', $nvmDiaChi ?? '') }}">
                                </div>
                            </div>
                        </div>
                        <div class="card-body container-fluid">
                            <div class="mb-3 row">
                                <label for="nvmNgayDangKy" class="col-sm-2 col-form-label">Ngày Đăng Kí</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="nvmNgayDangKy" name="nvmNgayDangKy" value="{{$nvmKhachHang->nvmNgayDangKy}}">
                                </div>
                            </div>
                        </div>
                        
                        <div class="card-body container-fluid">
                            <div class="mb-3 row">
                                <label for="nvmTrangThai" class="col-sm-2 col-form-label">Trạng Thái</label>
                                <div class="col-sm-10">
                                    @if($nvmKhachHang->nvmTrangThai===1)
                                  <input type="text" class="form-control" id="nvmTrangThai1" name="nvmTrangThai" value="1"
                                  checked />
                                  <label for="nvmTrangThai">Hiển Thị</label>
                                    &nbsp;
                                  <input type="radio" id="nvmTrangThai0" name="nvmTrangThai" value="0" />   
                                  <label for="nvmTrangThai0">Khóa</label> 
                                    @else 
                                    <input type="radio" id="nvmTrangThai1" name="nvmTrangThai" value="1" /> 
                                    <label for="nvmTrangThai">Hiển Thị</label>
                                    &nbsp;
                                    <input type="radio" id="nvmTrangThai0" name="nvmTrangThai" value="0" checked/>   
                                    <label for="nvmTrangThai0">Khóa</label> 
                                    @endif
                                </div>
                            </div>
                        </div>
                    <div class="card-footer">
                        <button class="btn btn-success">Ghi Lại</button>
                        <a href="{{ route('nvmadmins.nvmkhachhang') }}" class="btn btn-secondary">Quay lại</a>

                    </div>
              </form>
            </div>
        </div>
    </div>
@endsection