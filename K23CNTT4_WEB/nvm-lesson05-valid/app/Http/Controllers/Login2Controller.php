<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Login2Controller extends Controller
{
    public function Index() 
    {
        return view('nvm-login2');
    }
    public function nvmsubmit( Request $request)
    {
        $res=$request->all();
        return $res;
    }
}
