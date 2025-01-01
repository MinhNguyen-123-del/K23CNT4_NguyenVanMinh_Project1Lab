@extends('layouts.admins._master')
@section('title','Danh Sách Sản Phẩm')

@section('content-body')
    <div class="container">
        <div class="row">
            <div class="col-12 ">   
            <div class="d-flex w-100 justify-content-between">
                <h1>Danh Sách Sản Phẩm</h1>
                <a href="{{route('nvmadmins.nvmsanpham.nvmcreate')}}" class="btn btn-success">Thêm Mới</a>
            </div>
           </div>
        </div>
    </div>
    <div class="row">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Mã Sản Phẩm</th>
                    <th>Tên Sản Phẩm</th>
                    <th>Hình Ảnh</th>
                    <th>Số Lượng</th>
                    <th>Đơn Giá</th>
                    <th>Mã Loại</th>
                    <th>Trạng Thái</th>
                </tr>
            </thead>
            <tbody>
                @forelse ( $nvmsanphams as $item)
                    <tr>
                        <td class="text center">{{$loop->iteration}}</td>
                        <td>{{$item->nvmMaSanPham}}</td>
                        <td>{{$item->nvmTenSanPham}}</td>
                        <td>{{$item->nvmHinhAnh}}</td>
                        <td>{{$item->nvmSoLuong}}</td>
                        <td>{{$item->nvmDonGia}}</td>
                        <td>{{$item->nvmMaLoai}}</td>
                        <td>{{$item->nvmTrangThai}}</td>
                        <td>
                            <a href="/nvm-admins/nvm-san-pham/nvm-edit/{{$item->id}}">Edit /</a>
                            <a href="/nvm-admins/nvm-san-pham/nvm-delete/{{$item->id}}"
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