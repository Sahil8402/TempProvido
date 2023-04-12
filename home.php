<?php
session_start();
if(isset($_SESSION["username"])){

?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,400&family=Poppins:wght@600&display=swap" rel="stylesheet">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/fontawesome-all.min.css" rel="stylesheet">
        <link href="css/styles.css" rel="stylesheet">
        <link rel="icon" href="images/tp.png">
        <title>TempProvido</title>
    </head>

    <body>

        <nav id="navbar" class="navbar navbar-expand-lg fixed-top navbar-dark" aria-label="Main navigation">
            <div class="container">
                <a class="navbar-brand logo-image" href="home.html"><img src="images/tp.png" style="height:50px;width:50px;" alt="alternative"><span style="color:aqua;text-decoration:none;"> Temp</span><span style="color: rgb(66, 241, 66)">Provido</span></a>


                <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

                <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
                    <ul class="navbar-nav ms-auto navbar-nav-scroll">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#header">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Templates.html">Templates</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="contact us.html">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="account.php" >account</a>
                        </li>
                    </ul>
                    <span class="nav-item social-icons">
                    <span class="fa-stack">
                        <a href="https://www.facebook.com">
                            <i class="fas fa-circle fa-stack-2x"></i>
                            <i class="fab fa-facebook-f fa-stack-1x"></i>
                        </a>
                    </span>
                    <span class="fa-stack">
                        <a href="https://www.instagram.com/sahil___842/">
                            <i class="fas fa-circle fa-stack-2x"></i>
                            <i class="fab fa-instagram fa-stack-1x"></i>
                        </a>
                    </span>
                    <span class="fa-stack">
                        <a href="https://github.com/Sahil8402/Sahil_profile/settings/pages">
                            <i class="fas fa-circle fa-stack-2x"></i>
                            <i class="fab fa-github fa-stack-1x"></i>
                        </a>
                    </span>
                    </span>
                </div>

            </div>

        </nav>

        <header id="header" class="header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h1 class="h1-large">Try!<br> DESIGN!<br>Take!</h1>
                    </div>
                    <div class="col-lg-6">
                        <div class="button-container">
                            <a class="btn-solid-lg page-scroll" href="Quiez JS/index.html">Try Your Skills </a>
                            <a class="btn-outline-lg page-scroll" href="#work">Our Works</a>
                        </div>

                    </div>

                </div>

            </div>

        </header>


        <div class="py-5 bg-gray" id="about">
            <h1 class="text-center">About <span style="color:aqua;text-decoration:none;"> Temp</span><span style="color: rgb(66, 241, 66)">Provido</span></h1>
            <br>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-xl-7">
                        <div class="image-container">
                            <img class="img-fluid" src="images/article-details-large.jpg" alt="alternative">
                        </div>

                    </div>

                    <div class="col-lg-6 col-xl-5">
                        <div class="text-container">
                            <h2>We help to provide free template and make work easy!!</h2>
                            <p>Here All templates are free so any student or non techical people can take template and use it.Here all templates contain Html,css,javascript,also there is a portal for testing your skills.</p>
                            <a class="btn-solid-reg" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Modal</a>
                        </div>

                    </div>

                </div>

            </div>

        </div>




        <div id="staticBackdrop" class="modal fade" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="row">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        <div class="col-lg-8">
                            <div class="image-container">
                                <img class="img-fluid" src="images/bb2.jpg" alt="alternative">
                            </div>

                        </div>

                        <div class="col-lg-4">
                            <h3>Goals Setting</h3>
                            <hr>
                            <p>Our Goal is to give free website so they can do work easily.</p>
                            <h4>User Feedback</h4>
                            <p>This is a great app which can help you save time and make your website easier.</p>
                            <ul class="list-unstyled li-space-lg">
                                <li class="d-flex">
                                    <i class="fas fa-chevron-right"></i>
                                    <div class="flex-grow-1">Respionsive Website</div>
                                </li>
                                <li class="d-flex">
                                    <i class="fas fa-chevron-right"></i>
                                    <div class="flex-grow-1">Static website</div>
                                </li>
                                <li class="d-flex">
                                    <i class="fas fa-chevron-right"></i>
                                    <div class="flex-grow-1">Interactive Website</div>
                                </li>
                                <li class="d-flex">
                                    <i class="fas fa-chevron-right"></i>
                                    <div class="flex-grow-1">Free Source Code</div>
                                </li>

                            </ul>

                            <button type="button" class="btn-outline-reg" data-bs-dismiss="modal">Close</button>
                        </div>

                    </div>

                </div>

            </div>

        </div>

        <div class="basic-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="h2-heading">Our Moto</h2>
                        <hr class="hr-heading">
                    </div>

                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="step-container">
                            <div class="step">Try</div>
                            <i class="fas fa-chevron-right"></i>
                            <div class="step">DESIGN</div>
                            <i class="fas fa-chevron-right"></i>
                            <div class="step">Take</div>
                        </div>

                    </div>

                </div>

            </div>

        </div>

        <div class="cards-2 bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="h2-heading">Few Demo Projects</h2>
                        <br>
                    </div>

                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-image">
                                <img class="img-fluid" src="1.jpg" style="height:300px;width:500px;" alt="alternative">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Alumini Website</h5>
                                <button type="button" class="btn btn-success" onclick="window.location.href = 'https://sahil8402.github.io/Alumni/';"><img src="images/images.png" style="border-radius:50%" height="15px" width="15px"> Preview</button>
                                <a href="zip file/Alumni Management System.zip" download>
                                    <button type="button" class="btn btn-success"><img src="https://cdn.onlinewebfonts.com/svg/img_71049.png" height="15px" width="15px"> Download</button></a>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-image">
                                <img class="img-fluid" src="3.jpg" style="height:300px;width:500px;" alt="alternative">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Ecoomerce Earphones Website</h5>
                                <button type="button" class="btn btn-success" onclick="window.location.href = 'https://sahil8402.github.io/Earboat/';"><img src="images/images.png" style="border-radius:50%" height="15px" width="15px"> Preview</button>
                                <a href="zip file/Ear-Bot.zip" download>
                                    <button type="button" class="btn btn-success"><img src="https://cdn.onlinewebfonts.com/svg/img_71049.png" height="15px" width="15px"> Download</button></a>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-image">
                                <img class="img-fluid" src="5.jpg" style="height:300px;width:500px;" alt="alternative">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">E-Learn Website</h5>
                                <button type="button" class="btn btn-success" onclick="window.location.href = 'https://sahil8402.github.io/E-Learn/';"><img src="images/images.png" style="border-radius:50%" height="15px" width="15px"> Preview</button>
                                <a href="zip file/E-Learn.zip" download>
                                    <button type="button" class="btn btn-success"><img src="https://cdn.onlinewebfonts.com/svg/img_71049.png" height="15px" width="15px"> Download</button></a>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-image">
                                <img class="img-fluid" src="4.jpg" style="height:300px;width:500px;" alt="alternative">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">TutorPoint</h5>
                                <button type="button" class="btn btn-success" onclick="window.location.href = 'https://sahil8402.github.io/tutorpoint1/';"><img src="images/images.png" style="border-radius:50%" height="15px" width="15px"> Preview</button>
                                <a href="zip file/TutorPoint.zip" download>
                                    <button type="button" class="btn btn-success"><img src="https://cdn.onlinewebfonts.com/svg/img_71049.png" height="15px" width="15px"> Download</button></a>
                            </div>
                        </div>


                    </div>

                </div>

            </div>

        </div>

        <div id="work" class="counter">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="h2-heading">Our Works</h2>
                        <hr class="hr-heading">
                    </div>

                </div>

                <div class="row">

                    <div class="col-l-12">
                        <div class="counter-container">
                            <div class="counter-cell">
                                <div data-purecounter-start="0" data-purecounter-end="50" data-purecounter-duration="3" class="purecounter">50</div>
                                <div class="counter-info">Happy Customers</div>
                            </div>

                            <div class="counter-cell">
                                <div data-purecounter-start="0" data-purecounter-end="35" data-purecounter-duration="1.5" class="purecounter">1</div>
                                <div class="counter-info">Total Templates</div>
                            </div>

                            <div class="counter-cell">
                                <div data-purecounter-start="0" data-purecounter-end="100" data-purecounter-duration="3" class="purecounter">1</div>
                                <div class="counter-info">Good Reviews</div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

        <footer class="bg-dark text-white text-center" id="footer">
            <p class="f1 text-white">Copyright ©
                <a href="index.html" style="color:white;text-decoration:none;"><span style="color:aqua;text-decoration:none;"> Temp</span><span style="color: rgb(66, 241, 66)">Provido</span></a> </p>
        </footer>

        <script src="js/bootstrap.min.js"></script>
        <script src="js/purecounter.min.js"></script>

        <script src="js/scripts.js"></script>

    </body>

    </html>
<?php }
?>