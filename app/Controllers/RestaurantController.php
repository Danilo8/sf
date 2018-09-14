<?php

namespace app\Controllers;

use app\Models\Restaurant;

class RestaurantController
{
    private $model;

    public function __construct()
    {
        session_start();
        $this->model = new Restaurant();
    }

    public function start_session($session, $id)
    {
        if ($session == 'restaurant') {
            $_SESSION['restaurant'] = $id;
            $this->redirect('http://localhost/sf/restaurante/dashboard');
        }
    }

    public function close_session($session)
    {
        session_destroy();
        if ($session == 'restaurant') {
            $this->redirect('http://localhost/sf/restaurante/login');
        } 
    }

    public function Select($col)
    {
        $result = $this->model->Select($_SESSION['restaurant']);

        $row = $result->fetch_assoc();

        return $row["$col"];
        // echo "AQUI";
    }

    public function redirect($to)
    {
        header('Location: ' . $to);
    }
}
//$class = new \Controllers\SessionController();