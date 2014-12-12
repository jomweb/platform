<?php namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Laravel\Socialite\Contracts\Factory as Socialite;

class SocialController extends Controller
{
    public function connect(Socialite $socialite, Request $request, $type = 'facebook')
    {
        if ($request->has('code')) {
            $user = $socialite->with('facebook')->user();
            dd($user);
        }

        return $socialite->with($type)->redirect();
    }
}
