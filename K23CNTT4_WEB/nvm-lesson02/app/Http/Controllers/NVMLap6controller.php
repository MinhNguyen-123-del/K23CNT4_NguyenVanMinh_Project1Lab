<?php
namespace App\Providers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
class AppServiceProvider extends ServiceProvider
{
/**
* Register any application services.
*
* @return void
*/
public function register()
{
//
}
/**
* Bootstrap any application services.
*
* @return void
*/
public function boot()
        {
View::share('companyName', 'Devmaster Academy');
    }
}