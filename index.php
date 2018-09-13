<?php

define('WWW_ROOT', dirname(__FILE__));
define('DS', DIRECTORY_SEPARATOR);
define('REQ', "app" . DIRECTORY_SEPARATOR);

require_once (dirname(__FILE__) . DS . 'autoload.php');

use routes\Routes;

$route = new Routes();

//var_dump($route);

if ($route->Path != null) {
    require(REQ . 'views' . DIRECTORY_SEPARATOR . '/' . $route->Path . '/' . $route->File . '.php');
} else {
    require(REQ . 'views' . DIRECTORY_SEPARATOR . '/' . $route->File . '.php');
}