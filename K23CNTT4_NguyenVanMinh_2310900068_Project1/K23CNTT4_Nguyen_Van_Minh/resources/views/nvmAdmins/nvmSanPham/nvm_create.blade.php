@extends('layouts.admins._master')
@section('title','Danh sach loai san pham')

@section('content-body')
    <div class="container boder">
        <div class="row ">
            <div class="col">
              <form action="{{route('nvmadmins.nvmsanpham.nvmcreatesubmit')}}" method="post">
                    @csrf
                    <div class="card-header">
                        <h2>Thêm Mới Sản Phẩm</h2>
                    </div>
                    <div class="card-body container-fluid">
                        <div class="mb-3 row">
                            <label for="nvmMaSanPham" class="col-sm-2 col-form-label">Mã Sản Phẩm</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="nvmMaSanPham" name="nvmMaSanPham">
                            </div>  
                        </div>            
                            <div class="mb-3 row">
                                <label for="nvmTenSanPham" class="col-sm-2 col-form-label">Tên Sản Phẩm</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="nvmTenSanPham" name="nvmTenSanPham" value="1">
                                    @error('nvmTenSanPham')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="nvmHinhAnh" class="col-sm-2 col-form-label">Hình Ảnh</label>
                                <div class="col-sm-10">
                                  <input type="file" class="form-control" id="nvmHinhAnh" name="nvmHinhAnh">
                                  @error('nvmHinhAnh')
                                      <span class="text-danger">{{$message}}</span>
                                  @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="nvmSoLuong" class="col-sm-2 col-form-label">Số Lượng</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" id="nvmSoLuong" name="nvmSoLuong" value="1">
                                    @error('nvmSoLuong')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="nvmDonGia" class="col-sm-2 col-form-label">Đơn Giá</label>
                                <div class="col-sm-10">
                                    <input type="float" class="form-control" id="nvmDonGia" name="nvmDonGia" value="1">
                                    @error('nvmDonGia')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="nvmMaLoai" class="col-sm-2 col-form-label">Mã Loại</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="nvmMaLoai" name="nvmMaLoai" value="1">
                                    @error('nvmMaLoai')
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
                        <a href="{{route('nvmadmins.nvmsanpham')}}" class="btn btn-secondary">Quay lại</a>
                    </div>
              </form>
            </div>
        </div>
    </div>
@endsection