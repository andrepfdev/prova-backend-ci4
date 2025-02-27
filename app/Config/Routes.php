<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// Rotas para CRUD de Produtos
$routes->get('/produtos', 'ProdutoController::index');
$routes->get('/produtos/(:num)', 'ProdutoController::show/$1');
$routes->post('/produtos', 'ProdutoController::create');
$routes->put('/produtos/(:num)', 'ProdutoController::update/$1');
$routes->delete('/produtos/(:num)', 'ProdutoController::delete/$1');

// Rotas para CRUD de Clientes
$routes->get('/clientes', 'ClienteController::index');
$routes->get('/clientes/(:num)', 'ClienteController::show/$1');
$routes->post('/clientes', 'ClienteController::create');
$routes->put('/clientes/(:num)', 'ClienteController::update/$1');
$routes->delete('/clientes/(:num)', 'ClienteController::delete/$1');

// Rotas para CRUD de Pedidos
$routes->get('/pedidos', 'PedidoController::index');
$routes->get('/pedidos/(:num)', 'PedidoController::show/$1');
$routes->post('/pedidos', 'PedidoController::create');
$routes->put('/pedidos/(:num)', 'PedidoController::update/$1');
$routes->delete('/pedidos/(:num)', 'PedidoController::delete/$1');
