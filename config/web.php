<?php
/**
 * Routing
 */
use Symfony\Component\HttpClient\HttpClient;

$router = new System\Router();

$router->add('', ['controller' => 'Home', 'action' => 'index']);


$router->add('user', ['controller' => 'Home', 'action' => 'user']);

$router->add('{controller}/{action}');
    
$router->dispatch($_SERVER['QUERY_STRING']);