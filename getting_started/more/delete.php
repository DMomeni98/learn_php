<?php
    require('config.inc.php');
    require('auth.inc.php');
    readfile('header.inc.php');
    if (isset($_GET['ID']) && ctype_digit($_GET['ID'])){
        $id = $_GET['ID'];
        $db = new mysqli(MYSQL_HOST, MYSQL_USER, MYSQL_PASS, MYSQL_DB);
        //we checked ID value once in line 3 for sql injection therefore
        //there is no need to check it again.
        // $sql = 'SELECT FROM users WHERE ID=$id0';
        $sql = "DELETE FROM users WHERE ID=$id";
        $db->query($sql);
        $db->close();
        echo "user with id: $id    deleted!";
    } else {
        echo 'invalid ID';
    }
    readfile('footer.inc.php');
