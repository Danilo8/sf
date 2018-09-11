<?php

namespace Controllers;

if ($route->Path == null) {
    require_once '../Models/Restaurant.php';
} else {
    require_once 'app/Models/Restaurant.php';
}

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
                    $this->redirect('http://localhost/sf/404');
                    break;
            }
        }
    }

    public function cadastrar()
    {
        if ($this->model->Insert($_POST)) {
            //$this->redirect('http://localhost/sf/restaurante/login');
        } else {
            //$this->redirect('http://localhost/sf/restaurante/cadastro');
        }
        
    }

    public function logar()
    {     
        $auth = $this->model->Auth($_POST['email'], $_POST['password']);

        if (!$auth) {
            //$route->Link = "error";
            $this->redirect('http://localhost/sf/restaurante/login');
        } else {
            session_start();
            $row = $auth->fetch_assoc();
            $_SESSION['restaurant'] = $row['id'];
            $this->redirect('http://localhost/sf/restaurante/dashboard');
        }
    }

    /**
     * 
     */
    public function redirect($uri)
    {
        header('Location: ' . $uri);
    }

    public function teste()
    {
        echo "OI";
    }
}

$class = new RestaurantController();