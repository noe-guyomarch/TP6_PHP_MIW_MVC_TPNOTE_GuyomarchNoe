<?php

require 'core/core.php';
require 'core/SPDO.php';
require 'core/Controller.php';
require 'core/Model.php';
//require 'controllers/Streamer.php';
//on créé un framework


//règle de routage
// www.monsite.com/
// www.monsite.com/streamer/liste
// www.monsite.com/CONTROLLER/ACTION


// séparation du CONTROLLER et de l ACTION
$webRoot = str_replace('index.php', '', $_SERVER['SCRIPT_NAME']);
$request = str_replace($webRoot, '', $_SERVER['REDIRECT_URL']);
define('WEB_ROOT', $webRoot);

// definition de la page de base
$mainPage = ['controller' => 'categorie','action' => 'liste'];

$request = explode('/', $request);
$controller = $request[0] !== ''?$request[0]: $mainPage['controller'];
$action = isset($request[1]) && $request[1] !== ''?$request[1]: $mainPage['action'];

$controller = ucfirst(strtolower($controller)).'Controller';

//$controller = controllerController
$requestController = new $controller();
//$action = methode due l objet $requestController
if (method_exists($controller, $action)) {
    $requestController->$action();
} else {
    echo '404 - method not found';
}