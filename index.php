<?php

define('REQ', "app" . DIRECTORY_SEPARATOR);
define('DOMINIO', 'localhost/searchfood');

require_once (dirname(__FILE__) . DIRECTORY_SEPARATOR . 'autoload.php');

use routes\Routes;

$route = new Routes();

//var_dump($route);

if ($route->Path != null) {
    require(REQ . 'views' . DIRECTORY_SEPARATOR . '/' . $route->Path . '/' . $route->File . '.php');
} else {
    require(REQ . 'views' . DIRECTORY_SEPARATOR . '/' . $route->File . '.php');
}