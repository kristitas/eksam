<!DOCTYPE html>
<html lang="en" dir="ltr">
<style>
body {
background: #9abca7;
font-family: 'Archivo';
}

h3 {
font-family: 'Archivo';
color: #272838;
font-weight: bold;
}

h5 {
font-family: 'Archivo';
color: #272838;
}

p {
color: #272838;
}

#title {
background-color: #9abca7;
}

.container-fluid {
padding: 3% 5% 2%;
}

.product-card {
padding: 6% 5% 2%;
background-color: #fff;
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
padding: 0 18px;
}

.nav-link {
font-size: 1.2rem;
font-family: 'Archivo';
color: #fff !important;
}

.dropdown-menu {
font-size: 1.2rem;
font-family: 'Archivo';
background-color: #9abca7
}

.dropdown-item {
font-family: 'Archivo';
color: #fff;
}

.card-info {
padding: 0 3%;
}

footer {
padding: 4px 4px;
text-align: center;
background-color: #f5b841;
color: #fff;
}

.footer-text {
color: #fff;
}

.fa-star {
margin-bottom: 20px;
align-items: center;
}

.btn {
border: 3px solid #f5b841;
background-color: #fff;
color: #272838;
font-family: 'Archivo';
font-weight: bold;
height: 50px;
}

#press {
background-color: #9abca7;
text-align: center;
padding: 3%;
}

.newsletter {
font-family: 'Archivo';
padding: 50px 0;
background: #9abca7;
}

.newsletter .content {
max-width: 500px;
margin: 0 auto;
text-align: center;
position: relative;
z-index: 2;
}

.newsletter .content h3 {
color: #272838;
margin-bottom: 40px;
}

.newsletter .content .form-control {
height: 50px;
border-color: #fff;
border-radius: 0;
}

.sub-btn {
width: 50px;
min-height: 50px;
border-radius: 0;
background: #272838;
color: #fff;
font-weight: blod;
}
</style>
<head>
    <meta charset="utf-8">
    <title>PÄRNU BURGER</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@100;400;800&family=Hind:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="css/product.css">
    <script src="https://kit.fontawesome.com/e2cf86d34e.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script>
        $(".counter").bind('mouseup', function() {
            if ($(this).data('old-value') === undefined) {
                $(this).data('old-value', 0);
            }
            if ($(this).val() == undefined || $(this).val() == "")
                return;
            var newVal = parseInt($(this).val());
            var oldVal = parseInt($(this).data('old-value'));
            if (oldVal < newVal) {
                alert('incrementing');
            } else {
                alert('decrementing');
            }
            $(this).data('old-value', $(this).val());
        });
    </script>
</head>
<body>
<section id="title">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <a class="navbar-brand" href="#">
                <img src="images/logovalgega.png" width="280" height="110" class="d-inline-block" alt="logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Avaleht</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.html#pricing">Menüü</a>
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
<section>
    <div class="product-card container-fluid">
        <section class="mb-5">
            <div class="row">
                <div class="col-md-6 mb-4 mb-md-0">
                    <div class="col-12 mb-0">
                        <img src="images/juustu.jpg" class="img-fluid">
                    </div>
                </div>
                <div class="card-info col-md-6">
                    <h3>Topelt juustuburger</h3>
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
                    <br>
                    <p><span class="mr-1"><strong>7,90 €</strong></span></p>
                    <p class="pt-1">Meie topelt veiseburger koosneb kahest leegil grillitud 100% veisepihvist, mida täiendavad isukas portsion suitsupeekonit, sulanud juust, ketšup ja kreemjas majonees pehmel seesamiseemnekuklil.</p>
                    <div class="table-responsive">
                    </div>
                    <hr>
                    <div class="table-responsive mb-2">
                        <table class="table table-sm table-borderless">
                            <tbody>
                            <tr>
                                <td class="pl-0 pb-0 w-25">Kogus</td>
                                <td class="pb-0">Vali eine suurus</td>
                            </tr>
                            <tr>
                                <td class="pl-0">
                                    <input class="counter" type="number" />
                                </td>
                                <td>
                                    <div class="mt-1">
                                        <div class="form-check form-check-inline pl-0">
                                            <input type="radio" class="form-check-input" id="small" name="materialExampleRadios" checked>
                                            <label class="form-check-label small text-uppercase card-link-secondary" for="small">Väike</label>
                                        </div>
                                        <div class="form-check form-check-inline pl-0">
                                            <input type="radio" class="form-check-input" id="medium" name="materialExampleRadios">
                                            <label class="form-check-label small text-uppercase card-link-secondary" for="medium">Keskmine</label>
                                        </div>
                                        <div class="form-check form-check-inline pl-0">
                                            <input type="radio" class="form-check-input" id="large" name="materialExampleRadios">
                                            <label class="form-check-label small text-uppercase card-link-secondary" for="large">Suur</label>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <button type="button" class="btn btn-light btn-md mr-1 mb-2" style="background-color: #f5b841;">MAKSMA</button>
                    <button type="button" class="btn btn-light btn-md mr-1 mb-2"><i class="fas fa-shopping-cart pr-2"></i>Lisa ostukorvi</button>
                </div>
            </div>
        </section>
    </div>
    <section class="newsletter">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="content">
                        <h5>LIITU MEIE UUDISKIRJAGA</h5>
                        <div class="input-group">
                            <input type="email" class="form-control" placeholder="Sisesta oma e-posti aadress">
                            <span class="input-group-btn">
                  <button class="sub-btn" type="submit"><i class="fas fa-arrow-right"></i></button>
                </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>
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
                        <a href="index.html#features" class="text-reset">Meist</a>
                    </p>
                    <p class="footer-text">
                        <a href="index.html#pricing" class="text-reset">Menüü</a>
                    </p>
                    <p class="footer-text">
                        <a href="index.html#cta" class="text-reset">Laadi alla</a>
                    </p>
                    <p class="footer-text">
                        <a href="signin.html" class="text-reset">Sisene</a>
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
</body>
</html>

