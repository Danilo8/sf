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
}
