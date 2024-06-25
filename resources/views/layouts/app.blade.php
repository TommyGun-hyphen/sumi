<!DOCTYPE html>
<html lang="en">
<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Sumi - suministros industriales">

    <!-- ========== Page Title ========== -->
    <title>Sumi - suministros industriales</title>

    <!-- ========== Favicon Icon ========== -->
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

    <!-- ========== Start Stylesheet ========== -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/assets/css/font-awesome.min.css" rel="stylesheet" />
    <link href="/assets/css/flaticon-business-set.css" rel="stylesheet" />
    <link href="/assets/css/magnific-popup.css" rel="stylesheet" />
    <link href="/assets/css/owl.carousel.min.css" rel="stylesheet" />
    <link href="/assets/css/owl.theme.default.min.css" rel="stylesheet" />
    <link href="/assets/css/animate.css" rel="stylesheet" />
    <link href="/assets/css/bootsnav.css" rel="stylesheet" />
    <link href="/assets/css/style.css" rel="stylesheet">
    <link href="/assets/css/responsive.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- ========== End Stylesheet ========== -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5/html5shiv.min.js"></script>
      <script src="assets/js/html5/respond.min.js"></script>
    <![endif]-->

    <!-- ========== Google Fonts ========== -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,900" rel="stylesheet">
    <style>
        html {
            scroll-behavior: smooth;
        }
    </style>
</head>


<body>

    <!-- Preloader Start -->
    <div class="se-pre-con"></div>
    <!-- Preloader Ends -->

    <!-- Start Header Top 
    ============================================= -->
    <div class="top-bar-area bg-theme text-light">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="info box">
                        <ul>
                            <li>
                                <div class="icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="info">
                                    <p>
                                        Zone Franche D'Exportation ILOT 26B, C1 90000 Tanger - Maroc
                                    </p>
                                </div>
                            </li>
                            
                            <li>
                                <div class="icon">
                                    <i class="fas fa-mobile-alt"></i>
                                </div>
                                <div class="info">
                                    <p>
                                        +212 5 39 39 29 27
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="topbar-social col-md-3">
                    <ul class="text-right">
                        <li>
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-dribbble"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-pinterest"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-google-plus-g"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Top -->

    <!-- Header 
    ============================================= -->
    @include('partials.header')
    <!-- End Header -->

    @yield('content')

    <!-- Start Footer 
    ============================================= -->
    <footer class="default-padding-top text-light">
        <div class="container">
            <div class="row">
                <div class="f-items fv1">
                    <div class="col-md-4 item">
                        <div class="f-item">
                            <h4>Sobre Nosotras</h4>
                            <p>
                                En suni, somos líderes en suministros industriales, ofreciendo productos de alta calidad y asesoramiento experto para optimizar procesos y garantizar la eficiencia y seguridad en diversas industrias.
                            </p>
                            
                        </div>
                    </div>
                    <div class="col-md-4 item">
                        <div class="f-item link full">
                            <h4>Menu</h4>
                            <ul>
                                <li><a href="#">Principales Categorías</a></li>
                                <li><a href="#">Principales Fabricantes</a></li>
                                <li><a href="#">Ya Confían en Sumi</a></li>
                                <li><a href="#">Certifications</a></li>
                                <li><a href="#">Awards and Honours</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 item">
                        <div class="f-item link full">
                            <h4>Contacto</h4>
                            <ul>
                                <li><a href="#">envianos un email</a></li>
                                
                                <p>
                                    <span>Por favor escriba su correo electrónico y reciba nuestras increíbles actualizaciones, noticias y soporte.</span>
                                </p>
                                <div class="subscribe">
                                    <form action="#">
                                        <div class="input-group stylish-input-group">
                                            <input type="email" name="email" class="form-control" placeholder="Introduzca su correo electrónico aquí">
                                            <span class="input-group-addon">
                                                <button type="submit">
                                                    <i class="fa fa-paper-plane"></i>
                                                </button>  
                                            </span>
                                        </div>
                                    </form>
                                </div>
                            </ul>
                            
                            
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- Start Footer Bottom -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="col-md-12">
                            <p>&copy; Copyright 2024. <a href="#">Sumi</a></p>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer Bottom -->
    </footer>
    <!-- End Footer -->

    <!-- jQuery Frameworks
    ============================================= -->
    <script src="/assets/js/jquery-1.12.4.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
    <script src="/assets/js/equal-height.min.js"></script>
    <script src="/assets/js/jquery.appear.js"></script>
    <script src="/assets/js/jquery.easing.min.js"></script>
    <script src="/assets/js/jquery.magnific-popup.min.js"></script>
    <script src="/assets/js/progress-bar.min.js"></script>
    <script src="/assets/js/modernizr.custom.13711.js"></script>
    <script src="/assets/js/owl.carousel.min.js"></script>
    <script src="/assets/js/wow.min.js"></script>
    <script src="/assets/js/isotope.pkgd.min.js"></script>
    <script src="/assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="/assets/js/count-to.js"></script>
    <script src="/assets/js/bootsnav.js"></script>
    <script src="/assets/js/timeline.min.js"></script>
    <script src="/assets/js/main.js"></script>
    @yield('script')
</body>
</html>