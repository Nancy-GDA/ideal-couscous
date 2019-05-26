<?php 

// Autoload
require_once "../vendor/autoload.php";

use Aura\Router\RouterContainer;


/**
 * @description
 * PHP contains a plethora of information about the incoming request, 
 * and keeps that information in a variety of locations. 
 * ServerRequestFactory::fromGlobals() can simplify marshaling that information 
 * into a request instance.
 */
$request = Zend\Diactoros\ServerRequestFactory::fromGlobals(
    $_SERVER,
    $_GET,
    $_POST,
    $_COOKIE,
    $_FILES
);

// Create router
$router = new RouterContainer();
$map = $router->getMap();


/**
 * Routes
 */
$map->get('index', '/', [
    'controller' => 'App\Controllers\IndexController',
    'action' => 'indexAction'
]);


$map->get('platillos', '/platillos/{id}', function($request){
    return[
        'controller' => 'App\Controllers\PlatillosController',
        'action' => 'indexAction',
        "index" => $request->getAttribute('id')
    ];
});

// Validate if route exist
$matcher = $router->getMatcher();

$route = $matcher->match($request);

// If route not exist send a 400 page not Found
if(!$route)
    return require '../views/errors/notfound.html';
    
// return var_dump($route);
$handlerData = $route->handler;
$controllerName = new $handlerData['controller'];
$actionName = $handlerData['action'];

// initialize class
$controller = new $controllerName;
$controller->$actionName($request);