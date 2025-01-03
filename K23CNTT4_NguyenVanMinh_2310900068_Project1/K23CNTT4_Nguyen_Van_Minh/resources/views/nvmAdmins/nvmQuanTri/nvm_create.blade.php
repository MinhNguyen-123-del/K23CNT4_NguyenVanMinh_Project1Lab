@extends('layouts.admins._master')
@section('title','Thêm Mới Quản Trị')

@section('content-body')
    <div class="container boder">
        <div class="row ">
            <div class="col">
              <form action="{{route('nvmadmins.nvmquantri.nvmcreatesubmit')}}" method="POST">
                    @csrf
                    <div class="card-header">
                        <h2>Thêm Mới Quản Trị</h2>
                    </div>
                    <div class="card-body container-fluid">
                        <div class="mb-3 row">
                            <label for="nvmTaiKhoan" class="col-sm-2 col-form-label">Tài Khoản</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="nvmTaiKhoan" name="nvmTaiKhoan">
                            </div>  
                        </div>
                        <div class="card-body container-fluid">
                            <div class="mb-3 row">
                                <label for="nvmMatKhau" class="col-sm-2 col-form-label">Mật Khẩu</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="nvmMatKhau" name="nvmMatKhau" value="1">
                                </div>
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
                        <a href="{{route('nvmadmins.nvmquantri')}}" class="btn btn-secondary">Quay lại</a>
                    </div>
              </form>
            </div>
        </div>
    </div>
@endsection