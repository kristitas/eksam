
<!DOCTYPE html>
<html>
<style>
    body {
        font-family: 'Archivo';
        background-color: #f3f3f3;
    }

    h1 {
        font-family: 'Archivo';
        font-weight: bold;
        font-size: 3.5rem;
        line-height: 1.5;
        font-weight: 900;
        color: #FFF;
    }

    h2 {
        font-family: 'Archivo';
        font-weight: bold;
        font-size: 3rem;
        line-height: 1.5;
        color: #9abca7;
        text-align: center;
    }

    h3 {
        font-family: 'Archivo';
        color: #272838;
        font-weight: bold;
        text-align: center;
    }
    h5 {
        font-family: 'Archivo';
        color: #272838;
    }
    p {
        font-family: 'Archivo';
        font-weight: thin;
        color: #272838;
        text-align: center;
        font-size: 18px;
    }

    hr {
        border: dotted #272838 6px;
        border-bottom: none;
        width: 7%;
        margin: 20px auto;
    }

    #title {
        background-color: #9abca7;
    }

    #features {
        padding: 7% 5%;
        padding-bottom: 1%;
        background-color: #f3f3f3;
        position: relative;
        z-index: 1;
    }

    .container-fluid {
        padding: 3% 5% 2%;
    }

    .navbar {
        padding: 0 3%;
    }

    .navbar-brand {
        font-family: 'Archivo';
        font-size: 2.5rem;
        font-weight: bold;
    }

    .nav-item {
        padding: 0 7px;
    }

    .nav-link {
        font-size: 1.2rem;
        font-family: 'Archivo';
        color: #fff !important;
    }

    .dropdown-menu {
        font-size: 1.2rem;
        font-family: 'Archivo';
        background-color: #9abca7;
    }

    .dropdown-item {
        font-family: 'Archivo';
        color: #fff;
    }

    .title-image {
        width: 99%;
        right: 30px;
        margin: 10% 3% 0 3%;

    }
    .download-button {
        margin: 10% 3% 9% 0;
    }

    .feature-box {
        text-align: center;
        padding: 2%;
    }

    .icon {
        color: #f5b841;
        margin-bottom: 1rem;
    }

    .icon:hover {
        color: #9abca7;
    }
    .hero-button {
        border: 3px solid #fff;
        color: #fff;
        font-family: 'Archivo';
        font-weight: bold;
        width: 25%;
        height: 45px;
    }
    .banner-text {
        font-family: 'Archivo';
        font-weight: bold;
        color: #fff;
    }
    .carousel-caption {
        margin-bottom: 50px;
    }
    @media only screen and (min-width : 1200px) {
        .banner-text
        {
            top: 46%;
        }
    }
    #press {
        background-color: #f5b841;
        text-align: center;
        padding: 3%;
    }

    .press-logo {
        width: 10%;
        margin: 2px 2px 2px;
    }

    #pricing {
        padding: 70px;
        text-align: center;
        color: #9abca7;
        font-family: 'Archivo';
    }

    .pricing-column {
        padding: 2% 1%;
    }

    #cta {
        background-color: #9abca7;
        color: #fff;
        padding: 3% ;
        text-align: center;
    }

    footer {
        padding: 4px 4px;
        text-align: center;
        background-color: #f5b841;
        color: #fff;
    }



    @media (max-width: 1028px) {
        #title {
            text-align: center;
        }
    }

    .row {
        padding: 0 3%;
        margin-bottom: 1%;
    }

    .text-reset {
        margin: 10px 10px 25px;
    }
    .footer-text {
        color: #fff;
    }
    .details {
        border: 2px solid #f5b841;
        font-family: 'Archivo';
        font-weight: bold;
        color: #272838;
        width: 100%;
        height: auto;

    }

    .cart {

        background-color: #f5b841;
        color: #31393c;
        font-family: 'Archivo';
        font-weight: bold;
        margin-top: 10px;
        font-size: 15px;
        font-weight: 900;
        width: 100%;
        height: 39px;
        padding-top: 9px;
    }


    .card-body {
        width: 90%;
    }

    .btn {
        border-radius: 0;

    }

    .img-thumbnail {
        border: none;
    }

    .card {
        width: 100%;
        box-shadow: 0 20px 40px rgba(0, 0, 0, .2);
        border-radius: 5px;
        padding-bottom: 10px;
    }
    .cta-image {

        margin: 3% 3% 0 3%;
    }
    .cta-text {
        margin-top: 130px;
        padding-left: 10px;
    }
    .gluten-logo {
        margin-left: 5px;

    }
    .media {

    }

</style>
<head>
    <meta charset="utf-8">
    <title>NEHATU BURGER</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@100;400;800&family=Hind:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}" >
    <script src="https://kit.fontawesome.com/e2cf86d34e.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</head>
