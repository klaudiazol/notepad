<?php
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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>

<body>

    <nav class='container'>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Strona główna</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="corn.php">Notatki Cornella</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="biblio.php" tabindex="-1" aria-disabled="true">Notatki bibliograficzne</a>
            </li>
        </ul>
    </nav>


    <form class='container' method="POST" action='add_tree.php'>
        <div class="mb-3">
            <label for="title" class="form-label">Tytuł notatki</label>
            <input type="text" class="form-control" id="title" name='title'>
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Treść</label>
            <textarea class="form-control" id="content" rows="3" name='content'></textarea>
        </div>

        <button class="btn btn-outline-primary" type='submit'>Zapisz</button>
    </form>


    <script>
        $(document).ready(function() {
            $("button").click(function() {
                $('ul').append("<li>" + $('#title').val());
            })
        });
    </script>


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>

</html>