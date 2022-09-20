<?php
session_start();
include('code/config/fonctions.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Pascal Vanmalderen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./code/style.css">
    <link rel="stylesheet" href="./code/responsive.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" integrity="sha512-aOG0c6nPNzGk+5zjwyJaoRUgCdOrfSDhmMID2u4+OIslr0GjpLKo7Xm0Ao3xmpM4T8AmIouRkqwj1nrdVsLKEQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="./code/javascript.js"></script>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg portfolio-navbar portfolio-padding-left portfolio-padding-right">
        <div class="container-fluid">
            <div class="portfolio-row">
                <section class="left d-flex align-items-center">
                    <a class="navbar-brand" href="#">
                        <img src="./contains/image/TestLogo.png" alt="">
                    </a>
                    <!-- Dropdown -->
                    <div class="portfolio-dropdown-box dropdown">
                        <button class="portfolio-dropdown dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            Browse
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <!-- <li><a class="dropdown-item" href="#">Histoire</a></li> -->
                            <li><a class="dropdown-item" href="#slider-box">Projet</a></li>
                            <li><a class="dropdown-item" href="#footer">Contact</a></li>
                        </ul>
                    </div>
                    <!-- Tableau -->
                    <div class="portfolio-nav">
                        <section>
                            <!-- <button>Histoire</button> -->
                            <button> <a href="#slider-box" class="boutton text-decoration-none text-white">Projet</a></button>
                            <button> <a href="#footer" class="boutton text-decoration-none text-white">Contact</a></button>
                        </section>
                    </div>
                </section>
                <section class="right d-flex align-items-center">
                    <i class="bi bi-search"></i>
                    <i class="bi bi-bell-fill"></i>
                    <div class="portfolio-profile"></div>
                </section>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Projet -->
    <div class="trailer">
        <section class="portfolio-home-video">
            <div class="top"></div>
            <div class="bottom"></div>
            <video autoplay playsinline muted loop>
                <source type="video/mp4" src="./contains/video/video2.mp4" />
            </video>
            <div class="content">
                <section class="left">
                    <div class="box">
                        <p>Pascal<br> Vanmalderen</p>
                    </div>
                    <div class="mt-2 d-flex">
                        <button type="button" class="btn btn-dark m-2"><i class="bi bi-play-fill" style="color: #000; padding:0px;"></i><a href="#slider-box" class="boutton text-decoration-none text-white">Mon univers</a></button>
                        <button type="button" class="btn btn-secondary m-2"><i class="bi bi-info-circle" style="color: #000; padding:5px;"></i>Plus d'informations</button>
                    </div>
                </section>
            </div>
        </section>
    </div>

    <!-- sliders -->
    <div id="slider-box" class="slider-box">
        <section class="home py-5">
            <div class="container-lg">
                <div class="row align-items-top align-content-top">
                    <section class="d-flex justify-content-between margin-right">
                        <h2 class="text-white"> <b>Mes projets</b> </h2>
                        <div class="">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active tab-change-btn" aria-current="true" aria-label="Slide 1"></button>
                            <button class="tab-change-btn" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button class="tab-change-btn" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                    </section>
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner" style="position: relative; overflow: visible;">
                            <div class="carousel-item active">
                                <section class="d-flex" style="">
                                    <div class="card">
                                        <img src="./contains/image/slide/attente.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <section class="d-flex justify-content-between">
                                                <div>
                                                    <boutton id="1"><i class="bi bi-play-circle-fill card-icon" id="1"></i></boutton>
                                                    <i class="bi bi-plus-circle card-icon"></i>
                                                </div>
                                                <div>
                                                    <i class="bi bi-arrow-down-circle card-icon"></i>
                                                </div>
                                            </section>
                                            <section class="d-flex align-items-center justify-content-between">
                                                <p class="portfolio-card-text m-0" style="color: rgb(0, 186, 0);">97% match</p>
                                                <span class="m-2 portfolio-card-text text-white">Limited Series</span> <span class="border portfolio-card-text p-1 text-white">HD</span>

                                            </section>
                                            <span class="portfolio-card-text text-white">Provocative • Psychological •
                                                Thriller</span>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <img src="./contains/image/image2.png" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <section class="d-flex justify-content-between">
                                                <div>
                                                    <boutton id="2"><i class="bi bi-play-circle-fill card-icon" id="2"></i></boutton>
                                                    <i class="bi bi-plus-circle card-icon"></i>
                                                </div>
                                                <div>
                                                    <i class="bi bi-arrow-down-circle card-icon"></i>
                                                </div>
                                            </section>
                                            <section class="d-flex align-items-center justify-content-between">
                                                <p class="portfolio-card-text m-0" style="color: rgb(0, 186, 0);">97% match</p>
                                                <span class="m-2 portfolio-card-text text-white">Limited Series</span> <span class="border portfolio-card-text p-1 text-white">HD</span>

                                            </section>
                                            <span class="portfolio-card-text text-white">Provocative • Psychological •
                                                Thriller</span>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <img src="./contains/image/image3.png" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <section class="d-flex justify-content-between">
                                                <div>
                                                    <boutton id="3"><i class="bi bi-play-circle-fill card-icon" id="3"></i></boutton> <i class="bi bi-plus-circle card-icon"></i>
                                                </div>
                                                <div>
                                                    <i class="bi bi-arrow-down-circle card-icon"></i>
                                                </div>
                                            </section>
                                            <section class="d-flex align-items-center justify-content-between">
                                                <p class="portfolio-card-text m-0" style="color: rgb(0, 186, 0);">97% match</p>
                                                <span class="m-2 portfolio-card-text text-white">Limited Series</span> <span class="border portfolio-card-text p-1 text-white">HD</span>

                                            </section>
                                            <span class="portfolio-card-text text-white">Provocative • Psychological •
                                                Thriller</span>
                                        </div>
                                    </div>
                                </section>
                            </div>
                            <div class="carousel-item">
                                <section class="d-flex">

                                    <div class="card">
                                        <img src="./contains/image/slide/attente.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <section class="d-flex justify-content-between">
                                                <div>
                                                    <boutton id="4"><i class="bi bi-play-circle-fill card-icon" id="4"></i></boutton>
                                                    <i class="bi bi-plus-circle card-icon"></i>
                                                </div>
                                                <div>
                                                    <i class="bi bi-arrow-down-circle card-icon"></i>
                                                </div>
                                            </section>
                                            <section class="d-flex align-items-center justify-content-between">
                                                <p class="portfolio-card-text m-0" style="color: rgb(0, 186, 0);">97% match</p>
                                                <span class="m-2 portfolio-card-text text-white">Limited Series</span> <span class="border portfolio-card-text p-1 text-white">HD</span>

                                            </section>
                                            <span class="portfolio-card-text text-white">Provocative • Psychological •
                                                Thriller</span>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <img src="./contains/image/slide/attente.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <section class="d-flex justify-content-between">
                                                <div>
                                                    <i class="bi bi-play-circle-fill card-icon" id="5"></i>
                                                    <i class="bi bi-plus-circle card-icon"></i>
                                                </div>
                                                <div>
                                                    <i class="bi bi-arrow-down-circle card-icon"></i>
                                                </div>
                                            </section>
                                            <section class="d-flex align-items-center justify-content-between">
                                                <p class="portfolio-card-text m-0" style="color: rgb(0, 186, 0);">97% match</p>
                                                <span class="m-2 portfolio-card-text text-white">Limited Series</span> <span class="border portfolio-card-text p-1 text-white">HD</span>

                                            </section>
                                            <span class="portfolio-card-text text-white">Provocative • Psychological •
                                                Thriller</span>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <img src="./contains/image/slide/attente.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <section class="d-flex justify-content-between">
                                                <div>
                                                    <i class="bi bi-play-circle-fill card-icon" id="6"></i>
                                                    <i class="bi bi-plus-circle card-icon"></i>
                                                </div>
                                                <div>
                                                    <i class="bi bi-arrow-down-circle card-icon"></i>
                                                </div>
                                            </section>
                                            <section class="d-flex align-items-center justify-content-between">
                                                <p class="portfolio-card-text m-0" style="color: rgb(0, 186, 0);">97% match</p>
                                                <span class="m-2 portfolio-card-text text-white">Limited Series</span> <span class="border portfolio-card-text p-1 text-white">HD</span>

                                            </section>
                                            <span class="portfolio-card-text text-white">Provocative • Psychological •
                                                Thriller</span>
                                        </div>
                                    </div>
                                </section>
                            </div>
                            <div class="carousel-item">
                                <section class="d-flex">
                                    <div class="card">
                                        <img src="./contains/image/slide/attente.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <section class="d-flex justify-content-between">
                                                <div>
                                                    <i class="bi bi-play-circle-fill card-icon"></i>
                                                    <i class="bi bi-plus-circle card-icon"></i>
                                                </div>
                                                <div>
                                                    <i class="bi bi-arrow-down-circle card-icon"></i>
                                                </div>
                                            </section>
                                            <section class="d-flex align-items-center justify-content-between">
                                                <p class="portfolio-card-text m-0" style="color: rgb(0, 186, 0);">97% match</p>
                                                <span class="m-2 portfolio-card-text text-white">Limited Series</span> <span class="border portfolio-card-text p-1 text-white">HD</span>

                                            </section>
                                            <span class="portfolio-card-text text-white">Provocative • Psychological •
                                                Thriller</span>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <img src="./contains/image/slide/attente.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <section class="d-flex justify-content-between">
                                                <div>
                                                    <i class="bi bi-play-circle-fill card-icon"></i>
                                                    <i class="bi bi-plus-circle card-icon"></i>
                                                </div>
                                                <div>
                                                    <i class="bi bi-arrow-down-circle card-icon"></i>
                                                </div>
                                            </section>
                                            <section class="d-flex align-items-center justify-content-between">
                                                <p class="portfolio-card-text m-0" style="color: rgb(0, 186, 0);">97% match</p>
                                                <span class="m-2 portfolio-card-text text-white">Limited Series</span> <span class="border portfolio-card-text p-1 text-white">HD</span>

                                            </section>
                                            <span class="portfolio-card-text text-white">Provocative • Psychological •
                                                Thriller</span>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <img src="./contains/image/slide/attente.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <section class="d-flex justify-content-between">
                                                <div>
                                                    <i class="bi bi-play-circle-fill card-icon"></i>
                                                    <i class="bi bi-plus-circle card-icon"></i>
                                                </div>
                                                <div>
                                                    <i class="bi bi-arrow-down-circle card-icon"></i>
                                                </div>
                                            </section>
                                            <section class="d-flex align-items-center justify-content-between">
                                                <p class="portfolio-card-text m-0" style="color: rgb(0, 186, 0);">97% match</p>
                                                <span class="m-2 portfolio-card-text text-white">Limited Series</span> <span class="border portfolio-card-text p-1 text-white">HD</span>

                                            </section>
                                            <span class="portfolio-card-text text-white">Provocative • Psychological •
                                                Thriller</span>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </section>
    </div>


    <script>
        $(document).ready(function() {
            $.ajax({
                url: './code/projet.php',
                type: 'POST',
                data: {
                    myFunction: 'afficherProjet',
                    myParams: {
                        idProjet: "2"
                    }
                },
                dataType: 'json',
                success: function(data) {
                    for (var d of data) {
                        $("#home-text").html("<h1 class='text-white'>" + d.nomProjet + "</h1>\
                        <p class='projet-card-text' style='color: rgb(0, 186, 0);'> Résultat scolaire " + d.rstScolaire + "</p>\
                        <p class='projet-card-lang' style='color: rgb(93, 89, 87);'> " + d.lgProg + "</p>\
                        <h6 class='description text-white'>" + d.descriptionProjet + "</h6>");
                        $("#imageProj").html("<img src='../contains/image/image" + d.idProjet + ".png' alt=''>");
                    }
                },
                error: function(data) {
                    $("#home-text").html("<h1> Error </h1>");
                }
            })
        })
        $(document).on('click', 'boutton', function() {
            $.ajax({
                url: './code/projet.php',
                type: 'POST',
                data: {
                    myFunction: 'afficherProjet',
                    myParams: {
                        idProjet: $(this).attr('id')
                    }
                },
                dataType: 'json',
                success: function(data) {
                    for (var d of data) {
                        $("#home-text").html("<h1 class= 'text-white'>" + d.nomProjet + "</h1>\
                        <p class='projet-card-text' style='color: rgb(0, 186, 0);'> Résultat scolaire " + d.rstScolaire + "</p>\
                        <p class='projet-card-lang' style='color: rgb(93, 89, 87);'> " + d.lgProg + "</p>\
                        <h6 class='description text-white'>" + d.descriptionProjet + "</h6>");
                        $("#imageProj").html("<img src='../contains/image/image" + d.idProjet + ".png' alt=''>");
                    }
                },
                error: function(data) {
                    $("#home-text").html("<h1> Error </h1>");
                }
            })
        })
    </script>

    <!-- Description projet (rendre native) -->
    <section class="home py-5">
        <div class="container-lg">
            <div class="row align-items-top align-content-top">
                <div class="col-md-5 order-md-first">
                    <div class="home-text" id="home-text">
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="home-img">
                        <div class="left"></div>
                        <imageProj class="imageProj" id="imageProj">
                            <!-- <img src="../contains/image/part1.png" alt=""> -->
                        </imageProj>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- Footer -->

    <!-- footer  -->
    <div class="container footer" id="footer">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="row">
                    <div class="col-md-3">
                        <ul>
                            <li>Ecole Info</li>
                            <li>Adresse:</li>
                            <li>Téléphone</li>
                            <li>Contact Us</li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <ul>
                            <li>Etudiant</li>
                            <li>Vanmalderen Pascal</li>
                            <li>20 ans</li>
                            <li>Belgique</li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <ul>
                            <li>Histoire</li>
                            <li>Projet</li>

                        </ul>
                    </div>
                    <div class="col-md-3">
                        <ul>
                            <li>Accueil</li>
                            <li>Contact</li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-10 mx-auto">
                <div class="row">
                    <div class="col">
                        <p class="copy-right">@Pascal Vanmalderen copyright</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
    <!-- Footer End -->

</body>

</html>