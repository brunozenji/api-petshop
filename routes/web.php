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


//listar
$router->get('pets', function () {
    return "All pets list";
});

//visualizar
$router->get('pet/{id}', function ($id) {
    return "Get especifc Pet";
});

//criar
$router->post('pet', function () {
    return "Register new Pet";
});

//editar 
$router->put('pet/{id}', function ($id) {
    return "Update pet infos";
});

//excluir 
$router->delete('pet/{id}', function ($id) {
    return "Delete especifc P";
});



