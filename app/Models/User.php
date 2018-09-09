<?php

namespace Models;

require_once '../../database/DB/DB_connection.php';

use DB\DB_connection;

class User
{
    
    private $DB;

    public function __construct()
    {
        $connection = new DB_connection();
        $this->DB = $connection->getConnection();
    }

    public function Insert()
    {
        
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
