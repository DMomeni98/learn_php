<?php 
$user='';
$pass='';
$gender='';
$langs=[];
$fav_team='';
$tp='';

if (isset($_POST['submit'])){
    if (isset($_POST['user'])) {
        $user = $_POST['user'];

    };
    if (isset($_POST['ps'])) {
        $pass = $_POST['ps'];
    };
    if (isset($_POST['gender'])) {
        $gender = $_POST['gender'];
    };
    if (isset($_POST['fft'])) {
        $fav_team = $_POST['fft'];
    };
    if (isset($_POST['langs'])) {
        $langs = $_POST['langs'];
    };
    if (isset($_POST['tp'])) {
        $tp = $_POST['tp'];
    };
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
?>


<html>
    <head>

</head>
<body>
<form action="" method="post">
UserName: <input type="text" name="user"><br>
PassWord: <input type="password" name="ps"><br>
Gender: <input type="radio" name="gender" value="m"> male
        <input type="radio" name="gender" value="f"> female
        <br>
Favorrite football team:
<select name="fft">
    <option value="">please choose one item</option>
    <option value="rmfc">Real Madrid FC</option>
    <option value="bfc">Barcelona FC</option>
    <option value="Mufc">Manchester United FC</option>
</select><br>
langueses:
<select multiple name="langs[]" size="3">
    <option value="En">English</option>
    <option value="Fr">Francais</option>
    <option value="Pr">Farsi</option>
</select><br>
I accept terms&apm;policies:
<input type="checkbox" name='tp' value="ok">
<input type="submit" name="submit" value="submit">
</form>
</body>
</html>
