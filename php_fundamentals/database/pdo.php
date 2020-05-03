<?php

// --------------------------------
// -- PDO Example
// --------------------------------

include 'config.inc.php';

$connection = new PDO('mysql:host='.MYSQL_HOST.';dbname='.MYSQL_DB,
 MYSQL_USER, MYSQL_PASS);

$query = "SELECT f_name, l_name, pen_name FROM authors ORDER BY f_name";
$resultObj = $connection->query($query);

if($resultObj->rowCount() > 0)
{
    foreach($resultObj as $singleRowFromQuery)
    {
        echo "Author: ".$singleRowFromQuery['f_name'].PHP_EOL;
    }
}

$resultObj = null;
$connection = null;