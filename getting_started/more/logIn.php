<?php 
    session_start();
    require('config.inc.php');
    $message='';
    if(isset($_POST['user']) && isset($_POST['pass'])) {
        $db = new mysqli(MYSQL_HOST, MYSQL_USER, MYSQL_PASS, MYSQL_DB);
        $sql = sprintf("SELECT * FROM users WHERE username='%s'", 
                $db->real_escape_string($_POST['user']));
        $result = $db->query($sql);
        $row = $result->fetch_object();
        if (row != null){
            $hash = $row->hash;
            if (password_verify($_POST['pass'], $hash)){
                $message = 'successful';
                $_SESSION['user'] = $row->username;
                $_SESSION['isAdmin'] = $row->isAdmin;
                echo $_SESSION['user'];
                echo $_SESSION['isAdmin'];
            } else {
                $message = 'failed';
            }
        } else {
            $message = 'failed';
        }
        $db->close();
    }
?>

<?php
readfile('header.tmpl.html');

echo "<div class='text-info'>$message</div>";
?>
<form method="post" action="">
  <div class="form-group">
    <label for="name">User name</label> <input type="text" class="form-control" name="user" id="name">
  </div>
  <div class="form-group">
    <label for="password">Password</label> <input type="password" class="form-control" name="pass" id="password"><br>
  </div>
  <input type="submit" value="Login" class="btn btn-primary">
</form>
</div>
</div>
<?php
readfile('footer.tmpl.html');
?>