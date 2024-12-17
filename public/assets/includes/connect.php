<?php

    $con = new mysqli("localhost","root","","shop_db");

    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    $con->set_charset("utf8");

?>