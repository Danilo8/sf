<?php

namespace app\Controllers;

use app\Models\Categories;

class CategoriesController 
{
    private $model;

    public function __construct()
    {
        $this->model = new Categories();
    }

    public function Select($id)
    {
        $result = $this->model->Select($id);

        if ($result) {
            $row = $result->fetch_assoc();
            return $row;
        } else {
            return false;
        }
    }
}
