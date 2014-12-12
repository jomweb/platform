<?php namespace Orchestra\OneAuth\Processor;

use Laravel\Socialite\Contracts\Provider;
use Laravel\Socialite\Contracts\User;
use Orchestra\OneAuth\Contracts\Listener\ConnectUser;
use Laravel\Socialite\Contracts\Factory as Socialite;
use Orchestra\OneAuth\Contracts\Command\AuthenticateUser as Command;

class AuthenticateUser implements Command
{
    protected $socialite;

    public function __construct(Socialite $socialite)
    {
        $this->socialite = $socialite;
    }

    /**
     * Execute user authentication.
     *
     * @param \Orchestra\OneAuth\Contracts\Listener\ConnectUser  $listener
     * @param string  $type
     * @param bool  $hasCode
     * @return mixed
     */
    public function execute(ConnectUser $listener, $type, $hasCode = false)
    {
        $provider = $this->socialite->with($type);

        if (! $hasCode) {
            return $this->getAuthorizationFirst($provider);
        }

        $data = [
            'provider' => $type,
            'user' => $this->getUserInformation($provider, $type),
        ];

        return $listener->userHasConnected($data);
    }

    /**
     * Get authorization first from provider.
     *
     * @param  \Laravel\Socialite\Contracts\Provider  $provider
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    protected function getAuthorizationFirst(Provider $provider)
    {
        return $provider->redirect();
    }

    /**
     * Get authorization first from provider.
     *
     * @param  \Laravel\Socialite\Contracts\Provider  $provider
     * @param  string  $type
     * @return \Laravel\Socialite\Contracts\User
     */
    protected function getUserInformation(Provider $provider, $type)
    {
        $user = $provider->user();

        $this->attemptToConnectUser($user);

        return $user;
    }

    protected function attemptToConnectUser(User $user)
    {
        dd($user);
    }
}
