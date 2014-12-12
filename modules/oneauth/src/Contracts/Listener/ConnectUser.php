<?php namespace Orchestra\OneAuth\Contracts\Listener;

interface ConnectUser
{
    /**
     * Response when user has connected.
     *
     * @param  array  $data
     * @return mixed
     */
    public function userHasConnected(array $data);
}
