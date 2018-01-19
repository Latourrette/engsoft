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

$router->get('/', 'RestaurantController@index');


$router->group(['prefix' => 'menu'], function () use ($router) {


    $router->get('/', 'MenuController@index');
    $router->get('{id}', 'MenuController@getMenu');
    $router->post('/', 'MenuController@createMenu');
    $router->put('{id}', 'MenuController@updateMenu');
    $router->delete('{id}', 'MenuController@deleteMenu');
});


$router->group(['prefix' => 'reservation'], function () use ($router) {


    $router->get('/', 'ReservationController@index');
    $router->get('{id}', 'ReservationController@getReservation');
    $router->post('/', 'ReservationController@createReservation');
    $router->put('{id}', 'ReservationController@updateReservation');
    $router->delete('{id}', 'ReservationController@deleteReservation');
});
