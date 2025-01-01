@extends('layouts.admins._master')
@section('title','Danh sach Khách Hàng')

@section('content-body')
    <div class="container boder">
        <div class="row ">
            <div class="col">
              <form action="{{route('nvmadmins.nvmkhachhang.nvmcreatesubmit')}}" method="post">
                    @csrf
                    <div class="card-header">
                        <h2>Thêm Mới Khách Hàngx</h2>
                    </div>
                    <div class="card-body container-fluid">
                        <div class="mb-3 row">
                            <label for="nvmMaKhachHang" class="col-sm-2 col-form-label">Mã Khách Hàng</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="nvmMaKhachHang" name="nvmMaKhachHang">
                            </div>  
                        </div>            
                            <div class="mb-3 row">
                                <label for="nvmHoTenKhachhang" class="col-sm-2 col-form-label">Họ Tên Khách Hàng</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="nvmHoTenKhachhang" name="nvmHoTenKhachhang" value="1">
                                    @error('nvmHoTenKhachhang')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="nvmEmail" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                  <input type="text " class="form-control" id="nvmEmail" name="nvmEmail">
                                  @error('nvmEmail')
                                      <span class="text-danger">{{$message}}</span>
                                  @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="nvmMatKhau" class="col-sm-2 col-form-label">Mật Khẩu</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="nvmMatKhau" name="nvmMatKhau" value="1">
                                    @error('nvmMatKhau')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="nvmDienThoai" class="col-sm-2 col-form-label">Điện Thoại</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="nvmDienThoai" name="nvmDienThoai" value="1">
                                    @error('nvmDienThoai')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="nvmDiaChi" class="col-sm-2 col-form-label">Địa Chỉ</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="nvmDiaChi" name="nvmDiaChi" value="1">
                                    @error('nvmDiaChi')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="nvmNgayDangKy" class="col-sm-2 col-form-label">Ngày Đăng Kí</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" id="nvmNgayDangKy" name="nvmNgayDangKy" value="{{ old('nvmNgayDangKy') ?? date('Y-m-d') }}">
                                    @error('nvmNgayDangKy')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                                </div>
                            </div>
                            
                            
                        <div class="card-body container-fluid">
                            <div class="mb-3 row">
                                <label for="nvmTrangThai" class="col-sm-2 col-form-label">Trạng Thái</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="nvmTrangThai1" name="nvmTrangThai" value="1"
                                  checked />
                                  <label for="	nvmTrangThai">Hiển Thị</label>
                                    &nbsp;
                                  <input type="radio" id="nvmTrangThai0" name="nvmTrangThai" value="0" />   
                                  <label for="nvmTrangThai0">Khóa</label> 
                                </div>
                            </div>
                        </div>
                    <div class="card-footer">
                        <button class="btn btn-success">Ghi Lại</button>
                        <a href="{{route('nvmadmins.nvmkhachhang')}}" class="btn btn-secondary">Quay lại</a>
                    </div>
              </form>
            </div>
        </div>
    </div>
@endsection