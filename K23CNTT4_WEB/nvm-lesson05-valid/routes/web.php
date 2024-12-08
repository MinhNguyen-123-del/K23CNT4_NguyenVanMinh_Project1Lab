<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NvmLoginController;
use App\Http\Controllers\Login2Controller;
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

Route:: get('/nvm-login',[NvmLoginController::class,'index'])->name('nvmlogin.nvmSubmit');
Route:: post('/nvm-login',[NvmLoginController::class,'nvmSubmit'])->name('nvmlogin.index');

Route::get('/nvm-login2',[Login2Controller::class,'index'])->name('nvmlogin2.index');
Route::post('/nvm-login2',[Login2Controller::class,'nvmsubmit'])->name('nvmlogin2.nvmsubmit');