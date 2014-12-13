<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

$router->get('/', 'WelcomeController@index');
$router->get('about', 'WelcomeController@about');

$router->get('home', 'HomeController@index');

/*
|--------------------------------------------------------------------------
| Authentication & Password Reset Controllers
|--------------------------------------------------------------------------
*/

$router->controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

$router->get('social/{provider}/connect', [
    'uses' => 'Auth\SocialController@connect',
    'where' => ['provider' => '(facebook|github)'],
]);

/*
|--------------------------------------------------------------------------
| Account Controllers
|--------------------------------------------------------------------------
*/

$router->get('profile/create', 'Account\ProfileController@create');
$router->post('profile', 'Account\ProfileController@store');
$router->get('profile', 'Account\ProfileController@show');
$router->get('profile/edit', 'Account\ProfileController@edit');
$router->put('profile', 'Account\ProfileController@update');
