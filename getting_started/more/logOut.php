<?php

session_start();

if (isset($_SESSION['user'])) {
    unset($_SESSION['user']);
}

if (isset($_SESSION['isAdmin'])) {
    unset($_SESSION['isAdmin']);
}

readfile('header.tmpl.html');

echo 'User logged out.';

readfile('footer.tmpl.html');

?>