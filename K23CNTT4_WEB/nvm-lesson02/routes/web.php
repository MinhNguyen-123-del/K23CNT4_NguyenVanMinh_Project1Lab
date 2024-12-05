<?php
use App\Http\Controllers\NvmAccountController;
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

Route::get('/greeting', function () {
    return "<h1>Hello Word, Tôi là Minh</h1>";
});
#Redirect
Route:: redirect('/here','thrre');
Route::get('/three', function () {
    return "<h1>Redirect to three</h1>";
});

#router return view
route::get('/Van-Minh',function () {
    return view('vanminh');
});
#route parameter
Route::get('/devmaster/{id}',function($id){
    return "<h1> Devmaster" .$id. "</h1>";
});
#opptional parameter
route::get('/dev/{name?}',function ($name="Văn Minh") {
    return "<h1>Xin Chao".$name."</h1>";
});
#regular expression constraints
route::get('/user-constraint/{name}',function ($name) {
    return "<h1>route contraint [A-Za-z]+";

})-> where('name','[A-Za-z]+');
route:: get('/user-constraint/{id}',function($id){
    return "<h1>Route Contraint [0-9]+";
})->where('id','[0-9]+');
Route :: get('/user-constraint/{id}/{name}', function($id,$name){
    return "<h1>Route Constraint['id'=>'[0-9]+','name'=>'[a-z]+']";
})-> where (['id'=> '[0-9]+','name'=> '[a-z]+']);
Route::get('/user-check/{id}/{name}',function ($id,$name){
    return "<h1>user-check whereNumber('id')->whereAlpha('name')[$id,$name]";
})->whereNumber('id')->whereAlpha('name');
Route :: get ('/user-check/{id}',function($id){
return "<h1> user-check whereUuid('id')=>[$id]";
})->whereUuid('id');
#Encoded Forward Slasher
route ::get('/search/{search}',function($search){

    return "<h1>Tham so tren url la unicode: $search</h1>";
});
Route::get('/named/profile',function(){
    return"<h1>Đặt tên Route </h1>";

})->name('named.profile');

Route::get('/nvm-account',[NvmAccountController::class,'index'])->name('nvmAccount.index');

Route::get('/nvm-account-create',[NvmAccountController::class,'create'])->name('nvm-account.nvm-create');
Route::get('/nvm-account-show-data',[NvmAccountController::class,'create'])->name('nvm-account.nvmShowData');
Route::get('/nvm-account-list-data',[NvmAccountController::class,'nvmList'])->name('nvm-account.nvmList');
Route::get('/nvm-account-list',[NvmAccountController::class,'nvmGetAll'])->name('nvm-account.nvmGetAll');

#Lesson04
Route ::get('/view-1',function(){return view('view1');});
Route ::get('/view-2',function(){return view('view1',['name'=>'Welcome to, Devmaster']);});
Route ::get('/view-4',[NvmAccountController::class,'view4'])->name('viewdemo.view4');
Route ::get('/view-5',[NvmAccountController::class,'view5'])->name('viewdemo.view5');

Route::get('/view42',function(){return view('view42',['name'=>'Devmaster
    Academy!']);});
Route::get('/nvm-view2',function(){
    return view('nvm-view2',[
        'name'=>"K23CNTT4-Nguyen Van Minh",
        'array'=>[1,3,2,6,7]
    ]);
});
Route::get('/nvm-view3',function(){
    return view('nvm-view3',[
        'name'=>"K23CNTT4","Nguyen","Van","Minh",
        'arr'=>[10,15,12,1,22,30],
        'users'=>[],
    ]);
});

