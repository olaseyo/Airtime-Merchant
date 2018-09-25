<?php
/**
 * Created by PhpStorm.
 * User: Olaseyo
 * Date: 20/09/2018
 * Time: 17:28
 */

namespace App\Repositories\User;
use Illuminate\Support\ServiceProvider;

class UserRepoServiceProvide extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {

    }


    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\Repositories\User\UserRepository', 'App\Repositories\User\EloquentUser');

		//$this->app->bind('App\Repositories\User\UserRepository', 'App\Repositories\User\EloquentUserIdentity');
    }
}