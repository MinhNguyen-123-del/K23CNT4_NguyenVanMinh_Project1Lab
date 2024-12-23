@extends('layouts.admins._master')
@section('title','Danh Sách Loại Sản Phẩm')

@section('content-body')
    <div class="container">
        <div class="row">
            <div class="col-12 ">   
            <div class="d-flex w-100 justify-content-between">
                <h1>Danh Sách Loại Sản Phẩm</h1>
                <a href="{{route('nvmadmins.nvmloaisanpham.nvmcreate')}}" class="btn btn-success">Thêm Mới</a>
            </div>
           </div>
        </div>
    </div>
    <div class="row">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Mã Loại</th>
                    <th>Tên Loại</th>
                    <th>Trạng Thái</th>
                    <th>Chức Năng</th>
                </tr>
            </thead>
            <tbody>
                @forelse ( $nvmloaisanphams as $item)
                    <tr>
                        <td class="text center">{{$loop->iteration}}</td>
                        <td>{{$item->nvmMaLoai}}</td>
                        <td>{{$item->nvmTenLoai}}</td>
                        <td>{{$item->nvmTrangThai}}</td>
                        <td>
                            view /
                            <a href="/nvm-admins/nvm-loai-san-pham/nvm-edit/{{$item->id}}">Edit</a>
                            <a href="/nvm-admins/nvm-loai-san-pham/nvm-delete/{{$item->id}}"
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