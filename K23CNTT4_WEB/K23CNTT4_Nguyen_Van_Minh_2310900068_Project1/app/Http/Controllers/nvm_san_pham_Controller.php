<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Nvm_san_pham;

class nvm_san_pham_Controller extends Controller
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
}
