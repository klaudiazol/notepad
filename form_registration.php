<?php
session_start()
?>

<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Utwórz nowe konto</title>

    <!-- Booystrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link href="signin.css" rel="stylesheet">

    <style>
        .error {
            color: red;
            margin-top: 10px;
            margin-bottom: 10px;
        }
    </style>

</head>

<body>


    <link href="signin.css" rel="stylesheet">
    </head>

    <body class="text-center">

        <main class="form-signin">
            <form method="POST" action='register.php' enctype="multipart/form-data">
                <h1 class="h3 mb-3 fw-normal">Zarejestruj się</h1>

                <div class="form-floating">
                    <input type="text" class="form-control" id="login" name="login" placeholder="Login" required="required">
                    <label for="login">Login</label>
                </div>

                <?php
                if (isset($_SESSION['e_nick'])) {
                    echo '<div class="error">' . $_SESSION['e_nick'] . '</div>';
                    unset($_SESSION['e_nick']);
                }
                ?>

                <div class="form-floating">
                    <input type="email" class="form-control" id="email" name="email" placeholder="E-mail" required="required">
                    <label for="password">E-mail</label>
                </div>

                <?php
                if (isset($_SESSION['e_email'])) {
                    echo '<div class="error">' . $_SESSION['e_email'] . '</div>';
                    unset($_SESSION['e_email']);
                }
                ?>

                <div class="form-floating">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Hasło" required="required">
                    <label for="password">Hasło</label>
                </div>

                <?php
                if (isset($_SESSION['e_haslo'])) {
                    echo '<div class="error">' . $_SESSION['e_haslo'] . '</div>';
                    unset($_SESSION['e_haslo']);
                }
                ?>

                <div class="form-floating">
                    <input type="password" class="form-control" id="cpassword" name="cpassword" placeholder="Powtóz hasło" required="required">
                    <label for="password">Powtórz hasło</label>
                </div>
                <button class="w-100 btn btn-lg btn-primary" type="submit">Utwórz nowe konto</button>
                <a href="form_login.php" class="w-100 btn btn-outline-secondary mt-2" tabindex="-1" role="button" aria-disabled="true">Zaloguj</a>

            </form>
        </main>


        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    </body>

</html>