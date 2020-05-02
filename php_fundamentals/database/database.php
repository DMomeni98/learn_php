<?php

    include 'config.inc.php';

    $db = new mysqli(MYSQL_HOST, MYSQL_USER, MYSQL_PASS, MYSQL_DB);

    //print_r($db): gives us useful information.

    if ($db->connect_errno){

        exit("DataBase Connection failed wiht error: ".$db->connect_error);
    }
    else{
        echo "DataBase Connection Successful\n";
        // $sql = "INSERT INTO authors (f_name, l_name, pen_name)
        // VALUES ('Hooshang', 'Ebtehaj', 'Saye')";  
        //$sql = "DELETE FROM authors WHERE ID=1";
        $sql = "SELECT * FROM authors";
        $result = $db->query($sql);

        //num_rows property gives us number of result rows.
        if ($result->num_rows >0)
        {
            //fetch_assoc(): gives us a associative array format for each row.
            while ($row = $result->fetch_assoc())
            {
                print_r($row);
            }
        }
        // echo "newly add ID: ".$db->insert_id.PHP_EOL;
        $result->close();
    }

    //php closes the database connection automatically, but it's better
    //close the connection manually immediately.
    $db->close();
?>

