<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\nvm_loai_san_pham;

class nvm_Loai_San_Pham_Controller extends Controller
{
    //admin:CRUD
    //NVMLIST
    public function nvmList()
    {
        $nvmloaisanphams=nvm_loai_san_pham::all();
        return view ('nvmAdmins.nvmLoaiSanPham.nvm_list',['nvmloaisanphams'=>$nvmloaisanphams]);
    }
    public function nvmCreate()
    {
        return view('nvmAdmins.nvmLoaiSanPham.nvm_create');
    }
    public function nvmCreateSubmit(Request $request)
    {
        //ghi du lieu xuong db
        $nvmLoaiSanPham = new nvm_loai_san_pham;
        $nvmLoaiSanPham->nvmMaLoai = $request->nvmMaLoai;
        $nvmLoaiSanPham->nvmTenLoai = $request->nvmTenLoai;
        $nvmLoaiSanPham->nvmTrangThai = $request->nvmTrangThai;

        $nvmLoaiSanPham->save();

        return redirect()->route('nvmadmins.nvmloaisanpham');
    }
    public function nvmEdit($id)
    {
        $nvmLoaiSanPham=nvm_loai_san_pham::find($id);
        return view('nvmadmins.nvmloaisanpham.nvm_edit',['nvmLoaiSanPham'=>$nvmLoaiSanPham]);
    }
    public function nvmEditSubmit(Request $request)
    {
        //ghi du lieu xuong db
        $nvmLoaiSanPham=nvm_loai_san_pham::find($request-> id);
        $nvmLoaiSanPham->nvmMaLoai = $request->nvmMaLoai;
        $nvmLoaiSanPham->nvmTenLoai = $request->nvmTenLoai;
        $nvmLoaiSanPham->nvmTrangThai = $request->nvmTrangThai;

        $nvmLoaiSanPham->save();

        return redirect()->route('nvmadmins.nvmloaisanpham');
    }
    
}
