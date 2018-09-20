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

    public function Select($id)
    {
        $sql = "SELECT * FROM `menus` WHERE category_id = '$id'";

        $result = mysqli_query($this->DB, $sql);

        if (mysqli_num_rows($result) > 0) {
            return $result;
        } else {
            return false;
        }
    }
}
