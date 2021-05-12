<?php
include('db_conn.php');

$sql = "SELECT * FROM notes";
$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {
    echo $row['nazwa'];
    echo '<br>';
}
?>

