@extends('layouts.admins._master')
@section('title','Sửa Thông Tin Sản Phẩm')

    @section('content-body')
    <div class="container boder">
        <div class="row ">
            <div class="col">
              <form action="{{route('nvmadmins.nvmsanpham.nvmeditsubmit')}}" method="GET">
                    @csrf
                    <input type="hidden" name="id" id="id" value="{{$nvmSanPham->id}}">
                    <div class="card-header">
                        <h2>Sửa Thông Tin Sản Phẩm</h2>
                    </div>
                    <div class="card-body container-fluid">
                        <div class="mb-3 row">
                            <label for="nvmMaSanPham" class="col-sm-2 col-form-label">Mã Sản Phẩm</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="nvmMaSanPham" name="nvmMaSanPham" value="{{$nvmSanPham->nvmMaSanPham}}">
                            </div>  
                        </div>
                        <div class="mb-3 row">
                            <label for="nvmTenSanPham" class="col-sm-2 col-form-label">Tên Sản Phẩm</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="nvmTenSanPham" name="nvmTenSanPham" value="{{$nvmSanPham->nvmTenSanPham}}">
                            </div>  
                        </div>
                        <div class="card-body container-fluid">
                            <div class="mb-3 row">
                                <label for="nvmSoLuong" class="col-sm-2 col-form-label">Số Lượng</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" id="nvmSoLuong" name="nvmSoLuong" value="{{$nvmSanPham->nvmSoLuong}}">
                                    @error('nvmSoLuong')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                                </div>
                                
                                <div class="mb-3 row">
                                    <label for="nvmDonGia" class="col-sm-2 col-form-label">Đơn Giá</label>
                                    <div class="col-sm-10">
                                        <input type="float" class="form-control" id="nvmDonGia" name="nvmDonGia" value="{{$nvmSanPham->nvmDonGia}}">
                                        @error('nvmDonGia')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="nvmMaLoai" class="col-sm-2 col-form-label">Mã Loại</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="nvmMaLoai" name="nvmMaLoai" value="{{$nvmSanPham->nvmMaLoai}}">
                                        @error('nvmMaLoai')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body container-fluid">
                            <div class="mb-3 row">
                                <label for="nvmHinhAnh" class="col-sm-2 col-form-label">Hình Ảnh</label>
                                <div class="col-sm-10">
                                  <input type="file" class="form-control" id="nvmHinhAnh" name="nvmHinhAnh">
                                  @error('nvmHinhAnh')
                                      <span class="text-danger">{{$message}}</span>
                                  @enderror
                                </div>
                            </div>
                        </div>
                        <div class="card-body container-fluid">
                            <div class="mb-3 row">
                                <label for="nvmTrangThai" class="col-sm-2 col-form-label">Trạng Thái</label>
                                <div class="col-sm-10">
                                    @if($nvmSanPham->nvmTrangThai===1)
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
                        <a href="{{route('nvmadmins.nvmsanpham')}}" class="btn btn-secondary">Quay lại</a>
                    </div>
              </form>
            </div>
        </div>
    </div>
@endsection