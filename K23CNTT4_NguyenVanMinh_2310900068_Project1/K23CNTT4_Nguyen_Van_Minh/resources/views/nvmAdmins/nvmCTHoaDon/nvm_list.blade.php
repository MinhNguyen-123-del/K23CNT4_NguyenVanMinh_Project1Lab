@extends('layouts.admins._master')
@section('title','Danh Sách CT Hóa Đơn')

@section('content-body')
    <div class="container">
        <div class="row">
            <div class="col-12 ">   
            <div class="d-flex w-100 justify-content-between">
                <h1>Danh Sách Hóa Đơn</h1>
                <a href="{{route('nvmadmins.nvmcthoadon.nvmcreate')}}" class="btn btn-success btn-sm custom-btn">Thêm Mới</a>
            </div>
           </div>
        </div>
    </div>
    <div class="row">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Hóa Đơn ID</th>
                    <th>Sản Phẩm ID</th>
                    <th>Số Lượng Mua</th>
                    <th>Đơn Giá Mua</th>
                    <th>Thành Tiền</th>
                    <th>Email</th>
                    <th>Trạng Thái</th>
                </tr>
            </thead>
            <tbody>
                @forelse ( $nvmcthoadons as $item)
                    <tr>
                        <td class="text center">{{$loop->iteration}}</td>
                        <td>{{$item->nvmHoaDonID}}</td>
                        <td>{{$item->nvmSanPhamID}}</td>
                        <td>{{$item->nvmSoLuongMua}}</td>
                        <td>{{$item->nvmDonGiaMua}}</td>
                        <td>{{$item->nvmThanhTien}}</td>
                        <td>{{$item->nvmTrangThai}}</td>
                        <td>
                            <a href="/nvm-admins/nvm-ct-hoa-don/nvm-edit/{{$item->id}}">Edit /</a>
                            <a href="/nvm-admins/nvm-ct-hoa-don/nvm-delete/{{$item->id}}"
                                onclick="return confirm('Bạn có chắc chắn xóa ko?')">Delete</a>
                        </td>
                    </tr>
                    
                @empty
                <tr>
                    <th colspan="5">Chưa Có Thông Tin Loại Sản Phẩm</th>
                </tr>
               @endforelse
            </tbody>
       </table>
    </div>
    @endsection