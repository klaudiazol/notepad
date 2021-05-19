<?php

session_start();

include('db_conn.php');

$login = $_POST['login'];
$password = $_POST['password'];

$sql = "SELECT id FROM users WHERE login = '" . $login . "' AND password = '" . $password . "'";
$result = $conn->query($sql);

if (($result->num_rows) == 1) {
    $_SESSION['logged'] = true;
    header('location:index.php');
} else {
    header('location:form_login.php');
}

?>

gg