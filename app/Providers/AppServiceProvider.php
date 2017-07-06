<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

<<<<<<< HEAD
use Illuminate\Support\Facades\View;

=======
>>>>>>> 2e3fc6b53cb106d497c0f15cc6821f965d30e671
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
<<<<<<< HEAD
        //网站配置数据共享
       $data = \DB::table('config')->get();
        View::share('yy',$data);
     
=======
        //
>>>>>>> 2e3fc6b53cb106d497c0f15cc6821f965d30e671
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
