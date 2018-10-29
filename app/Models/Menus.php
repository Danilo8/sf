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

    public function Insert($values)
    {
        $sql =  "INSERT INTO `menus` (`id`, `restaurant_id`, `product_name`, `product_descripion`, `category_id`, `product_price`, `promotional_price`, `product_photo`)" .
                "VALUES (NULL, '" . $values['restaurant_id'] . "', '" . $values['product_name'] . "', '" . $values['product_descripion'] . "', '" . $values['category_id'] . "', '" . $values['product_price'] . "', '" . $values['promotional_price'] . "', NULL)";
        
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
        $sql = "SELECT * FROM `menus` WHERE category_id = '$id'";

        $result = mysqli_query($this->DB, $sql);

        if (mysqli_num_rows($result) > 0) {
            return $result;
        } else {
            return false;
        }
    }
}
