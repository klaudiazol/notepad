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

    <nav class='container'>
        <ul class="nav flex-column">
            <!-- <li class="nav-item">
                <a class="nav-link" href="corn.php">Notatki Cornella</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="simples.php">Zwykłe notatki</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="biblio.php" tabindex="-1" aria-disabled="true">Notatki bibliograficzne</a>
            </li> -->
            <li class='nav-item text-end'>
                <a class='nav-link' href="logout.php">Wyloguj</a>
            </li>
        </ul>
    </nav>

    <div class="container">

        <div class="row">
            <div class="col-md-2 border menu_panel">

                <div class="search_field input-group input-group-sm mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm"><i class="fas fa-search"></i></span>
                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                </div>

                <div class="notes_panel">

                </div>

                <div class="settings_bottom_panel">

                </div>



                <!-- <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                    <i class="fas fa-angle-down"></i>
                    </>

                    <div class="collapse" id="collapseExample">


                        <nav class='container'>
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="corn.php">Notes 1</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="simples.php">Notes 2</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="biblio.php" tabindex="-1" aria-disabled="true">Notes 3</a>
                                </li>
                            </ul>
                        </nav>

                    </div> -->
            </div>

            <div class="col-md-10">

                <div class="accordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Notes 1
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="row">
                                    <div class="col-md-3">

                                        <div class='main_notes m-2 p-3'>
                                            <div>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores asperiores repellat necessitatibus perferendis neque non, culpa debitis eos voluptatibus voluptas! Provident dolorem ex, doloremque ullam aspernatur ut exercitationem quidem vel </p>
                                            </div>
                                            <div class="trash text-center">
                                                <button class="btn"><i class="fas fa-trash-alt"></i></button>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-3">

                                        <div class='main_notes m-2 p-3'>
                                            <div>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores asperiores repellat necessitatibus perferendis neque non, culpa debitis eos voluptatibus voluptas! Provident dolorem ex, doloremque ullam aspernatur ut exercitationem quidem vel </p>
                                            </div>
                                            <div class="trash text-center">
                                                <button class="btn"><i class="fas fa-trash-alt"></i></button>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-3">

                                        <div class='main_notes m-2 p-3'>
                                            <div>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores asperiores repellat necessitatibus perferendis neque non, culpa debitis eos voluptatibus voluptas! Provident dolorem ex, doloremque ullam aspernatur ut exercitationem quidem vel </p>
                                            </div>
                                            <div class="trash text-center">
                                                <button class="btn"><i class="fas fa-trash-alt"></i></button>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-3">

                                        <div class='main_notes m-2 p-3'>
                                            <div>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores asperiores repellat necessitatibus perferendis neque non, culpa debitis eos voluptatibus voluptas! Provident dolorem ex, doloremque ullam aspernatur ut exercitationem quidem vel </p>
                                            </div>
                                            <div class="trash text-center">
                                                <button class="btn"><i class="fas fa-trash-alt"></i></button>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-3">

                                        <div class='main_notes m-2 p-3'>
                                            <div>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores asperiores repellat necessitatibus perferendis neque non, culpa debitis eos voluptatibus voluptas! Provident dolorem ex, doloremque ullam aspernatur ut exercitationem quidem vel </p>
                                            </div>
                                            <div class="trash text-center">
                                                <button class="btn"><i class="fas fa-trash-alt"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class='main_notes m-2 p-3'>
                                            <row class="col-12">
                                                <!-- Button trigger modal -->
                                                <button type="button add_notes_button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    <img src="icons/plus.svg" class="img-plus">
                                                </button>
                                            </row>
                                            <row class="col-12">
                                                <div class="trash text-center">
                                                    <button class="btn"><i class="fas fa-trash-alt"></i></button>
                                                </div>
                                            </row>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Notes 2
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="row">
                                    <div class="col-md-3">

                                        <div class='main_notes m-2 p-3'>
                                            <div>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores asperiores repellat necessitatibus perferendis neque non, culpa debitis eos voluptatibus voluptas! Provident dolorem ex, doloremque ullam aspernatur ut exercitationem quidem vel </p>
                                            </div>
                                            <div class="trash text-center">
                                                <button class="btn"><i class="fas fa-trash-alt"></i></button>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-3">

                                        <div class='main_notes m-2 p-3'>
                                            <div>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores asperiores repellat necessitatibus perferendis neque non, culpa debitis eos voluptatibus voluptas! Provident dolorem ex, doloremque ullam aspernatur ut exercitationem quidem vel </p>
                                            </div>
                                            <div class="trash text-center">
                                                <button class="btn"><i class="fas fa-trash-alt"></i></button>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-md-3">

                                        <div class='main_notes m-2 p-3'>
                                            <div>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores asperiores repellat necessitatibus perferendis neque non, culpa debitis eos voluptatibus voluptas! Provident dolorem ex, doloremque ullam aspernatur ut exercitationem quidem vel </p>
                                            </div>
                                            <div class="trash text-center">
                                                <button class="btn"><i class="fas fa-trash-alt"></i></button>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-3">

                                        <div class='main_notes m-2 p-3'>
                                            <div>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores asperiores repellat necessitatibus perferendis neque non, culpa debitis eos voluptatibus voluptas! Provident dolorem ex, doloremque ullam aspernatur ut exercitationem quidem vel </p>
                                            </div>
                                            <div class="trash text-center">
                                                <button class="btn"><i class="fas fa-trash-alt"></i></button>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-3">

                                        <div class='main_notes m-2 p-3'>
                                            <div>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores asperiores repellat necessitatibus perferendis neque non, culpa debitis eos voluptatibus voluptas! Provident dolorem ex, doloremque ullam aspernatur ut exercitationem quidem vel </p>
                                            </div>
                                            <div class="trash text-center">
                                                <button class="btn"><i class="fas fa-trash-alt"></i></button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3">



                                        <div class='main_notes m-2 p-3'>
                                            <row class="col-12">
                                                <!-- Button trigger modal -->
                                                <button type="button add_notes_button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    <img src="icons/plus.svg" class="img-plus">
                                                </button>
                                            </row>
                                            <row class="col-12">
                                                <div class="trash text-center">
                                                    <button class="btn"><i class="fas fa-trash-alt"></i></button>
                                                </div>
                                            </row>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Notes 3
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="row">
                                    <div class="col-md-3">

                                        <div class='main_notes m-2 p-3'>
                                            <div>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores asperiores repellat necessitatibus perferendis neque non, culpa debitis eos voluptatibus voluptas! Provident dolorem ex, doloremque ullam aspernatur ut exercitationem quidem vel </p>
                                            </div>
                                            <div class="trash text-center">
                                                <button class="btn"><i class="fas fa-trash-alt"></i></button>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-3">

                                        <div class='main_notes m-2 p-3'>
                                            <div>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores asperiores repellat necessitatibus perferendis neque non, culpa debitis eos voluptatibus voluptas! Provident dolorem ex, doloremque ullam aspernatur ut exercitationem quidem vel </p>
                                            </div>
                                            <div class="trash text-center">
                                                <button class="btn"><i class="fas fa-trash-alt"></i></button>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-md-3">

                                        <div class='main_notes m-2 p-3'>
                                            <div>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores asperiores repellat necessitatibus perferendis neque non, culpa debitis eos voluptatibus voluptas! Provident dolorem ex, doloremque ullam aspernatur ut exercitationem quidem vel </p>
                                            </div>
                                            <div class="trash text-center">
                                                <button class="btn"><i class="fas fa-trash-alt"></i></button>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-3">

                                        <div class='main_notes m-2 p-3'>
                                            <div>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores asperiores repellat necessitatibus perferendis neque non, culpa debitis eos voluptatibus voluptas! Provident dolorem ex, doloremque ullam aspernatur ut exercitationem quidem vel </p>
                                            </div>
                                            <div class="trash text-center">
                                                <button class="btn"><i class="fas fa-trash-alt"></i></button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3">



                                        <div class='main_notes m-2 p-3'>
                                            <row class="col-12">
                                                <!-- Button trigger modal -->
                                                <button type="button add_notes_button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    <img src="icons/plus.svg" class="img-plus">
                                                </button>
                                            </row>
                                            <row class="col-12">
                                                <div class="trash text-center">
                                                    <button class="btn"><i class="fas fa-trash-alt"></i></button>
                                                </div>
                                            </row>
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