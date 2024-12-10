<?php

namespace App\Http\Controllers;

use App\Http\Controllers\NvmKhoaController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NvmKhoaController extends Controller
{
    #ĐỌc dữ liệu từ bảng khoa
    public function nvmGetAllKhoa()
    {
        //Truy Van đọc dữ liệu từ bảng khoa
        $nvmKhoas=DB::select("Select *from thong_tin");
        //CHuyển dữ liệu lên view
        return view('nvmKhoa.nvmList',['nvmKhoas'=> $nvmKhoas]);
    }
    //Chi tieets khoa
    public function nvmGetKhoa($makh)
    {
        $khoa=DB::select("select*from thong_tin where nvmMaKhoa=?",[$makh])[0];
        return view('nvmKhoa.nvmDetaill',['nvmKhoa'=>$khoa]);
    }
    public function nvmEdit($makh)
    {
        $khoa=DB::select("select*from thong_tin where nvmMaKhoa=?",[$makh])[0];
        return view('nvmKhoa.nvmEdit',['nvmKhoa'=>$khoa]);
    }
    public function nvmEditSubmit( Request $request)
    {
        $makh =$request->input('NVMMaKhoa');
        $tenkh =$request->input('NVMTenKhoa');
        DB::update("UPDATE thong_tin SET NVMTenKhoa = ? WHERE NVMMaKhoa=? ",[$tenkh,$makh]);
        return redirect('/khoas');
    }
}