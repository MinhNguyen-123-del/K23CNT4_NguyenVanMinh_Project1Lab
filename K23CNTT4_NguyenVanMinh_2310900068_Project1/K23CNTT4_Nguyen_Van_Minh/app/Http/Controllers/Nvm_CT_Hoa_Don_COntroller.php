<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\nvm_ct_hoa_don;
class Nvm_CT_Hoa_Don_COntroller extends Controller
{
    public function  nvmList()
    {
        $nvmcthoadons=nvm_ct_hoa_don::all();
        return view ('nvmAdmins.nvmCTHoaDon.nvm_list',['nvmcthoadons'=>$nvmcthoadons]);
    }
    public function nvmCreate()
    {
        return view('nvmAdmins.nvmCTHoaDon.nvm_create');
    }
    public function nvmCreateSubmit(Request $request)
    {
        //ghi du lieu xuong db
        $nvmCTHoaDon= new nvm_ct_hoa_don;
        $nvmCTHoaDon->nvmHoaDonID = $request->nvmHoaDonID;
        $nvmCTHoaDon->nvmSanPhamID=$request->nvmSanPhamID;
        $nvmCTHoaDon->nvmSoLuongMua	=$request->nvmSoLuongMua;
        $nvmCTHoaDon->nvmDonGiaMua=$request->nvmDonGiaMua;
        $nvmCTHoaDon->nvmThanhTien=$request->nvmThanhTien;
        $nvmCTHoaDon->nvmTrangThai=$request->nvmTrangThai;

        $nvmCTHoaDon->save();

        return redirect()->route('nvmadmins.nvmcthoadon');
    }
    public function nvmEdit($id)
    {
        $nvmCTHoaDon=nvm_ct_hoa_don::find($id);
        return view('nvmadmins.nvmCTHoaDon.nvm_edit',['nvmCTHoaDon'=>$nvmCTHoaDon]);
    }
    public function nvmEditSubmit(Request $request)
    {
        $nvmCTHoaDon= nvm_ct_hoa_don::find($request-> id);
        $nvmCTHoaDon->nvmHoaDonID = $request->nvmHoaDonID;
        $nvmCTHoaDon->nvmSanPhamID=$request->nvmSanPhamID;
        $nvmCTHoaDon->nvmSoLuongMua	=$request->nvmSoLuongMua	;
        $nvmCTHoaDon->nvmDonGiaMua=$request->nvmDonGiaMua;
        $nvmCTHoaDon->nvmThanhTien=$request->nvmThanhTien;
        $nvmCTHoaDon->nvmTrangThai=$request->nvmTrangThai;

        $nvmCTHoaDon->save();

        return redirect()->route('nvmadmins.nvmcthoadon');
    }
    public function nvmDelete($id)
    {
        $nvmCTHoaDon=nvm_ct_hoa_don::find($id);
        $nvmCTHoaDon->delete();
        return redirect()->route('nvmadmins.nvmcthoadon');
    }
}


