<?php

session_start();
if ((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany'] == true)) {
    header('Location: index.php');
    exit();
}
?>

<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logowanie</title>

    <!-- Booystrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link href="signin.css" rel="stylesheet">
</head>

<body>


    <!-- <form class='container' method="POST" action='login.php'>
        <div class="mb-3">
            <label for="login" class="form-label">Login: </label>
            <input type="text" class="form-control" id="login" name='login'>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Hasło: </label>
            <input class="form-control" type="password" name='password' id="password"></input>
        </div>

        <button type='submit'>Zaloguj</button>

    </form> -->

    <link href="signin.css" rel="stylesheet">
    </head>

    <body class="text-center">

        <main class="form-signin">
            <form method="POST" action='login.php'>
                <h1 class="h3 mb-3 fw-normal">Zaloguj się</h1>

                <?php
                if (isset($_SESSION['blad'])) echo $_SESSION['blad'];
                ?>

                <div class="form-floating">
                    <input type="text" class="form-control" id="login" name="login" placeholder="Login">
                    <label for="login">Login</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Hasło">
                    <label for="password">Hasło</label>
                </div>
                <button class="w-100 btn btn-lg btn-primary" type="submit">Zaloguj</button>
                <a href="form_registration.php" class="w-100 btn btn-outline-secondary mt-2" tabindex="-1" role="button" aria-disabled="true">Zarejestruj się</a>

            </form>


        </main>






        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    </body>

</html>