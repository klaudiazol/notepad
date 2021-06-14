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
    <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">

    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container-fluid m-0 p-0">

        <div class="row all_fields m-0">
            <div class="col-md-2 rounded-3 m-0 p-0">
                <div class="sticky-top menu_panel p-3 pt-4">
                    <div class="row m-0">
                        <div class="col-md-12 search_field input-group input-group-sm mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-sm"><i class="fas fa-search"></i></span>
                            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="Szukaj">
                        </div>
                    </div>
                    <div class="row notes_panel m-0">
                        <div class="col-md-12">

                        </div>
                    </div>

                    <div class="row m-0">
                        <div class="col-md-12 settings_bottom_panel">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-10 rounded-3">
                <div class="row">
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
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <form class='container' method="POST" action='add_corn.php'>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="title" name="title" placeholder="Tytuł notatki">
                                <label for="title">Tytuł</label>
                            </div>
                            <div class="form-floating mb-3">
                                <textarea class="form-control" id="key_words" name='key_words' placeholder="Słowa kluczowe"></textarea>
                                <label for="key_words">Słowa kluczowe</label>
                            </div>
                            <div class="form-floating mb-3">
                                <textarea class="form-control" id="content" name="content" placeholder="Tytuł notatki"></textarea>
                                <label for="content">Treść notatki</label>
                            </div>

                            <div class="form-floating mb-3">
                                <textarea class="form-control" id="summary" name='summary' placeholder="Podsumowanie"></textarea>
                                <label for="summary">Podsumowanie</label>
                            </div>

                            <button class="btn btn-primary" type='submit'>Zapisz</button>

                        </form>
                    </div>

                </div>
            </div>


        </div>



    </div>



    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>

</html>