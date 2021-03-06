<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', 'ForkController@index');
$router->get('/food/{filter}', 'ForkController@filterByFood');


$router->group(['prefix' => '/'], function () use ($router) {

    $router->get('{id}', 'ForkController@getRestaurant');
    $router->delete('{id}', 'ForkController@deleteRestaurant');

});
