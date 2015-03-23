<?php namespace App\Providers;

use App\Composers\Navbar;
use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app['view']->composer('layouts.partials.navigation', Navbar::class);
    }
}
