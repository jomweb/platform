<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Autoloaded Service Providers
    |--------------------------------------------------------------------------
    |
    | The service providers listed here will be automatically loaded on the
    | request to your application. Feel free to add your own services to
    | this array to grant expanded functionality to your applications.
    |
    */
    'providers' => append_config([
        Orchestra\Studio\StudioServiceProvider::class,
        Orchestra\Installation\InstallerServiceProvider::class,
    ]),

];
