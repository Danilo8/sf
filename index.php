<?php

/**
 * 
 */
if (isset($_GET['page']) && !isset($_GET['d'])) {

    $page = $_GET['page'];

    if (file_exists("app/views/$page.php")) {
        include "app/views/$page.php";
    } else {
        echo "404. Página não Encontrada!";
    }

} else {

    include "app/views/home.php";

}