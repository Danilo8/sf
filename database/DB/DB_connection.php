<?php

namespace DB;

//Busca o arquivo settings.php na pasta config
require_once '../../config/settings.php';

class DB_connection {

    private $mysqli;

    public function __construct() {
        $this->mysqli = new \mysqli(HOST, USER, PASSWORD, DB);
        if ($this->mysqli->connect_errno) {
            die("Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error);
        }
    }

    public function getConnection() {
        return $this->mysqli;
    }

}