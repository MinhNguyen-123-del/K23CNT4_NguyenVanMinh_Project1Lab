@extends('layouts.admins._master')
@section('title','Danh Sách Quản Trị')

@section('content-body')
    <div class="container">
        <div class="row">
            <div class="col-12 ">   
            <div class="d-flex w-100 justify-content-between">
                <h1>Danh Sách Quản Trị</h1>
                <a href="{{ route('nvmadmins.nvmquantri.nvmcreatesubmit') }}" class="btn btn-success btn-sm custom-btn">Thêm Mới</a>

            </div>
           </div>
        </div>
    </div>
    <div class="row">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Tài Khoản</th>
                    <th>Mật Khẩu</th>
                    <th>Trạng Thái</th>
                </tr>
            </thead>
            <tbody>
                @forelse ( $nvmquantris as $item)
                    <tr>
                        <td class="text center">{{$loop->iteration}}</td>
                        <td>{{$item->nvmTaiKhoan}}</td>
                        <td>{{$item->nvmMatKhau}}</td>
                        <td>{{$item->nvmTrangThai}}</td>
                        <td>
                            <a href="/nvm-admins/nvm-quan-tri/nvm-edit/{{$item->id}}">Edit /</a>
                            <a href="/nvm-admins/nvm-quan-tri/nvm-delete/{{$item->id}}"
                                onclick="return confirm('Bạn có chắc chắn xóa ko?')">Delete</a>
                        </td>
                    </tr>
                    
                @empty
                <tr>
                    <th colspan="5">Chưa Có Thông Tin Quản Trị</th>
                </tr>
               @endforelse
            </tbody>
       </table>
    </div>
    @endsection