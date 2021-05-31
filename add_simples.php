<!-- dodaje dane do bazy -->
<?php
include('db_conn.php');

$title = $_POST['title'];
$content = $_POST['content'];

// wykonanie zapytania
$sql = "INSERT INTO notes(name) VALUES ('" . $title . "');";
$sql .= "INSERT INTO simples(id_notes, content) VALUES ((SELECT MAX(id) FROM notes), '" . $content . "')";
$result = $conn->multi_query($sql);
echo $conn->error;


header("location: simples.php");


?>