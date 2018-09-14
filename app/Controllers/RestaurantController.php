<?php

namespace app\Controllers;

require_once ('C:\xampp\htdocs\sf\autoload.php');

// if (isset($_GET['set'])) {
//     $controller = new RestaurantController();
// }

use app\Models\Restaurant;

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
            $this->redirect('http://localhost/sf/restaurante/login/cadastro-sucesso');
        } else {
            $this->redirect('http://localhost/sf/restaurante/cadastro/');
        }
        
    }

    public function logar()
    {     
        $auth = $this->model->Auth($_POST['email'], $_POST['password']);

        if (!$auth) {
            $this->redirect('http://localhost/sf/restaurante/login/email-ou-senha-invalidos');            
        } else {
            session_start();
            $row = $auth->fetch_assoc();
            $_SESSION['restaurant'] = $row['id'];
            $this->redirect('http://localhost/sf/restaurante/dashboard');
        }
    }

    public function teste()
    {
        echo "OI";
    }

    /**
     * 
     */
    public function redirect($to)
    {
        header('Location: ' . $to);
    }
}
$controller = new RestaurantController();