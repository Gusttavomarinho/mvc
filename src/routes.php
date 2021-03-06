<?php
use core\Router;

$router = new Router();

$router->get('/', 'HomeController@index');
$router->get('/gustavo', 'HomeController@gustavo');

/** Rotas do Uusairos Controller */
$router->get('/novo','UsuariosController@add');
$router->post('/novo','UsuariosController@addAction');

$router->get('/usuario/{id}/editar','UsuariosController@edit');
$router->post('/usuario/{id}/editar','UsuariosController@editAction');
$router->get('/usuario/{id}/excluir','UsuariosController@del');
$router->get('/usuario/{id}','UsuariosController@show');

/*
* rotas para testar o funcionamento do mvc da b7web 
*
*
$router->get('/sobre/{nome}', 'HomeController@sobreP');
$router->get('/sobre', 'HomeController@sobre');
$router->get('/fotos', 'HomeController@fotos');
$router->get('/foto/{id}', 'HomeController@foto');
$router->get('/foto', 'HomeController@foto');
*
*
*
*/