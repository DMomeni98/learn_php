<?php

    require 'config.inc.php';
    readfile('header.tmpl.html');
    $user='';
    $gender='';
    $hash='';
    $fav_color='';
    $message = '';
    if (isset($_POST['submit'])){
        $is_valid=true;
        if (!isset($_POST['user']) || $_POST['user'] === '') {
            $is_valid = false;
        } else { 
            $user = $_POST['user'];
        }
        if (!isset($_POST['pass']) || $_POST['pass'] === '') {
            $is_valid = false;
        } else { 
            $hash =password_hash($_POST['pass'], PASSWORD_DEFAULT);
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
            $db = new mysqli(MYSQL_HOST, MYSQL_USER, MYSQL_PASS, MYSQL_DB); 
            $sql = sprintf(
                "INSERT INTO users (username, gender, color, hash) VALUES (
                '%s', '%s', '%s', '%s')",
                $db->real_escape_string($user),
                $db->real_escape_string($gender),
                $db->real_escape_string($fav_color),
                $db->real_escape_string($hash));
            $db->query($sql);
            $db->close();
            $message = 'user added!';
            // header('Location: index.php');
        }
        else {
          $message = 'empty fields';
        }
    }
?>


<html>
    <body>
    echo "<div class='text-info'>$message</div>";
    <form
  action=""
  method="post">
  <div class="form-group">
  <label for="name">User name</label>
  <input type="text" class="form-control" name="user" id="name" value="<?php
    echo htmlspecialchars($name, ENT_QUOTES);
  ?>">
  </div>
  <div class="form-group">
  <label for="password">Password</label>
  <input type="password" class="form-control" name="pass" id="password">
  </div>
  <div class="form-group">
  <div><label>Gender</label></div>
  <div class="form-check form-check-inline"> 
    <input type="radio" class="form-check-input" name="gender" id="gender-f" value="f"<?php
      if ($gender === 'f') {
        echo ' checked';
      }
    ?>>
    <label class="form-check-label" for="gender-f">female</label>
  </div>
  <div class="form-check form-check-inline"> 
    <input type="radio" class="form-check-input" name="gender" id="gender-m" value="m"<?php
      if ($gender === 'm') {
        echo ' checked';
      }
    ?>>
    <label class="form-check-label" for="gender-m">male</label>
  </div>
  </div>
  <div class="form-group">
  <label for="color">Favorite color</label> 
    <select class="form-control" name="fav_color" id="color">
      <option value="">Please select</option>
      <option value="#f00"<?php
        if ($color === '#f00') {
          echo ' selected';
        }
      ?>>red</option>
      <option value="#0f0"<?php
        if ($color === '#0f0') {
          echo ' selected';
        }
      ?>>green</option>
      <option value="#00f"<?php
        if ($color === '#00f') {
          echo ' selected';
        }
      ?>>blue</option>
    </select>
  </div>
  <input type="submit" name="submit" class="btn btn-primary" value="Register">
</form>
    </body>
</html>
<?php
  readfile('footer.tmpl.html');
?>