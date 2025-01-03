@extends('layouts.admins._master')
@section('title','Thêm Mới Hóa Đơn')

@section('content-body')
    <div class="container boder">
        <div class="row ">
            <div class="col">
              <form action="{{route('nvmadmins.nvmhoadon.nvmcreatesubmit')}}" method="post">
                    @csrf
                    <div class="card-header">
                        <h2>Thêm Mới Hóa Đơn</h2>
                    </div>
                    <div class="card-body container-fluid">
                        <div class="mb-3 row">
                            <label for="nvmMaHoaDon" class="col-sm-2 col-form-label">Mã Hóa Đơn</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="nvmMaHoaDon" name="nvmMaHoaDon" value="1">
                            </div>  
                        </div>    
                        <div class="mb-3 row">
                            <label for="nvmMaKhachHang" class="col-sm-2 col-form-label">Mã Khách Hàng</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="nvmMaKhachHang" name="nvmMaKhachHang" value="1">
                            </div>  
                        </div> 
                        <div class="mb-3 row">
                            <label for="nvmNgayHoaDon" class="col-sm-2 col-form-label">Ngày Hóa Đơn</label>
                            <div class="col-sm-10">
                              <input type="date" class="form-control" id="nvmNgayHoaDon" name="nvmNgayHoaDon" value="{{ old('nvmNgayHoaDon') ?? date('Y-m-d') }}">
                            </div>  
                        </div> 
                        <div class="mb-3 row">
                            <label for="nvmNgayNhan" class="col-sm-2 col-form-label">Ngày Nhận</label>
                            <div class="col-sm-10">
                              <input type="date" class="form-control" id="nvmNgayNhan" name="nvmNgayNhan" value="{{ old('nvmNgayNhan') ?? date('Y-m-d') }}">
                            </div>  
                        </div>         
                            <div class="mb-3 row">
                                <label for="HoTenKhachHang" class="col-sm-2 col-form-label">Họ Tên Khách Hàng</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="HoTenKhachHang" name="HoTenKhachHang" value="1">
                                    @error('HoTenKhachHang')
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
                                <label for="nvmTongTriGia" class="col-sm-2 col-form-label">Tổng Trị Giá</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" id="nvmTongTriGia" name="nvmTongTriGia"  value="{{ old('nvmTongTriGia', $nvmTongTriGia ?? 0) }}">
                                @error('nvmTongTriGia')
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
                        <a href="{{route('nvmadmins.nvmhoadon')}}" class="btn btn-secondary">Quay lại</a>
                    </div>
              </form>
            </div>
        </div>
    </div>
@endsection