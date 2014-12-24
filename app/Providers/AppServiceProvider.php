<?php namespace App\Providers;

use App\Composers\Navbar;
use App\Handlers\BackToWebsite;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->addBackToWebsiteMenu();

        $this->addViewComposers();
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // This service provider is a great spot to register your various container
        // bindings with the application.

    }

    /**
     * Add back to website menu.
     *
     * @return void
     */
    protected function addBackToWebsiteMenu()
    {
        $this->app['events']->listen('orchestra.ready: admin', BackToWebsite::class);
    }

    /**
     * Add view composers.
     *
     * @return void
     */
    protected function addViewComposers()
    {
        $this->app['view']->composer('layouts.partials.navigation', Navbar::class);
    }
}
