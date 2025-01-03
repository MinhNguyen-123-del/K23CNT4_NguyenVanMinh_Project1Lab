<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Nvm_Quan_Tri_Vien_Controller;
use App\Http\Controllers\Nvm_Loai_San_Pham_Controller;
use App\Http\Controllers\Nvm_San_Pham_Controller;
use App\Http\Controllers\Nvm_Khach_Hang_Controller;
use App\Http\Controllers\Nvm_Hoa_Don_Controller;
use App\Http\Controllers\Nvm_CT_Hoa_Don_COntroller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
# Đăng nhập
Route::get('/admins/nvm-login',[Nvm_Quan_Tri_Vien_Controller::class,'nvmLogin'])->name('admins.nvmLogin');
Route::post('/admins/nvm-login',[Nvm_Quan_Tri_Vien_Controller::class,'nvmsubmit'])->name('admins.nvmLoginSubmit');
#Admins
Route::get('/nvm-admins',function(){
    return view('nvmAdmins.nvmSanPham.nvmIndex');});

#Loai San Pham
Route::get('/nvm-admins/nvm-loai-san-pham',[Nvm_Loai_San_Pham_Controller::class,'nvmList'])->name('nvmadmins.nvmloaisanpham');
Route::get('/nvm-admins/nvm-loai-san-pham/nvm-create',[Nvm_Loai_San_Pham_Controller::class,'nvmCreate'])->name('nvmadmins.nvmloaisanpham.nvmcreate');
Route::post('/nvm-admins/nvm-loai-san-pham/nvm-create',[Nvm_Loai_San_Pham_Controller::class,'nvmCreateSubmit'])->name('nvmadmins.nvmloaisanpham.nvmcreatesubmit');

#Edit loại sản phẩm
Route::get('/nvm-admins/nvm-loai-san-pham/nvm-edit/{id}',[Nvm_Loai_San_Pham_Controller::class,'nvmEdit'])->name('nvmadmins.nvmloaisanpham.nvmedit');
Route::get('/nvm-admins/nvm-loai-san-pham/nvm-edit',[Nvm_Loai_San_Pham_Controller::class,'nvmEditSubmit'])->name('nvmadmins.nvmloaisanpham.nvmeditsubmit');

#Delete loai san pham
Route::get('/nvm-admins/nvm-loai-san-pham/nvm-delete/{id}',[Nvm_Loai_San_Pham_Controller::class,'nvmDelete'])->name('nvmadmins.nvmloaisanpham.nvmdelete');

#San Pham
Route::get('/nvm-admins/nvm-san-pham',[Nvm_San_Pham_Controller::class,'nvmList'])->name('nvmadmins.nvmsanpham');
Route::get('/nvm-admins/nvm-san-pham/nvm-create',[Nvm_San_Pham_Controller::class,'nvmCreate'])->name('nvmadmins.nvmsanpham.nvmcreate');
Route::post('/nvm-admins/nvm-san-pham/nvm-create',[Nvm_San_Pham_Controller::class,'nvmCreateSubmit'])->name('nvmadmins.nvmsanpham.nvmcreatesubmit');
#Edit sản phẩm
Route::get('/nvm-admins/nvm-san-pham/nvm-edit/{id}',[Nvm_San_Pham_Controller::class,'nvmEdit'])->name('nvmadmins.nvmsanpham.nvmedit');
Route::get('/nvm-admins/nvm-san-pham/nvm-edit',[Nvm_San_Pham_Controller::class,'nvmEditSubmit'])->name('nvmadmins.nvmsanpham.nvmeditsubmit');

#Delete san pham
Route::get('/nvm-admins/nvm-san-pham/nvm-delete/{id}',[Nvm_San_Pham_Controller::class,'nvmDelete'])->name('nvmadmins.nvmsanpham.nvmdelete');

#Khach Hang
Route::get('/nvm-admins/nvm-khach-hang',[Nvm_Khach_Hang_Controller::class,'nvmList'])->name('nvmadmins.nvmkhachhang');
Route::get('/nvm-admins/nvm-khach-hang/nvm-create',[Nvm_Khach_Hang_Controller::class,'nvmCreate'])->name('nvmadmins.nvmkhachhang.nvmcreate');
Route::post('/nvm-admins/nvm-khach-hang/nvm-create',[Nvm_Khach_Hang_Controller::class,'nvmCreateSubmit'])->name('nvmadmins.nvmkhachhang.nvmcreatesubmit');
#Edit Khach Hang
Route::get('/nvm-admins/nvm-khach-hang/nvm-edit/{id}',[Nvm_Khach_Hang_Controller::class,'nvmEdit'])->name('nvmadmins.nvmkhachhang.nvmedit');
Route::post('/nvm-admins/nvm-khach-hang/nvm-edit',[Nvm_Khach_Hang_Controller::class,'nvmEditSubmit'])->name('nvmadmins.nvmkhachhang.nvmeditsubmit');

