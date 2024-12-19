<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NVM_QUAN_TRIController;

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
//san pham

