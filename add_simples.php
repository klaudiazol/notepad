<!-- dodaje dane do bazy -->
<?php
include('db_conn.php');


// wykonanie zapytania
$sql = "SELECT * FROM notes INNER JOIN simples ON notes.id = simples.id_notes";
$result = $conn->query($sql);

// Pobieranie wyników do tablicy asocjacyjnej i wyświetlanie ich
while ($row = $result->fetch_assoc()) {
    echo "Tytuł notatki: " . $row['name'];
    echo '<br>';
    echo "Treść: " . $row['content'];
    echo '<br>';
    echo '<br>';
}

?>