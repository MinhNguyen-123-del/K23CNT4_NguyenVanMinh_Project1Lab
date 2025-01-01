<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

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
}
