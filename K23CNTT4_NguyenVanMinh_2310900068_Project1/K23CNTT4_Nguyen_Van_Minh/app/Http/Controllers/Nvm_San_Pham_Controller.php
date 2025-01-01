<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\nvm_san_pham;

class Nvm_San_Pham_Controller extends Controller
{
    public function nvmList()
    {
        $nvmsanphams=nvm_san_pham::all();
        return view('nvmAdmins.nvmSanPham.nvm_list',['nvmsanphams'=>$nvmsanphams]);
    }
    public function nvmCreate()
    {
        return view('nvmAdmins.nvmSanPham.nvm_create');
    }
    public function nvmCreateSubmit(Request $request)
    {
        //ghi du lieu xuong db
        $nvmSanPham = new nvm_san_pham;
        $nvmSanPham->nvmMaLoai = $request->nvmMaLoai;
        $nvmSanPham->nvmTenLoai = $request->nvmTenLoai;
        $nvmSanPham->nvmTrangThai = $request->nvmTrangThai;
        $nvmSanPham->save();
        return redirect()->route('nvmadmins.nvmsanpham');
    }
    public function nvmEdit($id)
    {
        $nvmSanPham=nvm_san_pham::find($id);
        return view('nvmadmins.nvmsanpham.nvm_edit',['nvmSanPham'=>$nvmSanPham]);
    }
    public function nvmEditSubmit(Request $request)
    {
        //ghi du lieu xuong db
        $nvmSanPham=nvm_san_pham::find($request-> id);
        $nvmSanPham->nvmMaSanPham=$request->nvmMaSanPham;
        $nvmSanPham->nvmTenSanPham= $request->nvmTenSanPham;
        $nvmSanPham->nvmHinhAnh= $request->nvmHinhAnh;
        $nvmSanPham->nvmSoLuong= $request->nvmSoLuong;
        $nvmSanPham->nvmDonGia= $request->nvmDonGia;
        $nvmSanPham->nvmMaLoai= $request->nvmMaLoai;
        $nvmSanPham->nvmTrangThai = $request->nvmTrangThai;
        $nvmSanPham->save();
        return redirect()->route('nvmadmins.nvmsanpham');
    }
    public function nvmDelete($id)
    {
        $nvmSanPham=nvm_san_pham::find($id);
        $nvmSanPham->delete();
        return redirect()->route('nvmadmins.nvmsanpham');
    }

}