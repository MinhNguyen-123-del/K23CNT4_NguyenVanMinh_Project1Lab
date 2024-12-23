<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NVM_QUAN_TRIController;
use App\Http\Controllers\nvm_Loai_San_Pham_Controller;

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
//quan tri
Route::get('/admins/nvm-login',[NVM_QUAN_TRIController::class,'nvmLogin'])->name('admins.nvmLogin');
Route::get('/admins/nvm-loginsubmit',[NVM_QUAN_TRIController::class,'nvmLoginSubmit'])->name('admins.nvmLoginSubmit');
Route::get('/quantris',[NVM_QUAN_TRIController::class,'nvmGetAllQuanTri'])->name('admins.nvmGetAllQuanTri');
Route::get('/admins/edit-quan-tri/{id}', [NVM_QUAN_TRIController::class, 'nvmEditQuanTri'])->name('admins.editQuanTri');
Route::post('/admins/edit-quan-tri',[NVM_QUAN_TRIController::class,'nvmEditQuanTriSubmit'])->name('admins.nvmEditQuanTriSubmit');
Route::get('/admins/insert',[NVM_QUAN_TRIController::class,'nvmInsert'])->name('admins.nvmInsert');
#Admins
Route::get('/nvm-admins',function(){
    return view('nvmAdmins.index');
});

Route::get('/nvm-admins/nvm-loai-san-pham',[nvm_Loai_San_Pham_Controller::class,'nvmList'])->name('nvmadmins.nvmloaisanpham');
Route::get('/nvm-admins/nvm-loai-san-pham/nvm-create',[nvm_Loai_San_Pham_Controller::class,'nvmCreate'])->name('nvmadmins.nvmloaisanpham.nvmcreate');
Route::post('/nvm-admins/nvm-loai-san-pham/nvm-create',[nvm_Loai_San_Pham_Controller::class,'nvmCreateSubmit'])->name('nvmadmins.nvmloaisanpham.nvmcreatesubmit');
#Edit loại sản phẩm
Route::get('/nvm-admins/nvm-loai-san-pham/nvm-edit/{id}',[nvm_Loai_San_Pham_Controller::class,'nvmEdit'])->name('nvmadmins.nvmloaisanpham.nvmedit');
Route::get('/nvm-admins/nvm-loai-san-pham/nvm-edit',[nvm_Loai_San_Pham_Controller::class,'nvmEditSubmit'])->name('nvmadmins.nvmloaisanpham.nvmeditsubmit');
#Delete
Route::get('/nvm-admins/nvm-loai-san-pham/nvm-delete/{id}',[nvm_Loai_San_Pham_Controller::class,'nvmDelete'])->name('nvmadmins.nvmloaisanpham.nvmdelete');
