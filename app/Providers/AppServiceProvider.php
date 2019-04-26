<?php

namespace App\Providers;

use Domain\Repository\UserRepositoryInterface;
use Illuminate\Support\ServiceProvider;
use Infrastructure\Mock\UserRepository;


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
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
    }
}
