<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NvmKhoaController;

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

Route::get('/khoas',[NvmKhoaController::class,'nvmGetAllKhoa'])->name('nvmkhoa.nvmGetAllKhoa');
Route::get('/khoas/detail/{makh}',[NvmKhoaController::class,'nvmGetKhoa'])->name('nvmkhoa.nvmgetKhoa');
Route::get('/khoas/edit/{makh}',[NvmKhoaController::class,'nvmEdit'])->name('nvmkhoa.nvmEdit');
Route::GET('/khoas/edit',[NvmKhoaController::class,'nvmEditSubmit'])->name('nvmkhoa.nvmEditSubmit');
Route::get('/khoas/insert',[NvmKhoaController::class,'nnvmInsert'])->name('nvmKhoa.nvmInsert');