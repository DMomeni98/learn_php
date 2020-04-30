<?php 
    if (isset($_GET['ID']) && ctype_digit($_GET['ID'])) {
        $id = $_GET['ID'];
        $user = '';
        $gender ='';
        $fav_color = '';
        echo $id;
        if (isset($_POST['submit'])){
            $is_valid=true;
            if (!isset($_POST['user']) || $_POST['user'] === '') {
                $is_valid = false;
            } else { 
                $user = $_POST['user'];
            }
            if (!isset($_POST['gender']) || $_POST['gender'] === '') {
                $is_valid = false;
            } else {
                $gender = $_POST['gender'];
            }
            if (!isset($_POST['fav_color']) || $_POST['fav_color'] === '') {
                $is_valid = false;
            } else {
                $fav_color = $_POST['fav_color'];
            }
            
            if ($is_valid){
                echo 'is valid';
                $db = new mysqli(
                    'localhost',
                    'admin',
                    'thisIsAdmin:289',
                    'php_test'); 
                $sql = sprintf(
                    "UPDATE users SET username='%s', gender='%s', color='%s' WHERE ID='%s'",
                    $db->real_escape_string($user),
                    $db->real_escape_string($gender),
                    $db->real_escape_string($fav_color),
                    $id);
                $db->query($sql);
                echo "user: $user updated!";
                $db->close();
                // header('Location: index.php');
            }
            else {
                echo '<br/>empty field detected<br/><br/>';
            }
        }

    } else {
        echo 'invalid ID';
        // header('Location: index.php');
    }
?>

<html>
    <body>
        <form action="" method="post">
        UserName: <input type="text" name="user" value="<?php 
            echo htmlspecialchars($user, ENT_QUOTES);?>"><br>
        Gender: <input type="radio" name="gender" value="m"<?php
            if ($gender === 'm') {
                echo ' checked';
            }
            ?>> male
                <input type="radio" name="gender" value="f"<?php
            if ($gender === 'f') {
                echo ' checked';
            }
            ?>> female  <br>
        Favorrite color:
        <select name="fav_color">
            <option value="">please choose one item</option>
            <option value="#f00"<?php
            if ($fav_color === '#f00') {
                echo ' selected';
            }
            ?>>Red</option>
            <option value="#0f0"<?php
            if ($fav_color === '#0f0') {
                echo ' selected';
            }
            ?>>Green</option>
            <option value="#00f"<?php
            if ($fav_color === '#00f') {
                echo ' selected';
            }
            ?>>Blue</option>
        </select><br>
        <input type="submit" name="submit" value="submit">
        </form>
        <a href="index.php">go to list</a><br>
    </body>
</html>
