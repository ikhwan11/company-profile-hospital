<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Basic Page Needs
================================================== -->
    <meta charset="utf-8">
    <title>RSGH - Rumah Sakit Graha Hermine</title>

    <!-- Mobile Specific Metas
================================================== -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Construction Html5 Template">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <meta name=author content="Themefisher">
    <meta name=generator content="Themefisher Constra HTML Template v1.0">

    <!-- Favicon
================================================== -->
    <link rel="icon" type="image/png" href="{{asset('Template')}}/images/favicon.png">

    <!-- CSS
================================================== -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{asset('Template')}}/plugins/bootstrap/bootstrap.min.css">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="{{asset('Template')}}/plugins/fontawesome/css/all.min.css">
    <!-- Animation -->
    <link rel="stylesheet" href="{{asset('Template')}}/plugins/animate-css/animate.css">
    <!-- slick Carousel -->
    <link rel="stylesheet" href="{{asset('Template')}}/plugins/slick/slick.css">
    <link rel="stylesheet" href="{{asset('Template')}}/plugins/slick/slick-theme.css">
    <!-- Colorbox -->
    <link rel="stylesheet" href="{{asset('Template')}}/plugins/colorbox/colorbox.css">
    <!-- Template styles-->
    <link rel="stylesheet" href="{{asset('Template')}}/css/style.css">


</head>

