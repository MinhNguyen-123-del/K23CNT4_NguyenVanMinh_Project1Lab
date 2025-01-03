@extends('layouts.admins._master')
@section('title','Danh Sách Hóa Đơn')

@section('content-body')
    <div class="container">
        <div class="row">
            <div class="col-12 ">   
            <div class="d-flex w-100 justify-content-between">
                <h1>Danh Sách Hóa Đơn</h1>
                <a href="{{route('nvmadmins.nvmhoadon.nvmcreate')}}" class="btn btn-success btn-sm custom-btn">Thêm Mới</a>
            </div>
           </div>
        </div>
    </div>
    <div class="row">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Mã Hóa Đơn</th>
                    <th>Mã Khách Hàng</th>
                    <th>Ngày Hóa Đơn</th>
                    <th>Ngày Nhận</th>
                    <th>Họ Và Tên Khách Hàng</th>
                    <th>Email</th>
                    <th>Điện Thoại</th>
                    <th>Địa Chỉ</th>
                    <th>Tổng Trị Giá</th>
                    <th>Trạng Thái</th>
                </tr>
            </thead>
            <tbody>
                @forelse ( $nvmhoadons as $item)
                    <tr>
                        <td class="text center">{{$loop->iteration}}</td>
                        <td>{{$item->nvmMaHoaDon}}</td>
                        <td>{{$item->nvmMaKhachHang}}</td>
                        <td>{{$item->nvmNgayHoaDon}}</td>
                        <td>{{$item->nvmNgayNhan}}</td>
                        <td>{{$item->HoTenKhachHang}}</td>
                        <td>{{$item->nvmEmail}}</td>
                        <td>{{$item->nvmDienThoai}}</td>
                        <td>{{$item->nvmDiaChi}}</td>
                        <td>{{$item->nvmTongTriGia}}</td>
                        <td>{{$item->nvmTrangThai}}</td>
                        <td>
                            <a href="/nvm-admins/nvm-hoa-don/nvm-edit/{{$item->id}}">Edit /</a>
                            <a href="/nvm-admins/nvm-hoa-don/nvm-delete/{{$item->id}}"
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