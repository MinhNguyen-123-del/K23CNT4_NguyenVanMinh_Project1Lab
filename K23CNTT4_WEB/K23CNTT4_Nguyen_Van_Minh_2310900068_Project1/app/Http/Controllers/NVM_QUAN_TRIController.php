<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NVM_QUAN_TRIController extends Controller
{
    public function nvmLogin(){
        return view('NvmLogin.nvm_login');
    }
    public function nvmLoginSubmit(Request $request){
        return view('NvmLogin.nvm_loginsubmit');
    }
    public function nvmGetAllQuanTri()
    {
        //Truy Van đọc dữ liệu từ bảng khoa
        $nvmQuanTris=DB::select("Select *from nvm_quan_tri");
        //CHuyển dữ liệu lên view
        return view('nvmQuanTri.nvmQTList',['nvmQuanTris'=> $nvmQuanTris]);
    }
    public function nvmEditQuanTri($id){
        $nvmQuanTris=DB::select("select*from nvm_quan_tri where id=?",[$id])[0];
        if (empty($nvmQuanTris)) {
            return redirect()->back()->with('error', 'Không tìm thấy thông tin quản trị!');
        }
        return view('nvmQuanTri.nvmQTEdit',['nvmQuanTri'=>$nvmQuanTris]);
    }
    public function nvmEditQuanTriSubmit( Request $request)
    {
        $id =$request->input('id');
        $taikhoan =$request->input('nvmTaiKhoan');
        $matkhau =$request->input('nvmMatKhau');
        $trangthai =$request->input('nvmTrangThai');
        DB::update("UPDATE thong_tin SET nvmTaiKhoan = ?, nvmMatKhau = ?, nvmTrangThai = ? WHERE id = ?", 
               [$taikhoan, $matkhau, $trangthai, $id]);
        return redirect('/quantris');
    }
    
}
