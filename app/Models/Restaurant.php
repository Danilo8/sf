<?php

namespace Models;

require_once '../../database/DB/DB_connection.php';

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

    public function Select($id)
    {
        
    }

    public function Listar()
    {
        
    }

    public function Update($id)
    {
        
    }

    public function Delete($id)
    {
        
    }
}