#Delete Khach Hang
Route::get('/nvm-admins/nvm-khach-hang/nvm-delete/{id}',[Nvm_Khach_Hang_Controller::class,'nvmDelete'])->name('nvmadmins.nvmkhachhang.nvmdelete');

#Hóa Đơn
Route::get('/nvm-admins/nvm-hoa-don',[Nvm_Hoa_Don_Controller::class,'nvmList'])->name('nvmadmins.nvmhoadon');
Route::get('/nvm-admins/nvm-hoa-don/nvm-create',[Nvm_Hoa_Don_Controller::class,'nvmCreate'])->name('nvmadmins.nvmhoadon.nvmcreate');
Route::post('/nvm-admins/nvm-hoa-don/nvm-create',[Nvm_Hoa_Don_Controller::class,'nvmCreateSubmit'])->name('nvmadmins.nvmhoadon.nvmcreatesubmit');
#Edit Hóa Đơn
Route::get('/nvm-admins/nvm-hoa-don/nvm-edit/{id}',[Nvm_Hoa_Don_Controller::class,'nvmEdit'])->name('nvmadmins.nvmhoadon.nvmedit');
Route::post('/nvm-admins/nvm-hoa-don/nvm-edit',[Nvm_Hoa_Don_Controller::class,'nvmEditSubmit'])->name('nvmadmins.nvmhoadon.nvmeditsubmit');

#Delete Hóa Đơn
Route::get('/nvm-admins/nvm-hoa-don/nvm-delete/{id}',[Nvm_Hoa_Don_Controller::class,'nvmDelete'])->name('nvmadmins.nvmhoadon.nvmdelete');

#Ct Hóa Đơn
Route::get('/nvm-admins/nvm-ct-hoa-don',[Nvm_CT_Hoa_Don_COntroller::class,'nvmList'])->name('nvmadmins.nvmcthoadon');
Route::get('/nvm-admins/nvm-ct-hoa-don/nvm-create',[Nvm_CT_Hoa_Don_COntroller::class,'nvmCreate'])->name('nvmadmins.nvmcthoadon.nvmcreate');
Route::post('/nvm-admins/nvm-ct-hoa-don/nvm-create',[Nvm_CT_Hoa_Don_COntroller::class,'nvmCreateSubmit'])->name('nvmadmins.nvmcthoadon.nvmcreatesubmit');
#Edit Ct Hóa Đơn
Route::get('/nvm-admins/nvm-ct-hoa-don/nvm-edit/{id}',[Nvm_CT_Hoa_Don_COntroller::class,'nvmEdit'])->name('nvmadmins.nvmcthoadon.nvmedit');
Route::post('/nvm-admins/nvm-ct-hoa-don/nvm-edit',[Nvm_CT_Hoa_Don_COntroller::class,'nvmEditSubmit'])->name('nvmadmins.nvmcthoadon.nvmeditsubmit');

#Delete Ct Hóa Đơn
Route::get('/nvm-admins/nvm-ct-hoa-don/nvm-delete/{id}',[Nvm_CT_Hoa_Don_COntroller::class,'nvmDelete'])->name('nvmadmins.nvmcthoadon.nvmdelete');

#Quản Trị
Route::get('/nvm-admins/nvm-quan-tri',[Nvm_Quan_Tri_Vien_Controller::class,'nvmList'])->name('nvmadmins.nvmquantri');
Route::get('/nvm-admins/nvm-quan-tri/nvm-create',[Nvm_Quan_Tri_Vien_Controller::class,'nvmCreate'])->name('nvmadmins.nvmquantri.nvmcreate');
Route::post('/nvm-admins/nvm-quan-tri/nvm-create',[Nvm_Quan_Tri_Vien_Controller::class,'nvmCreateSubmit'])->name('nvmadmins.nvmquantri.nvmcreatesubmit');
#Edit Quản Trị
Route::get('/nvm-admins/nvm-quan-tri/nvm-edit/{id}',[Nvm_Quan_Tri_Vien_Controller::class,'nvmEdit'])->name('nvmadmins.nvmquantri.nvmedit');
Route::get('/nvm-admins/nvm-quan-tri/nvm-edit',[Nvm_Quan_Tri_Vien_Controller::class,'nvmEditSubmit'])->name('nvmadmins.nvmquantri.nvmeditsubmit');

#Delete Quản Trị
Route::get('/nvm-admins/nvm-quan-tri/nvm-delete/{id}',[Nvm_Quan_Tri_Vien_Controller::class,'nvmDelete'])->name('nvmadmins.nvmquantri.nvmdelete');