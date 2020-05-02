<?php

    include 'config.inc.php';

    $connection = new mysqli(MYSQL_HOST, MYSQL_USER, MYSQL_PASS, MYSQL_DB);
    if($connection->connect_errno)
    {
        die("Failed to connect to the Database. Reason: ".$connection->connect_error);
    }

    //-- previous query
    //$query = "SELECT * FROM Authors ORDER BY first_name";
    //$resultObj = $connection->query($query);

    $tempFirstName = 'Hooshang';

    $query = "SELECT * FROM authors WHERE f_name = ?";
    $statementObj = $connection->prepare($query);

    $statementObj->bind_param("s", $tempFirstName);
    $statementObj->execute();

    $statementObj->bind_result($ID, $firstName, $lastName, $penName);
    $statementObj->store_result();

    if ($statementObj->num_rows() > 0) 
    {
        while ($statementObj->fetch()) 
        {
            echo $firstName." ".$lastName."(".$penName.")".PHP_EOL;
        }
        
        //-- previous loop
        //while ($singleRowFromQuery = $resultObj->fetch_array()) 
        //{
        //    echo "Author: ".$singleRowFromQuery['first_name'].PHP_EOL;
        //}
    }


    $statementObj->close();
    $connection->close();