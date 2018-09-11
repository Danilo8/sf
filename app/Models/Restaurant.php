<?php

namespace Models;

if ($route->Path == null) {
    require_once '../../database/DB/DB_connection.php';
} else {
    require_once 'database/DB/DB_connection.php';
}

use DB\DB_connection;

class Restaurant
{
    
    private $DB;

    public function __construct()
    {
        $connection = new DB_connection();
        $this->DB = $connection->getConnection();
    }

    public function Insert($values)
    {
        $sql =  "INSERT INTO `restaurants` (`id`, `restaurant_name`, `cnpj`, `restaurant_phone`, `address`, `neighborhood`, `city`, `state`, `cep`, `profile_picture`, `owner_name`, `cpf`, `owner_email`, `owner_phone`, `email`, `password`)" .
                "VALUES (NULL, '" . $values['restaurant_name'] . "', '" . $values['cnpj'] . "', '" . $values['restaurant_phone'] . "', '" . $values['address'] . "', '" . $values['neighborhood'] . "', '" . $values['city'] . "', '" . $values['state'] . "', '" . $values['cep'] . "', NULL, '" . $values['owner_name'] . "', '" . $values['cpf'] . "', '" . $values['owner_email'] . "', '" . $values['owner_phone'] . "', '" . $values['email'] . "', '" . md5($values['password']) . "')";
        
        $stmt = $this->DB->prepare($sql);
        $result = $stmt->execute();
        if (!$result) {
            return false;
        } else {
            return mysqli_stmt_insert_id($stmt);
        }
    }

    public function Select()
    {
        
    }

    public function Update($id)
    {
        
    }

    public function Delete($id)
    {
        
    }

    public function Listar()
    {
        
    }

    public function Auth($email, $senha)
    {
        $cipSenha = md5($senha);
        $sql = "SELECT * FROM `restaurants` WHERE `email` = '$email' AND `password` = '$cipSenha'";

        $result = mysqli_query($this->DB, $sql);

        if (mysqli_num_rows($result) == 1) {
            return $result;
        } else {
            return false;
        }
    }
}
