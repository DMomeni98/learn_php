<?php 
    $user='';
    $pass='';
    $gender='';
    $langs=[];
    $fav_team='';
    $tp='';

    if (isset($_POST['submit'])){
        $is_valid=true;
        if (!isset($_POST['user']) || $_POST['user'] === '') {
            $is_valid = false;
        } else { 
            $user = $_POST['user'];
        }
        if (!isset($_POST['ps']) || $_POST['ps'] === '') {
            $is_valid = false;
        } else {
            $pass = $_POST['ps'];
        }
        if (!isset($_POST['gender']) || $_POST['gender'] === '') {
            $is_valid = false;
        } else {
            $gender = $_POST['gender'];
        }
        if (!isset($_POST['fft']) || $_POST['fft'] === '') {
            $is_valid = false;
        } else {
            $fav_team = $_POST['fft'];
        }
        if (!isset($_POST['langs']) || !is_array($_POST['langs']) || count($_POST['langs']) === 0 ) {
            $is_valid = false;
        } else {
            $langs = $_POST['langs'];
        }
        if (!isset($_POST['tp']) || $_POST['tp'] === '') {
            $is_valid = false;
        } else {
            $tp = $_POST['tp'];
        }
        
        if ($is_valid){
            printf('User name: %s
            <br>Password: %s
            <br>Gender: %s
            <br>Team: %s
            <br>Language(s): %s
            <br>T&amp;C: %s',
            htmlspecialchars($user, ENT_QUOTES),
            htmlspecialchars($pass, ENT_QUOTES),
            htmlspecialchars($gender, ENT_QUOTES),
            htmlspecialchars($fav_team, ENT_QUOTES),
            htmlspecialchars(implode(', ', $langs), ENT_QUOTES),
            htmlspecialchars($tp, ENT_QUOTES));
        }
        else {
            echo '<br/>empty field detected<br/><br/>';
        }
    }
?>


<html>
    <body>
        <form action="" method="post">
        UserName: <input type="text" name="user" value="<?php 
            echo htmlspecialchars($user, ENT_QUOTES);?>"><br>
        PassWord: <input type="password" name="ps"><br>
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
        Favorrite football team:
        <select name="fft">
            <option value="">please choose one item</option>
            <option value="rmfc"<?php
            if ($fft === 'rmfc') {
                echo ' selected';
            }
            ?>>Real Madrid FC</option>
            <option value="bfc"<?php
            if ($fft === 'bfc') {
                echo ' selected';
            }
            ?>>Barcelona FC</option>
            <option value="mufc"<?php
            if ($fft === 'mufc') {
                echo ' selected';
            }
            ?>>Manchester United FC</option>
        </select><br>
        langueses:
        <select multiple name="langs[]" size="3">
            <option value="En"<?php
             if (in_array('En', $langs)){
                echo ' selected';
             }
             ?>>English</option>
            <option value="Fr"<?php
             if (in_array('Fr', $langs)){
                echo ' selected';
             }
             ?>>Francais</option>
            <option value="Pr"<?php
             if (in_array('Pr', $langs)){
                echo ' selected';
             }
             ?>>Farsi</option>
        </select><br>
        I accept terms&apm;policies:
        <input type="checkbox" name='tp' value="ok"<?php 
            if ($tp === 'ok'){
                echo ' checked';
            }
        ?>>
        <input type="submit" name="submit" value="submit">
        </form>
    </body>
</html>
