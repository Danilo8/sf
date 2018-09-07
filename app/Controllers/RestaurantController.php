<?php

namespace Controllers;

require_once '../Models/Restaurant.php';

use Models\Restaurant;

class RestaurantController
{
    
    private $model;

    public function __construct()
    {
        $this->model = new Restaurant();

        if (isset($_POST)) {
            switch ($_POST['action']) {
                case 'cadastrar':
                    $this->cadastrar();
                    break;

                case 'logar':
                    $this->logar();
                    break;
                
                default:
                    
                    break;
            }
        }
    }

    public function cadastrar()
    {
        
    }

    /**
     * 
     */
    public function logar()
    {        
        //$this->redirect('http://localhost/sf/restaurante/login');
    }

    /**
     * 
     */
    public function redirect($uri)
    {
        return header('Location: ' . $uri);
    }
}

$class = new RestaurantController();