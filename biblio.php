<?php
include 'db_conn.php';
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notepad</title>

    <!-- Booystrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>

    <nav class='container'>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Strona główna</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="simple.php">Zwykłe notatki</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="corn.php" tabindex="-1" aria-disabled="true">Notatki Cornella</a>
            </li>
        </ul>
    </nav>

    <form class = 'container'>
        <div class="mb-3">
            <label for="title" class="form-label">Tytuł notatki</label>
            <input type="text" class="form-control" id="title">
        </div>
        <div class="mb-3">
            <label for="title_biblio" class="form-label">Tytuł artykułu</label>
            <input type="text" class="form-control" id="title_biblio">
        </div>
        <div class="mb-3">
            <label for="authors" class="form-label">Autorzy</label>
            <input type="text" class="form-control" id="authors">
        </div>
        <div class="mb-3">
            <label for="doi" class="form-label">DOI</label>
            <input type="text" class="form-control" id="doi">
        </div>
        <div class="mb-3">
            <label for="year" class="form-label">Rok wydania</label>
            <input type="number" class="form-control" id="year">
        </div>
        <div class="mb-3">
            <label for="journal" class="form-label">Czasopismo</label>
            <input type="text" class="form-control" id="journal">
        </div>
       

    </form>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>    
</body>
</html>