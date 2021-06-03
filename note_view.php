<?php
include('db_conn.php');

$id = $_GET['id'];
$type = $_GET['type'];

// wykonanie zapytania
switch ($type) {
    case 'simples':
        // $sql = "SELECT * FROM simples WHERE id_notes = " . $id;
        $sql = "SELECT * FROM notes INNER JOIN simples ON notes.id = simples.id_notes WHERE id_notes = " . $id;
        break;
    case 'bibliography':
        echo "Biblio";
        break;
    case 'cornella':
        echo "Cornella";
        break;
    case 'tree':
        echo "Tree";
        break;
}
$result = $conn->query($sql);

// Pobieranie wyników do tablicy asocjacyjnej i wyświetlanie ich
while ($row = $result->fetch_assoc()) {
    echo "Tytuł notatki: " . $row['name'];
    echo '<br>';
    echo "Treść: " . $row['content'];
    echo '<br>';
};
