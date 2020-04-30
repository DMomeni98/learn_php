<?php
    if (isset($_GET['ID']) && ctype_digit($_GET['ID'])){
        $id = $_GET['ID'];
        $db = new mysqli('localhost',
        'admin',
        'thisIsAdmin:289',
        'php_test');
        //we checked ID value once in line 3 for sql injection therefore
        //there is no need to check it again.
        // $sql = 'SELECT FROM users WHERE ID=$id0';
        $sql = "DELETE FROM users WHERE ID=$id";
        $db->query($sql);
        $db->close();
        header('Location: index.php');
        // echo "user with id: $id    deleted!";
    } else {
        // echo 'invalid ID';
        header('Location: index.php');
    }

