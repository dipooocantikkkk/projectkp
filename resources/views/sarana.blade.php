<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>TK AL-QOLAM</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/media/logo profil.png">
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/vendor/font-awesome.css">
    <link rel="stylesheet" href="assets/css/vendor/slick.css">
    <link rel="stylesheet" href="assets/css/vendor/slick-theme.css">
    <link rel="stylesheet" href="assets/css/vendor/sal.css">
    <link rel="stylesheet" href="assets/css/vendor/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/vendor/green-audio-player.min.css">
    <link rel="stylesheet" href="assets/css/vendor/odometer-theme-default.css">

    <!-- Site Stylesheet -->
    <link rel="stylesheet" href="assets/css/app.css">

</head>

<body class="sticky-header">
    <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  	<![endif]-->
    <a href="#main-wrapper" id="backto-top" class="back-to-top">
        <i class="far fa-angle-double-up"></i>
    </a>

    <!-- Preloader Start Here -->
    <div id="preloader"></div>
    <!-- Preloader End Here -->

    <div class="my_switcher d-none d-lg-block">
        <ul>
            <li title="Light Mode">
                <a href="javascript:void(0)" class="setColor light" data-theme="light">
                    <i class="fal fa-lightbulb-on"></i>
                </a>
            </li>
            <li title="Dark Mode">
                <a href="javascript:void(0)" class="setColor dark" data-theme="dark">
                    <i class="fas fa-moon"></i>
                </a>
            </li>
        </ul>
    </div>

    <div id="main-wrapper" class="main-wrapper">

        <!--=====================================-->
        <!--=        Header Area Start       	=-->
        <!--=====================================-->
        <header class="header axil-header header-style-1">
            <div id="axil-sticky-placeholder"></div>
            <div class="axil-mainmenu">
                <div class="container">
                    <div class="header-navbar">
                        <div class="header-logo">
                            <a href="index-1.html"><img class="light-version-logo" src="assets/media/logo tk.png" alt="logo"></a>
                            <a href="index-1.html"><img class="dark-version-logo" src="assets/media/logo tk.png" alt="logo"></a>
                            <a href="index-1.html"><img class="sticky-logo" src="assets/media/logo tk.png" alt="logo"></a>
                        </div>
                        <div class="header-main-nav">
                            <!-- Start Mainmanu Nav -->
                            <nav class="mainmenu-nav" id="mobilemenu-popup">
                                <div class="d-block d-lg-none">
                                    <div class="mobile-nav-header">
                                        <div class="mobile-nav-logo">
                                            <a href="index-1.html">
                                                <img class="light-mode" src="assets/media/logo tk.png" alt="Site Logo">
                                                <img class="dark-mode" src="assets/media/logo tk.png" alt="Site Logo">
                                            </a>
                                        </div>
                                        <button class="mobile-menu-close" data-bs-dismiss="offcanvas"><i class="fas fa-times"></i></button>
                                    </div>
                                </div>
                                <ul class="mainmenu">
                                    <li class="menu-item-has-children">
                                        <a href="{{url('/')}}">Profil</a>
                                        <ul class="axil-submenu">
                                            <li><a href="{{url('/sejarah')}}">Sejarah</a></li>
                                            <li><a href="{{ url('/visi') }}">Visi Misi</a></li>
                                            <li><a href="{{ url('/struktur') }}">Struktur Organisasi</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="javascript:void(0);">Akademik</a>
                                        <ul class="axil-submenu">
                                            <li><a href="{{'/kurikulum'}}">Kurikulum</a></li>
                                            <li><a href="{{'/jadwal'}}">Jadwal Akademik</a></li>
                                            <li><a href="{{'/program'}}">Struktur Program</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="{{'/sarana'}}">Sarana dan Prasarana</a>
                                    </li>
                                    <li>
                                        <a href="{{'/blog'}}">Blog</a>
                                    </li>
                                    <a href="{{'/pendaftaran'}}" class="axil-btn btn-fill-primary btn-large">Pendaftaran</a>
                                </ul>
                            </nav>
                            <!-- End Mainmanu Nav -->
                        </div>
                        <div class="header-action">
                            <ul class="list-unstyled">
                                <li class="sidemenu-btn d-lg-block d-none">
                                    <button class="btn-wrap" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenuRight">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </button>
                                </li>
                                <li class="mobile-menu-btn sidemenu-btn d-lg-none d-block">
                                    <button class="btn-wrap" data-bs-toggle="offcanvas" data-bs-target="#mobilemenu-popup">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </button>
                                </li>
                                <li class="my_switcher d-block d-lg-none">
                                    <ul>
                                        <li title="Light Mode">
                                            <a href="javascript:void(0)" class="setColor light" data-theme="light">
                                                <i class="fal fa-lightbulb-on"></i>
                                            </a>
                                        </li>
                                        <li title="Dark Mode">
                                            <a href="javascript:void(0)" class="setColor dark" data-theme="dark">
                                                <i class="fas fa-moon"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        </header>
        <!--=====================================-->
        <!--=      Project Brief  Area Start    =-->
        <!--=====================================-->
        <section class="section-padding case-study-brief">
            <div class="container">
                <div class="row align-items-xl-center">
                    <div class="col-lg-6" data-sal="slide-right" data-sal-duration="1000">
                        <div class="case-study-featured-thumb">
                            <img class="paralax-image" src="assets/media/others/halaman.png" alt="Case Study">
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6 offset-xl-1" data-sal="slide-left" data-sal-duration="1000" data-sal-delay="200">
                        <div class="case-study-featured">
                            <div class="section-heading heading-left">
                                <h2 class="title">Sarana Prasarana TKIT Al-Qolam</h2>
                                <p>Sebagai upaya meningkatkan kualitas, dan mutu pembelajaran, di TKIT Al-Qolam telah memiliki beberapa fasilitas pendidikan yang dapat mendukung kegiatan belajar dan mengajar, baik akademik maupun non akademik.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-padding case-study-brief bg-color-mercury">
            <div class="container">
                <div class="row align-items-xl-center">
                    <div class="col-xl-5 col-lg-6" data-sal="slide-right" data-sal-duration="1000" data-sal-delay="200">
                        <div class="case-study-featured">
                            <div class="section-heading heading-left">
                                <h2 class="title">Ruang Kelas</h2>
                                <p>Ruang kelas merupakan salah satu fasilitas yang wajib dimiliki oleh bangunan sekolah tak terkecuali dengan TK. Ruang kelas yang nyaman akan memberikan perasaan nyaman juga bagi peserta didik didalamnya.</p>
                                <p>TKIT AL QOLAM sendiri memiliki 3 ruang kelas, yakni 1 kelas untuk kelas A, dan 2 kelas untuk kelas B. Masing-masing kelas tersebut dilengkapi dengan fasilitas pendukung pembelajaran dan juga suasana kelas yang nyaman dan indah dengan berbagai hiasan yang tak hanya berfungsi untuk memperindah ruangan namun juga dapat menjadi pendukung aktifitas belajar.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 offset-xl-1" data-sal="slide-left" data-sal-duration="1000">
                        <div class="case-study-featured-thumb">
                            <img class="paralax-image" src="assets/media/others/ruangkelas.png" alt="Case Study">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=====================================-->
        <!--=       Work Process Area Start     =-->
        <!--=====================================-->
        <section class="section section-padding bg-color-light pb--70">
            <div class="container">
                <div class="section-heading mb--90">
                   
                    <h2 class="title">DETAIL FASILITAS TKIT AL QOLAM</h2>
                    <p>dibawah ini adalah beberapa fasilitas yang ada di TKIT AL QOLAM</p>
                </div>
                <div class="process-work" data-sal="slide-right" data-sal-duration="1000" data-sal-delay="100">
                    <div class="thumbnail paralax-image">
                        <img src="assets/media/others/rak.png" alt="Thumbnail">
                    </div>
                    <div class="content">
                        <h3 class="title">Rak Siswa</h3>
                        <p>Rak ini merupakan tempat menyimpan barang-barang siswa TKIT AL QOLAM. Masing-masing rak memiliki nama setiap siswa. Rak ini juga terdapat disetiap kelas. Rak ini berguna untuk memisahkan barang antara siswa satu dan yang lain. serta melatih siswa untuk bertanggung jawab terhadap barang miliknya sendiri.</p>
                    </div>
                </div>
                <div class="process-work content-reverse" data-sal="slide-left" data-sal-duration="1000" data-sal-delay="100">
                    <div class="thumbnail paralax-image">
                        <img src="assets/media/others/aula.png" alt="Thumbnail">
                    </div>
                    <div class="content">
                        <h3 class="title">Aula Sekolah</h3>
                        <p>TKIT AL QOLAM memiliki satu ruang Aula yang berguna sebagai tempat siswa berkumpul sebelum masuk kelas, sebagai tempat sholat bersama, ataupun jika ada pertemuan kecil dengan wali murid.</p>
                    </div>
                </div>
                <div class="process-work" data-sal="slide-right" data-sal-duration="1000" data-sal-delay="100">
                    <div class="thumbnail paralax-image">
                        <img src="assets/media/others/tempatwudhu.png" alt="Thumbnail">
                    </div>
                    <div class="content">
                        <h3 class="title">Tempat Wudhu</h3>
                        <p>TKIT AL QOLAM juga memiliki tempat wudhu yang bersih dan digunakan para siswa ketika belajar mengambil air wudhu.</p>
                    </div>
                </div>
                <div class="process-work content-reverse" data-sal="slide-left" data-sal-duration="1000" data-sal-delay="100">
                    <div class="thumbnail paralax-image">
                        <img src="assets/media/others/bermain.png" alt="Thumbnail">
                    </div>
                    <div class="content">
                        <h3 class="title">Tempat Bermain</h3>
                        <p>Pada halaman sekolah terdapat berbagai jenis fasilitas bermain anak seperti ayunan, jungkat-jungkit, seluncuran dan komidi putar. Fasilitas bermain sangat berperan untuk mengembangkan kemampuan motorik anak.</p>
                    </div>
                </div>
                <div class="process-work" data-sal="slide-right" data-sal-duration="1000" data-sal-delay="100">
                    <div class="thumbnail paralax-image">
                        <img src="assets/media/others/toilet.png" alt="Thumbnail">
                    </div>
                    <div class="content">
                        <h3 class="title">Toilet</h3>
                        <p>Toilet di TKIT AL QOLAM yang digunakan oleh para siswa dan guru.</p>
                    </div>
                </div>
            </div>
        </div>
            <ul class="shape-group-17 list-unstyled">
                <li class="shape shape-1"><img src="assets/media/others/bubble-24.png" alt="Bubble"></li>
                <li class="shape shape-2"><img src="assets/media/others/bubble-23.png" alt="Bubble"></li>
                <li class="shape shape-3"><img src="assets/media/others/line-4.png" alt="Line"></li>
                <li class="shape shape-4"><img src="assets/media/others/line-5.png" alt="Line"></li>
                <li class="shape shape-5"><img src="assets/media/others/line-4.png" alt="Line"></li>
                <li class="shape shape-6"><img src="assets/media/others/line-5.png" alt="Line"></li>
            </ul>
        </section>
     <!--=====================================-->
        <!--=        Footer Area Start       	=-->
        <!--=====================================-->
        <footer class="footer-area">
            <div class="container">
                <div class="footer-top">
                    <div class="footer-social-link">
                        <ul class="list-unstyled">
                            <li><a href="https://facebook.com/" data-sal="slide-up" data-sal-duration="500" data-sal-delay="100"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="https://www.instagram.com/" data-sal="slide-up" data-sal-duration="500" data-sal-delay="500"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
          
                <div class="footer-bottom" data-sal="slide-up" data-sal-duration="500" data-sal-delay="100">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="footer-copyright">
                                <span class="copyright-text">© 2023. All rights reserved by <a href="https://axilthemes.com/">Mitra Global Techno</a>.</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="footer-bottom-link">
                                <ul class="list-unstyled">
                                    <li><a href="privacy-policy.html">Privacy Policy</a></li>
                                    <li><a href="terms-of-use.html">Terms of Use</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>



        <!--=====================================-->
        <!--=       Offcanvas Menu Area       	=-->
        <!--=====================================-->
        <div class="offcanvas offcanvas-end header-offcanvasmenu" tabindex="-1" id="offcanvasMenuRight">
            <div class="offcanvas-header">
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <form action="#" class="side-nav-search-form">
                    <div class="form-group">
                        <input type="text" class="search-field" name="search-field" placeholder="Search...">
                        <button class="side-nav-search-btn"><i class="fas fa-search"></i></button>
                    </div>
                </form>
                <div class="row ">
                    <div class="col-lg-5 col-xl-6">
                        <ul class="main-navigation list-unstyled">
                            <li><a href="index-1.html">Digital Agency</a></li>
                            <li><a href="index-2.html">Creative Agency</a></li>
                            <li><a href="index-3.html">Personal Portfolio</a></li>
                            <li><a href="index-4.html">Home Startup</a></li>
                            <li><a href="index-5.html">Corporate Agency</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-7 col-xl-6">
                        <div class="contact-info-wrap">
                            <div class="contact-inner">
                                <address class="address">
                                    <span class="title">Contact Information</span>
                                    <p>Theodore Lowe, Ap #867-859 <br> Sit Rd, Azusa New York</p>
                                </address>
                                <address class="address">
                                    <span class="title">We're Available 24/7. Call Now.</span>
                                    <a class="tel" href="tel:8884562790"><i class="fas fa-phone"></i>(888)
                                        456-2790</a>
                                    <a class="tel" href="tel:12125553333"><i class="fas fa-fax"></i>(121)
                                        255-53333</a>
                                </address>
                            </div>
                            <div class="contact-inner">
                                <h5 class="title">Find us here</h5>
                                <div class="contact-social-share">
                                    <ul class="social-share list-unstyled">
                                        <li><a href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="https://twitter.com/"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="https://www.behance.net/"><i class="fab fa-behance"></i></a></li>
                                        <li><a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery Js -->
    <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="assets/js/vendor/bootstrap.min.js"></script>
    <script src="assets/js/vendor/isotope.pkgd.min.js"></script>
    <script src="assets/js/vendor/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/vendor/odometer.min.js"></script>
    <script src="assets/js/vendor/jquery-appear.js"></script>
    <script src="assets/js/vendor/slick.min.js"></script>
    <script src="assets/js/vendor/sal.js"></script>
    <script src="assets/js/vendor/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/vendor/js.cookie.js"></script>
    <script src="assets/js/vendor/jquery.style.switcher.js"></script>
    <script src="assets/js/vendor/jquery.countdown.min.js"></script>
    <script src="assets/js/vendor/tilt.js"></script>
    <script src="assets/js/vendor/green-audio-player.min.js"></script>
    <script src="assets/js/vendor/jquery.nav.js"></script>

    <!-- Site Scripts -->
    <script src="assets/js/app.js"></script>
</body>

</html>