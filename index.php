<?php

define('REQ', "app" . DIRECTORY_SEPARATOR);
define('URL', 'localhost/searchfood');

require_once (dirname(__FILE__) . DIRECTORY_SEPARATOR . 'autoload.php');

use routes\Routes;

$route = new Routes();

//var_dump($route);

if ($route->Path != null) {
    require(REQ . 'Views' . DIRECTORY_SEPARATOR . '/' . $route->Path . '/' . $route->File . '.php');
} else {
    require(REQ . 'Views' . DIRECTORY_SEPARATOR . '/' . $route->File . '.php');
}