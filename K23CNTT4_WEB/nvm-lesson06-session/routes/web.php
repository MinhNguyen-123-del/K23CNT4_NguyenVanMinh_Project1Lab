<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NvmSessionController;

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
Route::get('/session/get',[NvmSessionController::class,'NvmSessionData'])-> name('sesion.get');
Route::get('/session/set',[NvmSessionController::class,'NvmstoreSessionData'])-> name('sesion.set');
Route::get('/session/delete',[NvmSessionController::class,'NvmdeleteSessionData'])-> name('sesion.delete');


