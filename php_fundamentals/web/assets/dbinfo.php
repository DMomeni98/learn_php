<?php
    require 'config.inc.php';
    $connection = new mysqli(MYSQL_HOST, MYSQL_USER, MYSQL_PASS, MYSQL_DB);

    if ($connection->connect_errno)
    {
        exit("DataBase Connection Faild due to Error: ".$connection->connect_error);
    }