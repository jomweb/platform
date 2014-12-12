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
        if (! $this->app['orchestra.app']->installed()) {
            return ;
        }

        $this->app['orchestra.platform.menu']->add('back-to-website', '^:home')
            ->link(handles('app::/'))
            ->title('Back to website');
    }
}
