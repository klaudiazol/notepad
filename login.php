<?php

session_start();



if ((!isset($_POST['login'])) || (!isset($_POST['password']))) {
    header('Location: form_login.php');
    exit();
}

include('db_conn.php');

$login = $_POST['login'];
$password = $_POST['password'];

// $login = htmlentities($login, ENT_QUOTES, "UTF-8");

$sql = "SELECT * FROM users WHERE login = '" . $login . "'";
$result = $conn->query($sql);

if (($result->num_rows) == 1) {
    $row = $result->fetch_assoc();

    if (password_verify($password, $row["password"])) {
        $_SESSION["zalogowany"] = true;
        $_SESSION["id"] = $row["id"];
        $_SESSION["login"] = $row["login"];
        $_SESSION["email"] = $row["email"];

        $_SESSION['blad'] = false;
        $result->free_result();
        header('Location: index.php');
    } else {
        $_SESSION['blad'] = '<span style="color:red">Nieprawidłowy login lub hasło1!</span>';
        header('Location: form_login.php');
    }
} else {
    $_SESSION['blad'] = '<span style="color:red">Nieprawidłowy login lub hasło2!</span>';
    header('Location: index.php');
}



$conn->close();




// $sql = "SELECT id FROM users WHERE login = '" . $login . "' AND password = '" . $password . "'";
// $result = $conn->query($sql);

// if (($result->num_rows) == 1) {
//     $_SESSION['logged'] = true;
//     header('location:index.php');
// } else {
//     header('location:form_login.php');
// }

?>

gg