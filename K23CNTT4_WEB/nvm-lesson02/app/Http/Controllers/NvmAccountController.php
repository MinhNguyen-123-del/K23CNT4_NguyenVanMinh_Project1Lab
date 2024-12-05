<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class NvmAccountController extends Controller
{
    //
    public function index(){
        return "<h1>Welcome to , Nguyen Van Minh - Controller</h1>";
    }
    //action:return view->form them moi
    public function create(){
        return view('nvm-account-create');
    }
    //action:return data to view
    public function nvmShowData(){
        $date=array('2310900068','Nguyen Van Minh');
        return view('nvm-account-showData',['data'=>$data]);

    }
    //action return list data to view
    public function nvmList(){
        $data =array(
            ["id"=>1,"UserName"=>"ChungTrinh","Password"=>"123456a@","FullName"=>"T

                rịnh Văn Chung"],

            ["id"=>2,"UserName"=>"Devmaster","Password"=>"123456a@","FullName"=>"De

            vmaster Academy"],
        );
        return view('nvm-acount-list',['list'=>$data]);
    }
    public function  nvmGetAll(){
        $model=DB::table('nvmacount')->get();
        
        return view ('nvm-account-all',['model'=>$model]);
    }
    #Lesson4
    public function view4()
    {
        return view('view4')
            ->with('name','Văn Minh')
            ->with('company','NVM Game');;
    }
    public function view5()
    {
        //dữ liệu
        $info="Viện Công Nghệ Và Nghiên Cứu Devmaster";
        $emp=array
        (
            "Name"=>"Nguyễn Văn Minh",
            "Email"=>"Vanminh@gmail.com",
            "Phone"=>"0387853602",
        );
        if(View::exists('view5')){
            return view('view5',compact('info','emp'));
        }
        else{
            return"Không tồn tại view5";
        }
    }
}
