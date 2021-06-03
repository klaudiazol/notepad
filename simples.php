<?php
include 'db_conn.php';
session_start();

if (!(isset($_SESSION['logged']))) {
    header('location:form_login.php');
}

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

    <nav class="navbar navbar-expand-lg container">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class='nav-link' href="index.php">Ekran główny</a>
                    </li>
                    <li class="nav-item">
                        <a class='nav-link' href="logout.php">Wyloguj</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <form class='container' method="POST" action='add_simples.php'>
        <div class="mb-3">
            <label for="title" class="form-label">Tytuł notatki</label>
            <input type="text" class="form-control" id="title" name='title'>
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Treść</label>
            <textarea class="form-control" name='content' id="content" rows="3"></textarea>
        </div>

        <button class="btn btn-outline-primary" type='submit'>Zapisz</button>

    </form>

    <?php

    // $sql = "SELECT * FROM simples ORDER BY id_notes DESC LIMIT 1";
    // $result = $conn->query($sql);

    // while ($row = $result->fetch_assoc()) {
    //     echo "Tytuł notatki: " . $row['name'];
    //     echo '<br>';
    //     echo "Treść: " . $row['content'];
    //     echo '<br>';
    //     echo '<br>';
    // };
    ?>



    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>

</html>