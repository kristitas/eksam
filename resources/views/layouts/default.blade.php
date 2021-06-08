<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>PÄRNU BURGER</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@100;400;800&family=Hind:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/app.css">
    <script src="https://kit.fontawesome.com/e2cf86d34e.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</head>
<body>
<section id="title">
    <div class="container-fluid">

        <nav class="navbar navbar-expand-lg navbar-dark">
            <a class="navbar-brand" href="#">
                <img src="images/logovalgega.png" width="230" height="90" class="d-inline-block" alt="logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#features">Meist</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#pricing">Menüü</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#footer">Kontakt</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="signin.html"><i class="far fa-user"></i> Sisene</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-globe"></i> EST
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">ENG</a>
                            <a class="dropdown-item" href="#">RUS</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.html#pricing"><i class="fas fa-shopping-cart"></i></a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</section>
<header>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
            <!-- Slide One - Set the background image for this slide in the line below -->
            <div class="carousel-item active">
                <img src="images/banner1.jpg" class="img-fluid" alt="Responsive image">
                <div class="carousel-caption">
                    <h3 class="banner-text display-4 d-none d-lg-block">Kõik pihvid, kastmed, majoneesid ja ketšupid valmistame värskest toorainest kohapeal ise!</h3>
                    <a class="hero-button btn btn-outline-light" type="button" href="#pricing">Menüü</a>
                </div>
            </div>
            <!-- Slide Two - Set the background image for this slide in the line below -->
            <div class="carousel-item">
                <img src="images/banner2.jpg" class="img-fluid" alt="Responsive image">
                <div class="carousel-caption">
                    <h3 class="banner-text display-4 d-none d-lg-block">Nüüd klassikaline juustuburger menüüs tagasi.</h3>
                    <a class="hero-button btn btn-outline-light" type="button" href="product.html">OSTA</a>
                </div>
            </div>
            <!-- Slide Three - Set the background image for this slide in the line below -->
            <div class="carousel-item">
                <img src="images/banner3.jpg" class="img-fluid" alt="Responsive image">
                <div class="carousel-caption">
                    <h3 class="banner-text display-4 d-none d-lg-block">Ostes kaks burgerit, saab friikad peale kauba.</h3>
                    <a class="hero-button btn btn-outline-light" type="button" href="product.html">OSTA</a>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</header>

<footer class="text-center text-lg-start">
    <section id="footer">
        <div class="container text-center text-md-start mt-5">
            <div class="row mt-3">
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                    <h6 class="text-uppercase fw-bold mb-4">
                        <img src="images/logovalgega.png" width="140" height="55" class="d-inline-block" alt="logo">
                    </h6>
                    <p class="footer-text">
                        Oleme avatud: <br> E-R 11.00 - 20.00 <br> L 12.00 - 23.00 <br> P Suletud
                    </p>
                </div>
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                    <p class="footer-text">
                        <a href="#features" class="text-reset">Meist</a>
                    </p>
                    <p class="footer-text">
                        <a href="#pricing" class="text-reset">Menüü</a>
                    </p>
                    <p class="footer-text">
                        <a href="#cta" class="text-reset">Laadi alla</a>
                    </p>
                    <p class="footer-text">
                        <a href="#!" class="text-reset">Sisene</a>
                    </p>
                </div>
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                    <p class="footer-text"><i class="fas fa-home me-3"></i> Supeluse tn 1, Pärnu linn, Pärnu linn, 80014</p>
                    <p class="footer-text">
                        <i class="fas fa-envelope me-3"></i>
                        pburger@gmail.com
                    </p>
                    <p class="footer-text"><i class="fas fa-phone me-3"></i> + 372 567 88</p>
                    <a href="" class="me-4 text-reset">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="" class="me-4 text-reset">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="" class="me-4 text-reset">
                        <i class="fab fa-tripadvisor"></i>
                    </a>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <div class="text-center p-4">
        © 2021 Copyright: Pärnu Burger
    </div>
</footer>
<script src="/js/app.js"></script>
</body>
</html>


