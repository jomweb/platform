<?php namespace App\Providers;

use App\Composers\Navbar;
use App\Http\Handlers\BackToWebsite;
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
     * This service provider is a great spot to register your various container
     * bindings with the application. As you can see, we are registering our
     * "Registrar" implementation here. You can add your own bindings too!
     *
     * @return void
     */
    public function register()
    {
        //
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
