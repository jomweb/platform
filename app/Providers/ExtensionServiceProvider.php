<?php namespace App\Providers;

use Orchestra\Foundation\Support\Providers\ExtensionServiceProvider as ServiceProvider;

class ExtensionServiceProvider extends ServiceProvider
{
    /**
     * Available extensions.
     *
     * @var array
     */
    protected $extensions = [
        'app::Extensions/*/*',
        'orchestra/oneauth' => 'base::modules/oneauth',
    ];
}
