<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\nvm_khach_hang;
use Illuminate\Support\Facades\DB;

class Nvm_Khach_Hang_Controller extends Controller
{
    public function  nvmList()
    {
        $nvmkhachhangs=nvm_khach_hang::all();
        return view ('nvmAdmins.nvmKhachHang.nvm_list',['nvmkhachhangs'=>$nvmkhachhangs]);
    }
    public function nvmCreate()
    {
        return view('nvmAdmins.nvmKhachHang.nvm_create');
    }
    public function nvmCreateSubmit(Request $request)
    {
        //ghi du lieu xuong db
        $nvmKhachHang= new nvm_khach_hang;
        $nvmKhachHang->nvmMaKhachHang = $request->nvmMaKhachHang;
        $nvmKhachHang->nvmHoTenKhachhang=$request->nvmHoTenKhachhang;
        $nvmKhachHang->nvmEmail=$request->nvmEmail;
        $nvmKhachHang->nvmMatKhau=$request->nvmMatKhau;
        $nvmKhachHang->nvmDienThoai=$request->nvmDienThoai;
        $nvmKhachHang->nvmDiaChi=$request->nvmDiaChi;
        $nvmKhachHang->nvmNgayDangKy=$request->nvmNgayDangKy;
        $nvmKhachHang->nvmTrangThai=$request->nvmTrangThai;

        $nvmKhachHang->save();

        return redirect()->route('nvmadmins.nvmkhachhang');
    }
    public function nvmEdit($id)
    {
        $nvmKhachHang=nvm_khach_hang::find($id);
        return view('nvmadmins.nvmKhachHang.nvm_edit',['nvmKhachHang'=>$nvmKhachHang]);
    }
    public function nvmEditSubmit(Request $request)
    {
        $nvmKhachHang= nvm_khach_hang::find($request-> id);
        $nvmKhachHang->nvmMaKhachHang = $request->nvmMaKhachHang;
        $nvmKhachHang->nvmHoTenKhachhang=$request->nvmHoTenKhachhang;
        $nvmKhachHang->nvmEmail=$request->nvmEmail;
        $nvmKhachHang->nvmMatKhau=$request->nvmMatKhau;
        $nvmKhachHang->nvmDienThoai=$request->nvmDienThoai;
        $nvmKhachHang->nvmDiaChi=$request->nvmDiaChi;
        $nvmKhachHang->nvmNgayDangKy=$request->nvmNgayDangKy;
        $nvmKhachHang->nvmTrangThai=$request->nvmTrangThai;

        $nvmKhachHang->save();

        return redirect()->route('nvmadmins.nvmkhachhang');
    }
    public function nvmDelete($id)
    {
        $nvmKhachHang=nvm_khach_hang::find($id);
        $nvmKhachHang->delete();
        return redirect()->route('nvmadmins.nvmkhachhang');
    }


}
