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

$router->get('/users1', 'User1Controller@index'); // shows all the current users
$router->post('/users1', 'User1Controller@addUser'); // add user
$router->get('/users1/{id}', 'User1Controller@show'); // shows a specific user
$router->put('/users1/{id}', 'User1Controller@update'); // update a specific user
$router->delete('/users1/{id}', 'User1Controller@delete'); //delete a specific user

$router->get('/users2', 'User2Controller@index'); // shows all the current users
$router->post('/users2', 'User2Controller@addUser'); // add user
$router->get('/users2/{id}', 'User2Controller@show');// shows a specific user 
$router->put('/users2/{id}', 'User2Controller@update'); // update a specific user 
$router->delete('/users2/{id}', 'User2Controller@delete'); //delete a specific user 