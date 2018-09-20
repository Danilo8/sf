<?php

namespace app\Controllers;

use app\Models\Menus;

class MenusController
{
    private $model;

    public function __construct()
    {
        $this->model = new Menus();

        if (isset($_POST[md5('menu_action')])) {
            switch ($variable) {
                case 'value':
                    # code...
                    break;
                
                default:
                    # code...
                    break;
            }
        }
    }

    public function Insert()
    {
        
    }
}
