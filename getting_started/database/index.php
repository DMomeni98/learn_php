<a href="insert.php">add user</a><br>
<?php
    $db = new mysqli(
        'localhost',
        'admin',
        'thisIsAdmin:289',
        'php_test'
    );
    $sql = 'SELECT * FROM users';
    $result = $db->query($sql);
    echo'<h3>list of regesterd users:</h3><br>';
    foreach( $result as $row){
        printf(
            '<li><span style="color: %s">%s (%s)</span>
            <a href="/delete.php?ID=%s">delete user</a>
            <a href="/update.php?ID=%s">update user</a>
            </li>',
            htmlspecialchars($row['color'], ENT_QUOTES),
            htmlspecialchars($row['username'], ENT_QUOTES),
            htmlspecialchars($row['gender'], ENT_QUOTES),
            htmlspecialchars($row['ID'], ENT_QUOTES),
            htmlspecialchars($row['ID'], ENT_QUOTES),
        );
    }
    $db->close();