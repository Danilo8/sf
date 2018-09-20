<?php

namespace app\Controllers;

use app\Models\Categories;

class CategoriesController 
{
    private $model;

    public function __construct()
    {
        $this->model = new Categories();

        if (isset($_POST[md5('category_action')])) {
            switch ($_POST[md5('category_action')]) {
                case md5('register_category'):
                    $this->Insert();
                    break;
                case md5('update_category'):
                    $this->Update();
                    break;
                case md5('delete_category'):
                    $this->Delete();
                    break;
                default:
                    $this->redirect('http://'.DOMINIO.'/restaurante/cardapio');
                    break;
            }
        }
    }

    public function Insert()
    {
        $category = $this->model->Select($_POST['restaurant_id']);
       
        if ($category != false) {
            for ($i=0; $i < mysqli_num_rows($category); $i++) { 
                $category_existing = $category->fetch_assoc();
                if ($_POST['category_name'] == $category_existing['category_name']) {
                    $exist = true;
                }
            }
        }
        
        if (!$exist) {
            if ($this->model->Insert($_POST)) {
                $this->redirect('http://'.DOMINIO.'/restaurante/cardapio/categoria-adicionada-com-sucesso');
            } else {
                $this->redirect('http://'.DOMINIO.'/restaurante/cardapio/erro-ao-adicionada-categoria');
            }
        } else {
            $this->redirect('http://'.DOMINIO.'/restaurante/cardapio/categoria-ja-existe');
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

    public function Update()
    {
        if ($this->model->Update($_POST)) {
            $this->redirect('http://'.DOMINIO.'/restaurante/cardapio/categoria-editada-com-sucesso');
        } else {
            $this->redirect('http://'.DOMINIO.'/restaurante/cardapio/erro-ao-editar-categoria');
        }
        
    }

    public function Delete()
    {
        
    }

    public function redirect($to)
    {
        header('Location: ' . $to);
    }
}
