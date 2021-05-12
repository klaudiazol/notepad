<?php
$servername = "localhost";
$username = "root";
$password = "";
$table = "notatki";

// Create connection
$conn = new mysqli($servername, $username, $password, $table);

$conn->set_charset("utf8");
