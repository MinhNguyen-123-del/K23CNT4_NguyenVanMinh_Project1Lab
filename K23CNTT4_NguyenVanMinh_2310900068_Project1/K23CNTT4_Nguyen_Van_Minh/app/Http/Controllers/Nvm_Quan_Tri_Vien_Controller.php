<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\nvm_quan_tri;

class Nvm_Quan_Tri_Vien_Controller extends Controller
{
    public function nvmLogin(){
        return view ('NvmLogin.nvm_login');
    }
    public function nvmsubmit( Request $request)
    {
        $res=$request->all();
        return redirect('nvm-admins');
    }
    public function nvmList()
    {
        $nvmquantris=nvm_quan_tri::all();
        return view ('nvmAdmins.nvmQuanTri.nvm_list',['nvmquantris'=>$nvmquantris]);
    }
    public function nvmCreate()
    {
        return view('nvmAdmins.nvmQuanTri.nvm_create');
    }
    public function nvmCreateSubmit(Request $request)
    {
        //ghi du lieu xuong db
        $nvmQuanTri = new nvm_quan_tri;
        $nvmQuanTri->nvmTaiKhoan= $request->nvmTaiKhoan;
        $nvmQuanTri->nvmMatKhau = $request->nvmMatKhau;
        $nvmQuanTri->nvmTrangThai = $request->nvmTrangThai;

        $nvmQuanTri->save();

        return redirect()->route('nvmadmins.nvmquantri');
    }
    public function nvmEdit($id)
    {
        $nvmQuanTri=nvm_quan_tri::find($id);
        return view('nvmAdmins.nvmQuanTri.nvm_edit',['nvmQuanTri'=>$nvmQuanTri]);
    }
    public function nvmEditSubmit(Request $request)
    {
        //ghi du lieu xuong db
        $nvmQuanTri=nvm_quan_tri::find($request-> id);
        $nvmQuanTri->nvmTaiKhoan= $request->nvmTaiKhoan;
        $nvmQuanTri->nvmMatKhau = $request->nvmMatKhau;
        $nvmQuanTri->nvmTrangThai = $request->nvmTrangThai;

        $nvmQuanTri->save();

        return redirect()->route('nvmadmins.nvmquantri');
    }
    public function nvmDelete($id)
    {
        $nvmQuanTri=nvm_quan_tri::find($id);
        $nvmQuanTri->delete();
        return redirect()->route('nvmadmins.nvmquantri');
    }
}
