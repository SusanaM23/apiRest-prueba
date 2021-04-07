<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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

$router->get('/', function () use ($router) {
    return $router->app->version();
});


$router->get('productos', ['as'=>'productos', 'uses'=>'ProductoController@index']);
$router->get('productos/{codigoProd}', ['as'=>'productos.show', 'uses'=>'ProductoController@show']);
$router->post('productos', ['as'=>'productos.store', 'uses'=>'ProductoController@store']);
$router->put('productos/{codigoProd}', ['as'=>'productos.update', 'uses'=>'ProductoController@update']);