<body>
<section id="title" style="background-color:#9abca7">
    <div class="container-fluid">

        <nav class="navbar navbar-expand-lg navbar-dark">
            <a class="navbar-brand" href="#">
                <img src="images/nehatu_logo_valgega.png" width="230" height="90" class="d-inline-block" alt="logo"></a>
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
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-globe"></i> EST
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">ENG</a>
                            <a class="dropdown-item" href="#">RUS</a>
                        </div>
                    </li>
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Logi sisse') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Registreeri') }}</a>
                            </li>
                        @endif
                    @else

                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('profile') }}">
                                    {{ __('Profiil') }}
                                </a>

                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logi välja') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
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
                    <a class="hero-button btn btn-outline-light" type="button" href="detail">Menüü</a>
                </div>
            </div>
            <!-- Slide Two - Set the background image for this slide in the line below -->
            <div class="carousel-item">
                <img src="images/banner2.jpg" class="img-fluid" alt="Responsive image">
                <div class="carousel-caption">
                    <h3 class="banner-text display-4 d-none d-lg-block">Nüüd klassikaline juustuburger menüüs tagasi.</h3>
                    <a class="hero-button btn btn-outline-light" type="button" href="detail">OSTA</a>
                </div>
            </div>
            <!-- Slide Three - Set the background image for this slide in the line below -->
            <div class="carousel-item">
                <img src="images/banner3.jpg" class="img-fluid" alt="Responsive image">
                <div class="carousel-caption">
                    <h3 class="banner-text display-4 d-none d-lg-block">Ostes kaks burgerit, saab friikad peale kauba.</h3>
                    <a class="hero-button btn btn-outline-light" type="button" href="detail">OSTA</a>
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
<section id="features">
    <div class="row">
        <div class="col-lg-8">
            <h2>Meist</h2>
            <p>Kõik meie burgerid on tehtud kohalikust toorainest ning kasutatud originaalretseptiga kastmeid.</p>
            <div class="row">
                <div class="feature-box col-lg-4">
                    <i class="icon fas fa-seedling fa-3x"></i>
                    <h3>Alati <br>värske</h3>
                    <p>Oleme võtnud oma südameasjaks kasutada ainult värskeid tooraineid.</p>
                </div>
                <div class="feature-box col-lg-4">
                    <i class="icon fas fa-bullseye fa-3x"></i>
                    <h3>Kohapeal <br>valmistatud</h3>
                    <p>Kõik meie burgerid on valmistatud parimate tänavagurmee meistrite poolt.</p>
                </div>
                <div class="feature-box col-lg-4">
                    <i class="icon fas fa-trailer fa-3x"></i>
                    <h3>Jõuab <br>kõikjale</h3>
                    <p>Meie ratastel foodtruck pakub meie maitsvaid burgereid üle kogu Eesti.</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <img class="title-image" src="images/aboutburger.png" alt="title-image">
        </div>
    </div>
</section>
<section id="press">
    <img class="press-logo" src="images/White_Guide.png" alt="white-guide-logo">
    <img class="press-logo" src="images/eesti-toit.png" alt="eesti-toit-logo">
    <img class="press-logo" src="images/tripadvisor.png" alt="tripadvisor-logo">
    <img class="press-logo" src="images/grilliliit.svg" alt="grilliliit-logo">
</section>
<section id="pricing">
    <h2>Menüü</h2>
    <p>Kõik meie burgerid on tehtud kohalikust toorainest ning kasutatud originaalretseptiga kastmeid.</p>
    <div class="row">
        @foreach($burgers as $burger)
            <div class="pricing-column col-lg-4 col-md-6">
                <div class="card"> <img class='mx-auto img-thumbnail' src="images/juustu.jpg" width="auto" height="auto" />
                    <div class="card-body text-center mx-auto">
                        <div class='cvp'>
                            <h5 class="card-title font-weight-bold">{{$burger->name}}</h5>
                            <p class="card-text">{{$burger->price}} €</p> <a href="detail" class="btn details px-auto btn-light">ROHKEM TEAVET</a><br /> <a href="detail" class="btn cart px-auto btn-light">OSTA</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>
<section id="cta">
    <div class="row">
        <div class="col-lg-6">
            <img class="img-fluid cta-image" src="images/cta_photo.jpg" alt="eatingburger">
        </div>
        <div class="cta-text col-lg-6">
            <h3>Laadi alla Nehatu Burger app, kust leiad meie kõige paremad pakkumised.</h3>
            <a class="download-button btn btn-lg btn-dark" href="https://www.apple.com/app-store/" type="button"><i class="fab fa-apple"></i> App Store</a>
            <a class="download-button btn btn-lg btn-outline-dark" href="https://play.google.com/store" type="button"><i class="fab fa-google-play"></i> Google Play</a>
        </div>
    </div>
</section>
<footer class="text-center text-lg-start">
    <section id="footer">
        <div class="container text-center text-md-start mt-5">
            <div class="row mt-3">
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                    <h6 class="text-uppercase fw-bold mb-4">
                        <img src="images/nehatu_logo_valgega.png" width="140" height="48" class="d-inline-block" alt="logo">
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
                </div>
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                    <p class="footer-text"><i class="fas fa-home me-3"></i> Kopli tn 1, Tallinn, 10412</p>
                    <p class="footer-text">
                        <i class="fas fa-envelope me-3"></i>
                        nehatu@gmail.com
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
        © 2021 Copyright: Nehatu Burger
    </div>
</footer>
</body>

</html>


