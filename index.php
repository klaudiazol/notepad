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

    <!-- <nav class="navbar navbar-expand-lg container sticky-top">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class='nav-link' href="logout.php">Wyloguj</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav> -->

    <div class="container-fluid m-0 p-0">

        <div class="row all_fields m-0">
            <div class="col-md-2 rounded-3 m-0 p-0">
                <div class="sticky-top menu_panel border p-2 pt-4">
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

            <div class="col-md-10 border rounded-3">
                <nav class="navbar navbar-expand-lg container sticky-top">
                    <div class="container-fluid">
                        <div class="collapse navbar-collapse" id="navbarText">
                            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class='nav-link' href="logout.php">Wyloguj</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <div class="accordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Notes 1
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="row align-items-center">
                                    <?php
                                    // wykonanie zapytania
                                    $sql = "SELECT * FROM notes";
                                    $result = $conn->query($sql);

                                    // Pobieranie wyników do tablicy asocjacyjnej i wyświetlanie ich
                                    while ($row = $result->fetch_assoc()) {
                                        echo "<div class='col-md-4'>";
                                        echo "<a href='note_view.php?id=" . $row['id'] . "&type=" . $row['type'] . "' class='shortcut_link'>";
                                        echo "<div class='main_notes p-2 m-1'>";
                                        echo "<div>";
                                        echo "<p>" . $row['shortcut'] . "</p>";
                                        echo "</div>";
                                        echo "</a>";
                                        echo "<div class='trash text-center'>";
                                        echo "<button class='btn'><i class='fas fa-trash-alt'></i></button>";
                                        echo "</div>";
                                        echo "</div>";

                                        echo "</div>";
                                    };
                                    ?>

                                    <div class="col-md-4">
                                        <div class='main_notes m-1 p-2'>
                                            <!-- <div class="col-12"> -->
                                            <div class="row justify-content-around">
                                                <div class="col-4 align-self-center text-center">
                                                    <!-- Button trigger modal -->
                                                    <button type="button add_notes_button" class="btn">
                                                        <i class="fas fa-plus"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                Notes 2
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="row align-items-center">
                                    <?php
                                    // wykonanie zapytania
                                    $sql = "SELECT * FROM notes";
                                    $result = $conn->query($sql);

                                    // Pobieranie wyników do tablicy asocjacyjnej i wyświetlanie ich
                                    while ($row = $result->fetch_assoc()) {
                                        echo "<div class='col-md-4'>";
                                        echo "<a href='note_view.php?id=" . $row['id'] . "&type=" . $row['type'] . "' class='shortcut_link'>";
                                        echo "<div class='main_notes p-2 m-1'>";
                                        echo "<div>";
                                        echo "<p>" . $row['shortcut'] . "</p>";
                                        echo "</div>";
                                        echo "</a>";
                                        echo "<div class='trash text-center'>";
                                        echo "<button class='btn'><i class='fas fa-trash-alt'></i></button>";
                                        echo "</div>";
                                        echo "</div>";

                                        echo "</div>";
                                    };
                                    ?>

                                    <div class="col-md-4">
                                        <div class='main_notes m-1 p-2'>
                                            <!-- <div class="col-12"> -->
                                            <div class="row justify-content-around">
                                                <div class="col-4 align-self-center text-center">
                                                    <!-- Button trigger modal -->
                                                    <button type="button add_notes_button" class="btn">
                                                        <i class="fas fa-plus"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                Notes 3
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse show" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="row align-items-center">
                                    <?php
                                    // wykonanie zapytania
                                    $sql = "SELECT * FROM notes";
                                    $result = $conn->query($sql);

                                    // Pobieranie wyników do tablicy asocjacyjnej i wyświetlanie ich
                                    while ($row = $result->fetch_assoc()) {
                                        echo "<div class='col-md-4'>";
                                        echo "<a href='note_view.php?id=" . $row['id'] . "&type=" . $row['type'] . "' class='shortcut_link'>";
                                        echo "<div class='main_notes p-2 m-1'>";
                                        echo "<div>";
                                        echo "<p>" . $row['shortcut'] . "</p>";
                                        echo "</div>";
                                        echo "</a>";
                                        echo "<div class='trash text-center'>";
                                        echo "<button class='btn'><i class='fas fa-trash-alt'></i></button>";
                                        echo "</div>";
                                        echo "</div>";

                                        echo "</div>";
                                    };
                                    ?>

                                    <div class="col-md-4">
                                        <div class='main_notes m-1 p-2'>
                                            <!-- <div class="col-12"> -->
                                            <div class="row justify-content-around">
                                                <div class="col-4 align-self-center text-center">
                                                    <!-- Button trigger modal -->
                                                    <button type="button add_notes_button" class="btn">
                                                        <i class="fas fa-plus"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>



    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-sticky-note"></i> Rodzaj nowej notatki</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container d-grid gap-3">
                        <div class="row">

                            <div class="col-4">
                                <a href="simples.php">
                                    <div class="col-12 border rounded text-center">linearna <img src="icons/tekst.svg" alt="" class="img-fluid"></div>
                                </a>
                            </div>

                            <div class="col-4">
                                <a href="">
                                    <div class="col-12 border rounded text-center">mapa myśli <img src="icons/mapa.svg" alt="" class="img-fluid"></div>
                                </a>
                            </div>
                            <div class="col-4">
                                <a href="corn.php">
                                    <div class="col-12 border rounded text-center">metoda Cornella <img src="icons/cornell.svg" alt="" class="img-fluid"></div>
                                </a>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-4">
                                <a href="tree.php">
                                    <div class="col-12 border rounded text-center">drzewo <img src="icons/drzewo.svg" alt="" class="img-fluid"></div>
                                </a>
                            </div>
                            <div class="col-4">
                                <a href="">
                                    <div class="col-12 border rounded text-center px-0">nota bibliograf. <img src="icons/nota.svg" alt="" class="img-fluid"></div>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>




    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>

</html>