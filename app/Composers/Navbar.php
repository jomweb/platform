<?php namespace App\Composers;

use Illuminate\Contracts\View\View;
use Orchestra\Contracts\Auth\Guard;

class Navbar
{
    /**
     * The authentication guard implementation.
     *
     * @var \Orchestra\Contracts\Auth\Guard
     */
    protected $auth;

    /**
     * Construct a new composer.
     *
     * @param \Orchestra\Contracts\Auth\Guard $auth
     */
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }

    /**
     * Compose.
     *
     * @param \Illuminate\Contracts\View\View $view
     */
    public function compose(View $view)
    {
        $view->with('user', $this->auth->user());
    }
}
