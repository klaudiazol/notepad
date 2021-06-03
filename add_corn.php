<?php
include('db_conn.php');

$title = $_POST['title'];
$content = $_POST['content'];
$key_words = $_POST['key_words'];
$summary = $_POST['summary'];

// wykonanie zapytania 
$sql = "INSERT INTO notes(name, type) VALUES ('" . $title . "', 'cornella');";
$sql .= "INSERT INTO cornella(id_notes, content, key_words, summary) VALUES ((SELECT MAX(id) FROM notes), '" . $content . "', '" . $key_words . "', '" . $summary . "')";
$result = $conn->multi_query($sql);
echo $conn->error;


header("location: corn.php");



// wykonanie zapytania
// $sql = "SELECT * FROM notes INNER JOIN cornella ON notes.id = cornella.id_notes";
// $result = $conn->query($sql);

// Pobieranie wyników do tablicy asocjacyjnej i wyświetlanie ich
// while ($row = $result->fetch_assoc()) {
//     echo "Tytuł notatki: " . $row['name'];
//     echo '<br>';
//     echo "Słowa kluczowe: " . $row['key_words'];
//     echo '<br>';
//     echo "Treść: " . $row['content'];
//     echo '<br>';
//     echo "Podsumowanie: " . $row['summary'];
//     echo '<br>';
//     echo '<br>';
// };
