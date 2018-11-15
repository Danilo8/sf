<?php

namespace app\Controllers;

require_once ('..\..\autoload.php');
require_once ('..\..\index.php');

use app\Models\Restaurant;

class RegisterController
{
    
    private $model;
    private $restaurant;

    public function __construct()
    {
        $this->model = new Restaurant();
        $this->restaurant = new RestaurantController();

        if (isset($_POST)) {
            switch ($_POST['action']) {
                case 'cadastrar':
                    $this->cadastrar();
                    break;

                case 'logar':
                    $this->logar();
                    break;
                
                default:
                    $this->redirect('http://'.URL.'/404');
                    break;
            }
        }
    }

    public function cadastrar()
    {
        if ($this->model->Insert($_POST)) {
            $this->redirect('http://'.URL.'/restaurante/login/cadastro-sucesso');
        } else {
            $this->redirect('http://'.URL.'/restaurante/cadastro/');
        }
        
    }

    public function logar()
    {     
        $auth = $this->model->Auth($_POST['email'], $_POST['password']);

        if (!$auth) {
            $this->redirect('http://'.URL.'/restaurante/login/email-ou-senha-invalidos');            
        } else {
            $row = $auth->fetch_assoc();
            $this->restaurant->start_session('restaurant', $row['id']);
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
$controller = new RegisterController();