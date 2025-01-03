@extends('layouts.admins._master')
@section('title','Sửa Thông Tin Quản Trị')

    @section('content-body')
    <div class="container boder">
        <div class="row ">
            <div class="col">
              <form action="{{route('nvmadmins.nvmquantri.nvmeditsubmit')}}" method="GET">
                    @csrf
                    <input type="hidden" name="id" id="id" value="{{$nvmQuanTri->id}}">
                    <div class="card-header">
                        <h2>Sửa Thông Tin Quản Trị</h2>
                    </div>
                    <div class="card-body container-fluid">
                        <div class="mb-3 row">
                            <label for="nvmTaiKhoan" class="col-sm-2 col-form-label">Tài Khoản</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="nvmTaiKhoan" name="nvmTaiKhoan" value="{{ old('nvmTaiKhoan', $nvmQuanTri->nvmTaiKhoan ?? 0) }}">
                            </div>  
                        </div>
                        <div class="card-body container-fluid">
                            <div class="mb-3 row">
                                <label for="nvmMatKhau" class="col-sm-2 col-form-label">Mật Khẩu</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="nvmMatKhau" name="nvmMatKhau" value="{{ old('nvmMatKhau', $nvmQuanTri->nvmMatKhau ?? 0) }}">
                                </div>
                            </div>
                        </div>
                        <div class="card-body container-fluid">
                            <div class="mb-3 row">
                                <label for="nvmTrangThai" class="col-sm-2 col-form-label">Trạng Thái</label>
                                <div class="col-sm-10">
                                    @if($nvmQuanTri->nvmTrangThai===1)
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
                        <a href="{{route('nvmadmins.nvmquantri')}}" class="btn btn-secondary">Quay lại</a>
                    </div>
              </form>
            </div>
        </div>
    </div>
@endsection