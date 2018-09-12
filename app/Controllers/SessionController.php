<?php

namespace Controllers;

class SessionController
{
    public function __construct()
    {
        session_start();
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

    public function redirect($to)
    {
        header('Location: ' . $to);
    }
}
//$class = new \Controllers\SessionController();