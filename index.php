<?php

// require('routes/Routes.class.php');
define('REQ', "app" . DIRECTORY_SEPARATOR);

function __autoload($class)
{
    
}
use routes\Routes;
$route = new Routes();

//var_dump($route);

if ($route->Path != null) {
    require(REQ . 'views' . DIRECTORY_SEPARATOR . '/' . $route->Path . '/' . $route->File . '.php');
} else {
    require(REQ . 'views' . DIRECTORY_SEPARATOR . '/' . $route->File . '.php');
}