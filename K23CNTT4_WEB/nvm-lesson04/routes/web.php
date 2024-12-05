<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/nvm-test', function () {
    return view('nvm-test');
});
Route::get('/nvm-view1', function () {
    return view('nvm-view1',['name'=>"K23CNTT4-Project1-Nguyen Van Minh"]);
});

Route::get('/nvm-view2',function(){
    return view('nvm-view2',[
    
    'name'=>'Napole Minh',
    'arr'=>[1,4,7,2,9],
    ]);
    
    });
    Route::get('/nvm-view3',function(){
        return view('nvm-view3',[
        
        'name'=>["Devmaster","Academy","Chung","Trịnh"],
        'arr'=>[10,15,12,1,22,30],
        'users'=>[],
        ]);
        });