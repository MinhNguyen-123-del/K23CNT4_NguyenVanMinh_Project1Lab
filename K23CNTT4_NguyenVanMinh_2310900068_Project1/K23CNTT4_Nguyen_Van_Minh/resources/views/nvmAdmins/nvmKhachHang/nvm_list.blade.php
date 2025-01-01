@extends('layouts.admins._master')
@section('title','Danh Sách Khách Hàng')

@section('content-body')
    <div class="container">
        <div class="row">
            <div class="col-12 ">   
            <div class="d-flex w-100 justify-content-between">
                <h1>Danh Sách Khách Hàng</h1>
                <a href="{{route('nvmadmins.nvmkhachhang.nvmcreate')}}" class="btn btn-success">Thêm Mới</a>
            </div>
           </div>
        </div>
    </div>
    <div class="row">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Mã Khách Hàng</th>
                    <th>Họ Và Tên Khách Hàng</th>
                    <th>Email</th>
                    <th>Mật Khẩu</th>
                    <th>Điện Thoại</th>
                    <th>Địa Chỉ</th>
                    <th>Ngày Đăng Kí</th>
                    <th>Trạng Thái</th>
                </tr>
            </thead>
            <tbody>
                @forelse ( $nvmkhachhangs as $item)
                    <tr>
                        <td class="text center">{{$loop->iteration}}</td>
                        <td>{{$item->nvmMaKhachHang}}</td>
                        <td>{{$item->nvmHoTenKhachhang}}</td>
                        <td>{{$item->nvmEmail}}</td>
                        <td>{{$item->nvmMatKhau}}</td>
                        <td>{{$item->nvmDienThoai}}</td>
                        <td>{{$item->nvmDiaChi}}</td>
                        <td>{{$item->nvmNgayDangKy}}</td>
                        <td>{{$item->nvmTrangThai}}</td>
                        <td>
                            <a href="/nvm-admins/nvm-khach-hang/nvm-edit/{{$item->id}}">Edit /</a>
                            <a href="/nvm-admins/nvm-khach-hang/nvm-delete/{{$item->id}}"
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