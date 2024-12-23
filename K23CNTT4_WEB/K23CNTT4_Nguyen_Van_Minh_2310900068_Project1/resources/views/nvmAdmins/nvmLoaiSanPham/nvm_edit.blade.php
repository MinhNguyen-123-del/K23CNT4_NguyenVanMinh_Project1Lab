@extends('layouts.admins._master')
@section('title','Sửa Thông Tin Loại Sản Phẩm')

    @section('content-body')
    <div class="container boder">
        <div class="row ">
            <div class="col">
              <form action="{{route('nvmadmins.nvmloaisanpham.nvmeditsubmit')}}" method="GET">
                    @csrf
                    <input type="hidden" name="id" id="id" value="{{$nvmLoaiSanPham->id}}">
                    <div class="card-header">
                        <h2>Sửa Thông Tin Loại Sản Phẩm</h2>
                    </div>
                    <div class="card-body container-fluid">
                        <div class="mb-3 row">
                            <label for="nvmMaLoai" class="col-sm-2 col-form-label">Mã Loại</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="nvmMaLoai" name="nvmMaLoai" value="{{$nvmLoaiSanPham->nvmMaLoai}}">
                            </div>  
                        </div>
                        <div class="card-body container-fluid">
                            <div class="mb-3 row">
                                <label for="nvmTenLoai" class="col-sm-2 col-form-label">Tên Loại</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="nvmTenLoai" name="nvmTenLoai" value="{{$nvmLoaiSanPham->nvmTenLoai}}">
                                </div>
                            </div>
                        </div>
                        <div class="card-body container-fluid">
                            <div class="mb-3 row">
                                <label for="nvmTrangThai" class="col-sm-2 col-form-label">Trạng Thái</label>
                                <div class="col-sm-10">
                                    @if($nvmLoaiSanPham->nvmTrangThai===1)
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
                        <a href="{{route('nvmadmins.nvmloaisanpham')}}" class="btn btn-secondary">Quay lại</a>
                    </div>
              </form>
            </div>
        </div>
    </div>
@endsection