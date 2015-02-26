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

$router->group(['prefix' => 'profile'], function ($router) {
    $router->get('create', 'Account\ProfileController@create');
    $router->get('edit', 'Account\ProfileController@edit');

    $router->get('/', 'Account\ProfileController@show');
    $router->post('/', 'Account\ProfileController@store');
    $router->put('/', 'Account\ProfileController@update');
});
