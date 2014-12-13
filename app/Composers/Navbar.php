<?php namespace App\Composers;

use Illuminate\Contracts\View\View;
use Orchestra\Contracts\Auth\Guard;

class Navbar
{
    protected $auth;

    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }

    public function compose(View $view)
    {
        $view->with('user', $this->auth->user());
    }
}
