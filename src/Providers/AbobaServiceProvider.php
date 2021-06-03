<?php

namespace Blwoalf\Aboba\Providers;

use Illuminate\Support\ServiceProvider;

class AbobaServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
    }
}