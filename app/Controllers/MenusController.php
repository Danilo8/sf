<?php

namespace app\Controllers;

use app\Models\Menus;

class MenusController
{
    private $model;

    public function __construct()
    {
        $this->model = new Menus();

        if (isset($_POST)) {
            switch ($_POST['menu_action']) {
                case 'cadastrar':
                    echo "Aqui!";
                    break;

                case 'cadastrar2':
                    echo "Aqui!";
                    break;
                
                default:
                    // echo "default!";
                    break;
            }
        }
    }

    public function Insert()
    {
        if ($this->model->Insert($_POST)) {
            echo "Cadastrou!";
        } else {
            echo "Não Cadastrou!";
        }
    }

    public function Select($id)
    {
        $result = $this->model->Select($id);

        if ($result) {
            return $result;
        } else {
            return false;
        }
        
    }
}
