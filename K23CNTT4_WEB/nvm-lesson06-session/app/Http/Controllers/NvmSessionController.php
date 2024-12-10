<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class NvmSessionController extends Controller
{
//Đọc dữ liệu từ session
    public function NvmSessionData(Request $request)
    {
        if($request->session()->has('name'))
        {
            echo $request->session()->has('name');

        }
        else
        {
            echo "<h2> Không có dữ liệu trong session</h2>";
        }
    
    }
    #Lưu dữ liệu vào session
    public function NvmstoreSessionData(Request $request)
    {
        $request-> session()->forget('name');
        echo "<h2> Dữ liệu đã được lưu và session</h2>";
    }
    #Xóa dữ liệu trong session
    public function NvmdeleteSessionData(Request $request)
    {
        $request->session()->forget('name');
        echo "<h2> Dữ liệu đã được xóa khỏi session </h2>";
    }
}