<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(\App\Repositories\Role\RoleInterface::class, function ($app) {
            return $app->make(\App\Repositories\Role\RoleRepository::class);
        });

        $this->app->bind(\App\Interfaces\OutletRepository::class, function ($app) {
            return $app->make(\App\Repositories\Outlet\OutletRepositoryEloquent::class);
        });

        $this->app->bind(\App\Interfaces\PreRegisterRepository::class, function ($app) {
            return $app->make(\App\Repositories\PreRegister\PreRegisterRepositoryEloquent::class);
        });

        $this->app->bind(\App\Repositories\Permission\PermissionInterface::class, function ($app) {
            return $app->make(\App\Repositories\Permission\PermissionRepository::class);
        });

        $this->app->bind(\App\Interfaces\OtpRepository::class, function ($app) {
            return $app->make(\App\Repositories\Otp\OtpRepositoryService::class);
        });

        $this->app->bind(\App\Repositories\User\UserInterface::class, function ($app) {
            return $app->make(\App\Repositories\User\UserRepository::class);
        });

        $this->app->bind(\App\Repositories\Brand\BrandInterface::class, function ($app) {
            return $app->make(\App\Repositories\Brand\BrandRepository::class);
        });

        $this->app->bind(\App\Repositories\Agreement\AgreementInterface::class, function ($app) {
            return $app->make(\App\Repositories\Agreement\AgreementRepository::class);
        });

        $this->app->bind(\App\Repositories\Samark\SamarkInterface::class, function ($app) {
            return $app->make(\App\Repositories\Samark\SamarkRepository::class);
        });

    } // end of function
} // end of class
