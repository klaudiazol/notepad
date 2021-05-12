<?php
    include('db_conn.php');

    // wykonanie zapytania
    $sql = "SELECT * FROM notes INNER JOIN cornella ON notes.id = cornella.id_notes";
    $result = $conn->query($sql);

    // Pobieranie wyników do tablicy asocjacyjnej i wyświetlanie ich
    while ($row = $result->fetch_assoc()) {
        echo "Tytuł notatki: " . $row['name'];
        echo '<br>';
        echo "Słowa kluczowe: " . $row['key_words'];
        echo '<br>';
        echo "Treść: " . $row['content'];
        echo '<br>';
        echo "Podsumowanie: " . $row['summary'];
        echo '<br>';
        echo '<br>';
    };
