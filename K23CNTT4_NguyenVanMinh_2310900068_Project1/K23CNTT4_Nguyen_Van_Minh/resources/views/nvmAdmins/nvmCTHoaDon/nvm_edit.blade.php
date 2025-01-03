@extends('layouts.admins._master')
@section('title','Sửa Thông Tin CT Hóa Đơn')

    @section('content-body')
    <div class="container boder">
        <div class="row ">
            <div class="col">
              <form action="{{route('nvmadmins.nvmcthoadon.nvmeditsubmit')}}" method="POST">
                    @csrf
                    <input type="hidden" name="id" id="id" value="{{$nvmCTHoaDon->id}}">
                    <div class="card-header">
                        <h2>Sửa Thông CT Tin Hóa Đơn</h2>
                    </div>
                    <div class="card-body container-fluid">
                        <div class="mb-3 row">
                            <label for="nvmHoaDonID" class="col-sm-2 col-form-label">Hóa Đơn ID</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="nvmHoaDonID" name="nvmHoaDonID" value="{{$nvmCTHoaDon->nvmHoaDonID}}">
                            </div>  
                        </div>
                        <div class="card-body container-fluid">
                            <div class="mb-3 row">
                                <label for="nvmSanPhamID" class="col-sm-2 col-form-label">Sản Phẩm ID</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="nvmSanPhamID" name="nvmSanPhamID" value="{{$nvmCTHoaDon->nvmSanPhamID	}}" >
                                </div>
                            </div>
                        </div>
                        <div class="card-body container-fluid">
                            <div class="mb-3 row">
                                <label for="nvmSoLuongMua" class="col-sm-2 col-form-label">Số Lượng Mua</label>
                                <div class="col-sm-10">
                                  <input type="number" class="form-control" id="nvmSoLuongMua" name="nvmSoLuongMua" value="{{ old('nvmSoLuongMua', $nvmCTHoaDon->nvmSoLuongMua ?? 0) }}" >
                                </div>
                            </div>
                        </div>
                        <div class="card-body container-fluid">
                            <div class="mb-3 row">
                                <label for="nvmDonGiaMua" class="col-sm-2 col-form-label">Đơn Giá Mua</label>
                                <div class="col-sm-10">
                                  <input type="number" class="form-control" id="nvmDonGiaMua" name="nvmDonGiaMua" value="{{ old('nvmDonGiaMua', $nvmCTHoaDon->nvmDonGiaMua ?? 0) }}" >
                                </div>
                            </div>
                        </div>
                        <div class="card-body container-fluid">
                            <div class="mb-3 row">
                                <label for="nvmThanhTien" class="col-sm-2 col-form-label">Thành Tiền</label>
                                <div class="col-sm-10">
                                  <input type="number" class="form-control" id="nvmThanhTien" name="nvmThanhTien" value="{{ old('nvmThanhTien', $nvmCTHoaDon->nvmThanhTien ?? 0) }}"  >
                                </div>
                            </div>
                        </div>
                        <div class="card-body container-fluid">
                            <div class="mb-3 row">
                                <label for="nvmTrangThai" class="col-sm-2 col-form-label">Trạng Thái</label>
                                <div class="col-sm-10">
                                    @if($nvmCTHoaDon->nvmTrangThai===1)
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
                        <a href="{{ route('nvmadmins.nvmhoadon') }}" class="btn btn-secondary">Quay lại</a>

                    </div>
              </form>
            </div>
        </div>
    </div>
@endsection