<?php

namespace Controllers;

require_once 'RestaurantController.php';

use Controllers\RestaurantController;

class SessionController
{
    public function __construct()
    {
        session_start();
        if (!isset($_SESSION['restaurant'])) {
            header("Location: http://localhost/sf/restaurante/login");
        } 
    }
}
