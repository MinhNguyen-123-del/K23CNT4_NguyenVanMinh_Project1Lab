<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NvmSinhVienController extends Controller
{
    public function nvmList()
    {
    $nvmSinhViens=nvmsinhvien::all();
    return view('Nvmsinhvien.nvm-list',['nvmSinhViens'=>$nvmSinhViens]);
    }
}
