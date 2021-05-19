<?php

session_start();

include('db_conn.php');

$login = $_POST['login'];
$password = $_POST['password'];

$sql = "INSERT INTO users (login,password) VALUES ('" . $login . "', '" . $password . "')";
$result = $conn->query($sql);

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header('location:form_login.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    header('location:form_register');
}


?>

gg