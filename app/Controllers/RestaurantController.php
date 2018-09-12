<?php

namespace Controllers;

if ($route->Path == null) {
    require_once '../Models/Restaurant.php';
} else {
    require_once 'app/Models/Restaurant.php';
}
require_once 'SessionController.php';

use Controllers\SessionController;
use Models\Restaurant;

class RestaurantController
{
    
    private $model;
    private $controller;

    public function __construct()
    {
        $this->model = new Restaurant();
        $this->controller = new SessionController();

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
            $this->redirect('http://localhost/sf/restaurante/login/cadastro-sucesso');
        } else {
            $this->redirect('http://localhost/sf/restaurante/cadastro/');
        }
        
    }

    public function logar()
    {     
        $auth = $this->model->Auth($_POST['email'], $_POST['password']);

        if (!$auth) {
            $this->redirect('http://localhost/sf/restaurante/login/email-ou-senha-incorretos');
        } else {
            $row = $auth->fetch_assoc();
            $this->controller->start_session('restaurant', $row['id']);
        }
    }

    /**
     * 
     */
    public function redirect($to)
    {
        header('Location: ' . $to);
    }
}

$class = new RestaurantController();