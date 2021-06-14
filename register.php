<?php

session_start();

$flag = true;

$login = $_POST['login'];

// sprawdzanie długości nicka
if ((strlen($login) < 3) || (strlen($login) > 20)) {
    $flag = false;
    $_SESSION['e_nick'] = "Nick musi posiada od 3 do 20 znaków!";
}

if (ctype_alnum($login) == false) {
    $flag = false;
    $_SESSION['e_nick'] = "Nick może składać się tylko z liter i cyfr (bez polskich znaków)";
}

// Sprawdzanie poprawności adresu email
$email = $_POST['email'];
$emailB = filter_var($email, FILTER_SANITIZE_EMAIL);

if ((filter_var($emailB, FILTER_VALIDATE_EMAIL) == false) || ($emailB != $email)) {
    $flag = false;
    $_SESSION['e_email'] = "Podaj poprawny adres e-mail!";
}


// Sprawdzanie poprawności hasla
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];

if ((strlen($password) < 8) || (strlen($password) > 20)) {
    $flag = false;
    $_SESSION['e_haslo'] = "Hasło musi posiadać od 8 do 20 znaków!";
}

if ($password != $cpassword) {
    $flag = false;
    $_SESSION['e_haslo'] = "Podane hasła nie są identyczne!";
}

$password_hash = password_hash($password, PASSWORD_DEFAULT);

try {
    include 'db_conn.php';
    if ($conn->connect_errno != 0) {
        throw new Exception(mysqli_connect_errno());
    } else {
        //Czy email już istnieje?
        $rezultat = $conn->query("SELECT id FROM users WHERE email='$email'");

        if (!$rezultat) throw new Exception($conn->error);

        if (($rezultat->num_rows) > 0) {
            $flag = false;
            $_SESSION['e_email'] = "Istnieje już konto przypisane do tego adresu e-mail!";
        }

        //Czy nick jest już zarezerwowany?
        $rezultat = $conn->query("SELECT id FROM users WHERE login='$login'");

        if (!$rezultat) throw new Exception($conn->error);

        if (($rezultat->num_rows) > 0) {
            $flag = false;
            $_SESSION['e_nick'] = "Login jest już zajęty! Wybierz inny.";
        }

        if ($flag == true) {
            //Dodawanie do bazy

            if ($conn->query("INSERT INTO users VALUES (NULL, '$login', '$password_hash', '$email')")) {
                $_SESSION['udanarejestracja'] = true;
                header('Location: form_login.php');
            } else {
                throw new Exception($conn->error);
            }
        }

        $conn->close();
    }
} catch (Exception $e) {
    echo '<span style="color:red;">Błąd serwera! Przepraszamy za niedogodności i prosimy o rejestrację w innym terminie!</span>';
    echo '<br />Informacja developerska: ' . $e;
}
