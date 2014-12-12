<?php namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Contracts\Auth\Guard;
use App\Http\Controllers\Controller;
use Orchestra\OneAuth\Contracts\Listener\ConnectUser;
use Orchestra\OneAuth\Processor\AuthenticateUser as Processor;

class SocialController extends Controller implements ConnectUser
{
    public function connect(Processor $processor, Request $request, $type = 'facebook')
    {
        return $processor->execute($this, $type, $request->has('code'));
    }

    /**
     * Response when user has connected.
     *
     * @param  array  $data
     * @param  \Illuminate\Contracts\Auth\Guard  $auth
     * @return mixed
     */
    public function userHasConnected(array $data, Guard $auth)
    {
        return redirect(handles('app::/'));
    }
}
