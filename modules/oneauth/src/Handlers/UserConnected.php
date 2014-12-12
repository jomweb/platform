<?php namespace Orchestra\OneAuth\Handlers;

use Orchestra\OneAuth\User;
use Illuminate\Contracts\Auth\Guard;

class UserConnected
{
    protected $auth;

    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }

    public function handle(User $model)
    {
        if (! is_null($id = $this->getAuthenticatedUser($model))) {
            $this->auth->loginUsingId($id, true);
        }
    }

    protected function getAuthenticatedUser(User $model)
    {
        if ($this->auth->check()) {
            return null;
        }

        return $model->getAttribute('user_id');
    }
}
