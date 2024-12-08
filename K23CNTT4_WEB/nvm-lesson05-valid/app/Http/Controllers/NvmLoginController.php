<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class NvmLoginController extends Controller
{
    public function index()
    {
       return view('nvmlogin'); 
    }
    public function nvmSubmit(Request $request)
    {
        $validationData=$request->validate([
            'email'=>'required|email',
            'pass'=>'required|min:6|max:12'
        ]);
        $email =$required->input('email');
        $pass=$request->input('pass');
        return "Email:" . $email . "Pass:".$pass;

    }
}