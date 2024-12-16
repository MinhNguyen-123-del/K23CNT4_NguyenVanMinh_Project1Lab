<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\NvmSinhVien;

class NvmSinhVienController extends Controller
{
    public function nvmList()
    {
    $nvmSinhViens=NvmSinhVien::all();
    return view('NvmSinhVien.nvmlist',['nvmSinhViens'=>$nvmSinhViens]);
    }
    public function nvmCreate()
    {
        return view('NvmSinhVien.nvmcreate');
    }
}
