<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\nvm_hoa_don;
use Illuminate\Support\Facades\DB;

class Nvm_Hoa_Don_Controller extends Controller
{
    public function  nvmList()
    {
        $nvmhoadons=nvm_hoa_don::all();
        return view ('nvmAdmins.nvmHoaDon.nvm_list',['nvmhoadons'=>$nvmhoadons]);
    }
    public function nvmCreate()
    {
        return view('nvmAdmins.nvmHoaDon.nvm_create');
    }
    public function nvmCreateSubmit(Request $request)
    {
        //ghi du lieu xuong db
        $nvmHoaDon= new nvm_hoa_don;
        $nvmHoaDon->nvmMaHoaDon = $request->nvmMaHoaDon;
        $nvmHoaDon->nvmMaKhachHang=$request->nvmMaKhachHang;
        $nvmHoaDon->nvmNgayHoaDon=$request->nvmNgayHoaDon;
        $nvmHoaDon->nvmNgayNhan=$request->nvmNgayNhan;
        $nvmHoaDon->HoTenKhachHang=$request->HoTenKhachHang;
        $nvmHoaDon->nvmEmail=$request->nvmEmail;
        $nvmHoaDon->nvmDienThoai=$request->nvmDienThoai;
        $nvmHoaDon->nvmDiaChi=$request->nvmDiaChi;
        $nvmHoaDon->nvmTongTriGia=$request->nvmTongTriGia;
        $nvmHoaDon->nvmTrangThai=$request->nvmTrangThai;

        $nvmHoaDon->save();

        return redirect()->route('nvmadmins.nvmhoadon');
    }
    public function nvmEdit($id)
    {
        $nvmHoaDon=nvm_hoa_don::find($id);
        return view('nvmadmins.nvmHoaDon.nvm_edit',['nvmHoaDon'=>$nvmHoaDon]);
    }
    public function nvmEditSubmit(Request $request)
    {
        $nvmHoaDon= nvm_hoa_don::find($request-> id);
        if (!$nvmHoaDon) {
            return response()->json([
                'error' => 'Không tìm thấy hóa đơn với ID được cung cấp.'
            ], 404);
        }
        $nvmHoaDon->nvmMaHoaDon = $request->nvmMaHoaDon;
        $nvmHoaDon->nvmMaKhachHang=$request->nvmMaKhachHang;
        $nvmHoaDon->nvmNgayHoaDon=$request->nvmNgayHoaDon;
        $nvmHoaDon->nvmNgayNhan=$request->nvmNgayNhan;
        $nvmHoaDon->HoTenKhachHang=$request->HoTenKhachHang;
        $nvmHoaDon->nvmEmail=$request->nvmEmail;
        $nvmHoaDon->nvmDienThoai=$request->nvmDienThoai;
        $nvmHoaDon->nvmDiaChi=$request->nvmDiaChi;
        $nvmHoaDon->nvmTongTriGia=$request->nvmTongTriGia;
        $nvmHoaDon->nvmTrangThai=$request->nvmTrangThai;

        $nvmHoaDon->save();

        return redirect()->route('nvmadmins.nvmhoadon');
    }
    public function nvmDelete($id)
    {
        $nvmHoaDon=nvm_hoa_don::find($id);
        $nvmHoaDon->delete();
        return redirect()->route('nvmadmins.nvmhoadon');
    }
}
