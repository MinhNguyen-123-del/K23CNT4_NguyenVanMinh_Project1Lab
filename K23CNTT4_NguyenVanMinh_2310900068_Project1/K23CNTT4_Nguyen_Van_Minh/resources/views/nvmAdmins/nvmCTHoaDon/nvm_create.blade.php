@extends('layouts.admins._master')
@section('title','Thêm Mới CT Hóa Đơn')

@section('content-body')
    <div class="container boder">
        <div class="row ">
            <div class="col">
              <form action="{{route('nvmadmins.nvmcthoadon.nvmcreatesubmit')}}" method="post">
                    @csrf
                    <div class="card-header">
                        <h2>Thêm Mới CT Hóa Đơn</h2>
                    </div>
                    <div class="card-body container-fluid">
                        <div class="mb-3 row">
                            <label for="nvmHoaDonID" class="col-sm-2 col-form-label"> Hóa Đơn ID</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="nvmHoaDonID" name="nvmHoaDonID" value="1">
                            </div>  
                        </div>    
                        <div class="mb-3 row">
                            <label for="nvmSanPhamID" class="col-sm-2 col-form-label">Sảm Phẩm ID</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="nvmSanPhamID" name="nvmSanPhamID" value="1">
                            </div>  
                        </div> 
                        <div class="mb-3 row">
                            <label for="nvmSoLuongMua" class="col-sm-2 col-form-label">Số Lượng Mua</label>
                            <div class="col-sm-10">
                              <input type="number" class="form-control" id="nvmSoLuongMua" name="nvmSoLuongMua" value="1">
                              @error('nvmSoLuongMua')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>  
                        </div> 
                        <div class="mb-3 row">
                            <label for="nvmDonGiaMua" class="col-sm-2 col-form-label">Đơn Giá Mua</label>
                            <div class="col-sm-10">
                              <input type="number" class="form-control" id="nvmDonGiaMua" name="nvmDonGiaMua" value="1">
                              @error('nvmDonGiaMua')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>  
                        </div>
       
                            <div class="mb-3 row">
                                <label for="nvmThanhTien" class="col-sm-2 col-form-label">Thành Tiền</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" id="nvmThanhTien" name="nvmThanhTien" value="1">
                                @error('nvmThanhTien')
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
                        <a href="{{route('nvmadmins.nvmcthoadon')}}" class="btn btn-secondary">Quay lại</a>
                    </div>
              </form>
            </div>
        </div>
    </div>
@endsection