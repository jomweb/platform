<?php namespace App\Http\Controllers;

use Orchestra\Contracts\Foundation\Foundation;

class WelcomeController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Welcome Controller
    |--------------------------------------------------------------------------
    |
    | This controller renders the "marketing page" for the application and
    | is configured to only allow guests. Like most of the other sample
    | controllers, you are free to modify or remove it as you desire.
    |
    */

    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Show the application welcome screen to the user.
     *
     * @param \Orchestra\Contracts\Foundation\Foundation $foundation
     *
     * @return mixed
     */
    public function index(Foundation $foundation)
    {
        $view = ! $foundation->installed() ? 'hello' : 'welcome';

        return view($view);
    }

    /**
     * Show the application about screen to the user.
     *
     * @return mixed
     */
    public function about()
    {
        return view('about');
    }
}
