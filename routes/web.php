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

$router->post('auth/login', 'AuthController@login');
$router->group(['middleware' => 'auth:api','prefix' => 'auth'], function () use ($router) {  
     
    $router->post('logout', 'AuthController@logout');
    $router->post('me', 'AuthController@me');
    $router->post('refresh','AuthController@refresh');
});


$router->group(['prefix' => 'dev'], function () use ($router) {       
    $router->get('users', 'UserController@index');
    $router->get('permissions', 'PermissionController@index');
    $router->get('roles', 'RoleController@index');
});