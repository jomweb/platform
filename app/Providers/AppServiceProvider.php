<?php namespace App\Providers;

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

    protected function addBackToWebsiteMenu()
    {
        $app = $this->app;

        $this->app['events']->listen('orchestra.ready: admin', function () use ($app) {
            if (! $app['orchestra.app']->installed()) {
                return ;
            }

            $app['orchestra.platform.menu']->add('back-to-website', '^:home')
                ->link(handles('app::/'))
                ->title('Back to website');
        });
    }

    /**
     * Add view composers.
     *
     * @return void
     */
    protected function addViewComposers()
    {
        $this->app['view']->composer('layouts.partials.navigation', 'App\Composers\Navbar');
    }
}
