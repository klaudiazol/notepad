<?php
include('db_conn.php');

$title = $_POST['title'];
$content = $_POST['content'];

// wykonanie zapytania
$sql = "INSERT INTO notes(name, type) VALUES ('" . $title . "', 'tree');";
$sql .= "INSERT INTO tree(id_notes, content) VALUES ((SELECT MAX(id) FROM notes), '" . $content . "')";
$result = $conn->multi_query($sql);
echo $conn->error;


header("location: tree.php");
