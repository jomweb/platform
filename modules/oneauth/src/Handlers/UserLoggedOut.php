<?php namespace Orchestra\OneAuth\Handlers;

use Illuminate\Session\Store;

class UserLoggedOut
{
    protected $session;

    public function __construct(Store $session)
    {
        $this->session = $session;
    }

    public function handle()
    {
        $this->session->forget('orchestra.oneauth');
    }
}
