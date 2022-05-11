<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Enda ECOPOP Financement participatif</title>

    <!--Fav and touch icons-->
    <link rel="icon" href="{{ asset('images/favicon.ico') }}">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('images/apple-touch-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('images/apple-touch-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('images/apple-touch-icon-152x152.png') }}">

    <!--Common Styles Plugins-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/owl.carousel.css') }}">
    <link rel="stylessheet" type="text/css" href="{{ asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/jquery-ui.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/magnific-popup.css') }}">

    <!--Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
    <!--Custom Style-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/space.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="loader-inner">
            <div class="sk-folding-cube">
                <div class="sk-cube1 sk-cube"></div>
                <div class="sk-cube2 sk-cube"></div>
                <div class="sk-cube4 sk-cube"></div>
                <div class="sk-cube3 sk-cube"></div>
            </div>
        </div>
    </div>

    <!-- header -->
    <div id="header--fixed" class="header">
        <div class="nav-top">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-5 col-lg-4">
                        <div class="phone">
                            <i class="fa fa-volume-control-phone"></i>+221 33 859 64 11
                        </div>
                        <div class="email">
                            <i class="fa fa-envelope"></i>ecopop@endaecopop.org
                        </div>

                    </div>
                    <div class="hidden-xs hidden-sm col-md-3 col-lg-4 ">

                                        <a href="donation.html" class="btn btn-red">Faire un Don à enda ECOPOP</a>

                    </div>
                    <div class="hidden-xs col-sm-6 col-md-4 col-lg-4">
                        <div class="social">
                            <a class="icon-facebook" href="#"><i class="fa fa-facebook-square"></i></a>
                            <a class="icon-twitter" href="#"><i class="fa fa-twitter-square"></i></a>
                            <a class="icon-pinterest" href="#"><i class="fa fa-pinterest-square"></i></a>
                            <a class="icon-google-plus" href="#"><i class="fa fa-google-plus-square"></i></a>
                        </div>
                        {{-- <a class="join-top" href="login.html"><i class="fa fa-user-circle"></i>JOIN</a>
                         <div class="dropdown currency-switchr">
                            <button class="currency-btn" id="currency" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-globe"></i>URO
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="currency">
                                <li><a href="#">USD</a></li>
                                <li><a href="#">AUD</a></li>
                            </ul>
                        </div>
                        <div class="dropdown language-switchr">
                            <button class="language-btn" id="language" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-globe"></i>ENG
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="language">
                                <li><a href="#">SPN</a></li>
                                <li><a href="#">GER</a></li>
                            </ul>
                        </div>  --}}
                    </div>
                </div>
            </div>
        </div>

        <div id="main-nav" class="main-nav">
            <nav class="navbar navbar-default">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-navbar" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index.html"><img class="retina" src="{{ asset('images/logo.png') }}" alt="logo"></a>
                    </div>
                    <div class="collapse navbar-collapse" id="main-navbar">
                        <ul class="nav navbar-nav navbar-left">
                            <li><a href="{{ route('home') }}">Accueil</a></li>
                            <li><a href="{{ route('list.projet') }}">Projets</a></li>
                            <li><a href="{{ route('listes.article') }}">Actualités</a></li>
                            <li><a href="{{ route('contact') }}">Contact</a></li>
                            <li><a href="{{ route('apropos') }}">A propos</a></li>
                           {{--   <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Page <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown dropdown-submenu">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Cause</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="{{ route('list.projet') }}">Cause</a></li>
                                            <li><a href="cause-details.html">Cause Details</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown dropdown-submenu">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">About</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="about.html">About</a></li>
                                            <li><a href="our-team.html">Our Team</a></li>
                                            <li><a href="our-partner.html">Our Pertnar</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="faq.html">FAQ</a></li>
                                    <li><a href="gallery.html">Gallery</a></li>
                                    <li><a href="404.html">404 Page</a></li>
                                    <li><a href="element.html">Element</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Event <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="event.html">Event</a></li>
                                    <li><a href="event-details.html">Event Details</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="blog.html">Blog</a></li>
                                    <li><a href="blog-2.html">Blog 2</a></li>
                                    <li><a href="single-blog.html">Single Blog</a></li>
                                    <li><a href="search-archive.html">Search Archive</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Shop <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="shop.html">Shop</a></li>
                                    <li><a href="product.html">Product</a></li>
                                    <li><a href="cart.html">Cart</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                    <li><a href="login.html">Login</a></li>
                                    <li><a href="register.html">Register</a></li>
                                </ul>
                            </li>  --}}
                        </ul>
                        {{--  <ul class="nav navbar-nav navbar-right hidden-xs">
                            <li class="top-cart">
                                <i class="fa fa-shopping-bag"></i>
                                <a href="cart.html" class="top-amount">$0.00</a>
                            </li>
                        </ul>  --}}
                    </div>
                </div>
            </nav>
        </div>
    </div>
    @yield('content')


    <div class="footer-section">
        <div class="footer-top pd-top-80">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 footer-widget">
                        <div class="footer-logo">
                            <img class="retina" src="{{ asset('images/logo.png') }}" alt="logo">
                            <p>Ye-Fina en abrégé (Y-Fin) est une plateforme de financement participatif (crowdfunding) crée par Enda ECOPOP , pour appuyer les projets et programmes de développement des collectivités et des villes africaines.</p>
                            <div class="footer-social">
                                <a href="#"><i class="fa fa-twitter-square"></i></a>
                                <a href="#"><i class="fa fa-linkedin-square"></i></a>
                                <a href="#"><i class="fa fa-vimeo-square"></i></a>
                                <a href="#"><i class="fa fa-facebook-square"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 footer-widget">
                        <div class="footer-address">
                            <h3 class="footer-title">Adresse</h3>
                            <p>Avenue Cheikh Anta DIOP Complexe
                                <br>Administratif Sicap Point E, Bâtiment B-2ème étage</p>
                            <p>
                                <i class="fa fa-phone"></i>+221338596411
                                <br>
                                <i class="fa fa-envelope-o"></i>ecopop@endaendaecopop.org
                            </p>
                            {{--  <div class="footer-map">
                                <a href="contact.html"><i class="fa fa-map-marker"></i>See in map</a>
                            </div>  --}}
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 footer-widget">
                        <h3 class="footer-title">Lien</h3>
                        <ul>
                            <li><a href="{{ route('home') }}">Accueil</a></li>
                            <li><a href="{{ route('list.projet') }}">Projets</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">A propos</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-sm-6 footer-widget">
                        <h3 class="footer-title">Rapport</h3>
                        <ul>
                            <li><a href="#">Rapport 2016</a></li>
                            <li><a href="#">Rapport 2016</a></li>
                            <li><a href="#">Rapport 2016</a></li>
                            <li><a href="#">Rapport 2016</a></li>
                            <li><a href="#">Rapport 2016</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <span><a href="#">Termes & Condition d'utilistion</a></span>
                        <span>&copy; 2022 Enda ECOPOP</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Common JS Plugin-->
    <script type="text/javascript" src=" {{ asset('js/jquery-1.12.4.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery-ui.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/retina.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.easing.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.scrollUp.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/isotope.pkgd.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/imagesloaded.pkgd.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/headroom.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jQuery.headroom.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/sticky-kit.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.countdown.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.waypoints.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.counterup.min.js') }}"></script>

    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCYMloK_kzsasOQXg-xhGxnwvlAU3HTZWg&callback=initMap" async defer></script>

    <!-- Custom JS -->
    <script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>
</body>
</html>
