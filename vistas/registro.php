<!DOCTYPE html>
<html lang="en">

<head>

    <!-- SITE TITTLE -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Primer Coloquio</title>

    <!-- PLUGINS CSS STYLE -->
    <!-- Bootstrap -->
    <link href="assets/principal/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="assets/principal/plugins/font-awsome/css/font-awesome.min.css" rel="stylesheet">
    <!-- Magnific Popup -->
    <link href="assets/principal/plugins/magnific-popup/magnific-popup.css" rel="stylesheet">
    <!-- Slick Carousel -->
    <link href="assets/principal/plugins/slick/slick.css" rel="stylesheet">
    <link href="assets/principal/plugins/slick/slick-theme.css" rel="stylesheet">
    <!-- CUSTOM CSS -->
    <link href="assets/principal/css/style.css" rel="stylesheet">
    <!-- CAPTCHA -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>


    <!-- FAVICON -->
    <link href="assets/principal/images/favicon.png" rel="shortcut icon">

</head>

<body class="body-wrapper">


    <!--========================================
=            Navigation Section            =
=========================================-->

    <nav class="navbar main-nav border-less fixed-top navbar-expand-lg p-0">
        <div class="container-fluid p-0">
            <!-- logo -->
            <a class="navbar-brand" href="./">
                <img class="visible" style="width: 250px;" src="assets/principal/images/logop.png" alt="logo">
                <img class="novisible" src="assets/principal/images/icono.png" alt="logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="fa fa-bars"></span>
			</button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item dropdown active dropdown-slide">
                        <a class="nav-link" href="./">Inicio

						</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./#informacion">Información

						</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./#ponentes">Ponentes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./#intinerario">Intinerario</a>
                    </li>
                    <li class="nav-item dropdown dropdown-slide">
                        <a class="nav-link" href="./#taller">Talleres

						</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./#convocatoria">Convocatoria</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>

    <section class="banner bg-banner-one overlay" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Content Block -->
                    <div class="block">
                        <!-- Coundown Timer -->
                        <div class="timer"></div>
                        <h1>Registro</h1>
                        <h2>Coloquio Nacional</h2>
                        <h6>Matemática Educativa Aplicada a la Ingeniería</h6>
                        <!-- Action Button -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====  End of Banner  ====-->
    <br>

    <section class="registroform">
        <div class="container reg" id="advanced-search-form" style="border-radius:1em; padding: 20px">
            <h2>Registro</h2>
            <form class="st" id="register">
                <input type="hidden" value="FRONT">
                <div class="form-group">
                    <label for="first-name">Apellido Paterno</label>
                    <input type="text" class="form-control" placeholder="Apellido Paterno" id="first-name" name="APM"required>
                </div>
                <div class="form-group">
                    <label for="last-name">Apellido Materno</label>
                    <input type="text" class="form-control" placeholder="Apellido materno" name="APP" id="last-name" required>
                </div>
                <div class="form-group">
                    <label for="first-name">Nombre (s).</label>
                    <input type="text" class="form-control" placeholder="Nombre (s)" id="name" required>
                </div>
                
                <div class="form-group check-group"> 
                    <label for="" style="width:100%; text-align: center;">¿Eres estudiante? </label>
                    <div class="input-group-prepend">
                      <div class="input-group-text cg">           
                        <div>
                            Si               
                            <input  name="estudiante" type="radio" name="RBSI" aria-label="Checkbox for following text input" id="SI" required>
                        </div>
                        <div>
                            No
                        <input name="estudiante" type="radio" name="RBNO" aria-label="Checkbox for following text input" id="NO" required>
                        </div>
                      </div>
                    </div>
                  </div>
                <div class="form-group">
                    <label for="country">Matricula</label>
                    <input  type="text" class="form-control " placeholder="Matricula" id="matricula" name="RM" disabled>
                </div>
                <div class="form-group">
                    <label for="number">Numero telefonico</label>
                    <input type="text" class="form-control" placeholder="Numero Telefonico" name="RNUM" id="numero" required>
                </div>
                
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" placeholder="Email" name="REM" id="email" required>
                </div>
                <div class=" format-group">
                    <label for="tallers">Selecciona Taller</label>
                    <div class="input-group mb-12">
                        <select class="custom-select" id="inputGroupSelect01" name="RSEL">
                          <option selected>Selecciona taller</option>
                          <option value="1">One</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option>
                        </select>
                      </div>
                
                </div>
                <div class="clearfix"></div>
                <div class="g-recaptcha" data-sitekey="6LeauLkcAAAAAE1AtP-dk9klIFjxyuyLJoRSI7iA"></div>
                <button type="submit" class="forma-btn" id="search"> <span class="glyphicon glyphicon-search"></span> Registrarse</button>
                

            </form>
        </div>
    </section>
<br>




    <footer class="footer-main">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block text-center">
                        <div class="footer-logo">
                            <img style="width: 350px;" href="http://localhost/primercoloquio%20fin/principal.php" src="assets/principal/images/logop.png" alt="logo" class="img-fluid">
                        </div>
                        <ul class="social-links-footer list-inline">
                            <li class="list-inline-item">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#"><i class="fa fa-rss"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#"><i class="fa fa-vimeo"></i></a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </footer>
    <!-- Subfooter -->
    <footer class="subfooter">
        <div class="container">
            <div class="row">
                <div class="col-md-6 align-self-center">
                    <div class="copyright-text">
                        <p><a href="#">Universidad Politecnica de Tapachula</a> &#169; 2021 Todos los derechos reservados.
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <a href="#" class="to-top"><i class="fa fa-angle-up"></i></a>
                </div>
            </div>
        </div>
    </footer>


    <!-- JAVASCRIPTS -->
    <!-- jQuey -->
    <script src="assets/principal/plugins/jquery/jquery.js"></script>
    <!-- Popper js -->
    <script src="assets/principal/plugins/popper/popper.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="assets/principal/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- Smooth Scroll -->
    <script src="assets/principal/plugins/smoothscroll/SmoothScroll.min.js"></script>
    <!-- Isotope -->
    <script src="assets/principal/plugins/isotope/mixitup.min.js"></script>
    <!-- Magnific Popup -->
    <script src="assets/principal/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
    <!-- Slick Carousel -->
    <script src="assets/principal/plugins/slick/slick.min.js"></script>
    <!-- SyoTimer -->
    <script src="plugins/syotimer/jquery.syotimer.min.js"></script>
    <!-- Google Mapl -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu5nZKbeK-WHQ70oqOWo-_4VmwOwKP9YQ"></script>
    <script type="text/javascript" src="assets/principal/plugins/google-map/gmap.js"></script>
    <!-- Custom Script -->
    <script src="assets/principal/js/custom.js"></script>
    <script src="assets/principal/js/accions.js"></script>
</body>

</html>