<body>
    <div class="body-inner">

        <div id="top-bar" class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12">
                        <ul class="top-info text-center text-md-left">
                            <li><i class="fas fa-phone text-white"></i>
                                <p class="info-text text-white">Emergency (0778) 363 127</p>
                            </li>
                        </ul>
                    </div>
                    <!--/ Top info end -->

                    <div class="col-lg-4 col-md-4 top-social text-center text-md-right">
                        <ul class="list-unstyled">
                            <li>
                                <a title="Facebook" href="#">
                                    <span class="social-icon"><i class="fab fa-facebook-f text-white"></i></span>
                                </a>
                                <a title="Instagram" href="#">
                                    <span class="social-icon"><i class="fab fa-instagram text-white"></i></span>
                                </a>
                                <a title="YouTube" href="#">
                                    <span class="social-icon"><i class="fab fa-youtube text-white"></i></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!--/ Top social end -->
                </div>
                <!--/ Content row end -->
            </div>
            <!--/ Container end -->
        </div>
        <!--/ Topbar end -->
        <!-- Header start -->
        <header id="header" class="header-two">
            <div class="site-navigation">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <nav class="navbar navbar-expand-lg navbar-light p-0">

                                <div class="logo">
                                    <a class="d-block" href="/">
                                        <img loading="lazy" src="{{asset('Template')}}/images/logo-gh-test.png" alt="Constra">
                                    </a>
                                </div><!-- logo end -->

                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>

                                <div id="navbar-collapse" class="collapse navbar-collapse">
                                    <ul class="nav navbar-nav ml-auto align-items-center">

                                        <li class="nav-item"><a class="nav-link" href="/">Beranda</a></li>

                                        <li class="nav-item"><a class="nav-link" href="/tentang">Tentang kami</a></li>

                                        <li class="nav-item dropdown">
                                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Dokter Kami<i class="fa fa-angle-down"></i></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="/dokter/profil">Profil Dokter</a></li>
                                                <li><a href="/dokter/jadwal">Jadwal Dokter</a></li>
                                            </ul>
                                        </li>

                                        <li class="nav-item"><a class="nav-link" href="/services">Layanan Kami</a></li>
                                        <!-- <li class="nav-item dropdown">
                                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Layanan <i class="fa fa-angle-down"></i></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#">Poliklinik</a></li>
                                                <li><a href="#">Instalasi Gawat Darurat(IGD)</a></li>
                                                <li><a href="#">Layanan Rawat Inap</a></li>
                                                <li><a href="#">Layanan Ibu dan Anak</a></li>
                                                <li><a href="#">Layanan Unggulan</a></li>
                                            </ul>
                                        </li> -->

                                        <li class="nav-item"><a class="nav-link" href="/artikel">Artikel</a></li>

                                        <li class="nav-item dropdown">
                                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Informasi <i class="fa fa-angle-down"></i></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="/galeri">Galeri</a></li>
                                                <li><a href="/karir">Karir</a></li>
                                                <li><a href="#">Hubungi Kami</a></li>
                                            </ul>
                                        </li>

                                        <li class="header-get-a-quote">
                                            <a class="btn btn-primary" href="/login">Sign In</a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <!--/ Col end -->
                    </div>
                    <!--/ Row end -->
                </div>
                <!--/ Container end -->

            </div>
            <!--/ Navigation end -->
        </header>
        <!--/ Header end -->

        @yield('content')

        <footer id="footer" class="footer">
            <div class="footer-main">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-lg-4 col-md-6 footer-widget footer-about">
                            <h3 class="widget-title text-dark">Tentang Kami</h3>
                            <img loading="lazy" width="200px" class="footer-logo" src="Template/images/logo-gh-test.png" alt="Constra">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor inci done idunt ut
                                labore et dolore magna aliqua.</p>
                            <div class="footer-social">
                                <ul>
                                    <li><a href="#" aria-label="Facebook"><i class="fab fa-facebook-f text-dark"></i></a></li>
                                    <li><a href="#" aria-label="Youtube"><i class="fab fa-youtube text-dark"></i></a>
                                    </li>
                                    <li><a href="#" aria-label="Instagram"><i class="fab fa-instagram text-dark"></i></a></li>
                                </ul>
                            </div><!-- Footer social end -->
                        </div><!-- Col end -->

                        <div class="col-lg-4 col-md-6 footer-widget mt-5 mt-md-0">
                            <h3 class="widget-title text-dark">Jadwal </h3>
                            <div class="working-hours">
                                We work 7 days a week, every day excluding major holidays. Contact us if you have an emergency, with our
                                Hotline and Contact form.
                                <br><br> Monday - Friday: <span class="text-right">10:00 - 16:00 </span>
                                <br> Saturday: <span class="text-right">12:00 - 15:00</span>
                                <br> Sunday and holidays: <span class="text-right">09:00 - 12:00</span>
                            </div>
                        </div><!-- Col end -->

                        <div class="col-lg-3 col-md-6 mt-5 mt-lg-0 footer-widget">
                            <h3 class="widget-title text-dark">Services</h3>
                            <ul class="list-arrow">
                                <li><a href="service-single.html">Pre-Construction</a></li>
                                <li><a href="service-single.html">General Contracting</a></li>
                                <li><a href="service-single.html">Construction Management</a></li>
                                <li><a href="service-single.html">Design and Build</a></li>
                                <li><a href="service-single.html">Self-Perform Construction</a></li>
                            </ul>
                        </div><!-- Col end -->
                    </div><!-- Row end -->
                </div><!-- Container end -->
            </div><!-- Footer main end -->

            <div class="copyright">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="copyright-info">
                                <span>Copyright &copy; <script>
                                        document.write(new Date().getFullYear())
                                    </script>, Designed by <a href="https://themefisher.com">Themefisher &amp; Developed by <a href="https://github.com/ikhwan11">Ikhwan</a></span>
                            </div>
                        </div>
                    </div><!-- Row end -->

                    <div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top position-fixed">
                        <button class="btn btn-primary" title="Back to Top">
                            <i class="fa fa-angle-double-up"></i>
                        </button>
                    </div>

                </div><!-- Container end -->
            </div><!-- Copyright end -->
        </footer><!-- Footer end -->


        <!-- Javascript Files
  ================================================== -->

        <!-- initialize jQuery Library -->
        <script src="{{asset('Template')}}/plugins/jQuery/jquery.min.js"></script>
        <!-- Bootstrap jQuery -->
        <script src="{{asset('Template')}}/plugins/bootstrap/bootstrap.min.js" defer></script>
        <!-- Slick Carousel -->
        <script src="{{asset('Template')}}/plugins/slick/slick.min.js"></script>
        <script src="{{asset('Template')}}/plugins/slick/slick-animation.min.js"></script>
        <!-- Color box -->
        <script src="{{asset('Template')}}/plugins/colorbox/jquery.colorbox.js"></script>
        <!-- shuffle -->
        <script src="{{asset('Template')}}/plugins/shuffle/shuffle.min.js" defer></script>


        <!-- Google Map API Key-->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer></script>
        <!-- Google Map Plugin-->
        <script src="{{asset('Template')}}/plugins/google-map/map.js" defer></script>

        <!-- Template custom -->
        <script src="{{asset('Template')}}/js/script.js"></script>

    </div><!-- Body inner end -->
</body>

</html>