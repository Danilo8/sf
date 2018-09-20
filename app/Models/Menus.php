<?php

namespace app\Models;

use database\DB\DB_connection;

class Menus
{
    private $DB;

    public function __construct()
    {
        $connection = new DB_connection();
        $this->DB = $connection->getConnection();
    }
}
