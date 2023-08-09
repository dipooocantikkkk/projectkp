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
                                    <a href="contact.html" class="axil-btn btn-fill-primary btn-large">Pendaftaran</a>
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
        <!--=====================================-->
        <!--=       Breadcrumb Area Start       =-->
        <!--=====================================-->
        <div class="breadcrum-area breadcrumb-banner single-breadcrumb">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="section-heading heading-left" data-sal="slide-right" data-sal-duration="1000" data-sal-delay="300">
                            <h1 class="title h2">Sejarah singkat  TK-IT Al  Qolam</h1>
                            <p>Taman Kanak-Kanak Islam Terpadu (TKIT) Al Qolam adalah Lembaga Pendidikan anak usia dini yang berada pada jalur formal sebagai lembaga kepedulian dari sekelompok orang terhadap pentingnya nilai pendidikan bagi anak usia 4-6 tahun,maka muncullah gagasan atau ide untuk membuat sebuah wadah /lembaga untuk dijadikan sebagai tempat belajar, maka muncullah gagasan untuk mendidrikan sekolah .Selain itu banyaknya lembaga pendidikan PAUD yang bermunculan namun sistem pembelajaran dan kurikulum yang dipakai  lebih banyak memprioritaskan pada pembelajaran umum.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="banner-thumbnail" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="400">
                            <img class="paralax-image" src="assets/media/project/halamandepan.png" alt="Illustration">
                        </div>
                    </div>
                </div>
            </div>
            <ul class="shape-group-8 list-unstyled">
          
                <li class="shape shape-3" data-sal="slide-up" data-sal-duration="500" data-sal-delay="300">
                    <img src="assets/media/others/line-4.png" alt="Line">
                </li>
            </ul>
        </div>
        <!--=====================================-->
        <!--=     Single Portfolio Area Start   =-->
        <!--=====================================-->
        <section class="section-padding single-portfolio-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <p>Dari beberapa hal yang melatarbelakangi permasalahan di atas,maka muncullah gagasan untuk mendirikan lembaga pendidikan terpadu yang dimaksudkan mampu memadukan kurikulum Diniyah ( Agama) dengan kurikulum umum yang diharapkan ilmu yang akan diterima oleh murid dapat dijadikan sebagai bekal pembelajaran ketika memasuki jenjang Pendidikan Dasar. Maka nama Lembaga pun menjadi sesuatu yang dipikirkan ,yang biasa benama TK (Taman Kanak-Kanak) dirubah  menjadi Taman Kanak-Kanak Islam Terpadu (TKIT).
                        Pada awalnya nama Lembaga Pendidikan Formal ini yang berdiri pada bulan Juli tahun 2009 diberi nama AL WILDAN, yang bertempat di jalan Kartini tepatnya di TPA Al-Munawaroh dengan sistem penyewaan gedung, dan memiliki jumlah murid 5 Orang,dengan tenaga pengajarnya 1 Guru dan 1 Kepala Sekolah.Setelah berjalan kurang lebih 8 (Delapan ) Bulan di tempat tersebut,kegiatan belajar mengajar berpindah ke rumah Gurunya di karenakan Gurunya lagi sakit.Dan setelah kurang lebih 3 bulan KBM berlangsung di rumah kontrakan, kemudian berpindah lagi ke sekolah milik Yayasan Al Irsyat yang belum di gunakan dijalan Mohammad Yamin dengan sistem penyewaan Bangunan.
                        </p>
                        <p>Alhamdulillah atas karunia dari Allah Swt, dan berkat bantuan dari dermawan dan donatur, Yayasan Khairu Ummah akhirnya dapat membebaskan sebidang tanah yang berada d kompleks Perumnas Tinggede dan berkat kerja keras dan gotong royong dari semua elemen yang ada di Yayasan Khairu Ummah maka terbangunlah 1 bangunan sekolah yang terbuat dari kayu yang sangat sederhana yang terdiri atas 1 kelas,1 kantor,dan 1 ruangan penjaga sekolah.
                        Setelah bangunan sekolah itu siap di pakai maka berpindahlah kegiatan pembelajaran ke gedung milik sendiri di kompleks Perumnas Tinggede, pada bulan Syawal 1431 H sampai saat ini.
                        Dan pada tahun kedua nama sekolah di ubah menjadi TKIT ( Taman Kanak-kanak Islam Terpadu) AL- QOLAM. Al Qolam artinya Pena, yang diharapkan semua peserta didik yang belajar di Al Qolam menjadi generasi yang kuat Ilmu dan amal , karena dari Penalah  sumber ilmu didapatkan, selain itu tuntutan sebuah lembaga resmi yang harus memiliki SIO (Surat Izin Operasional) dan Alhamdulillah TKIT Al Qolam telah memiliki Surat Izin Operasional pada bulan Mei 2011 dari Dinas Pendidikan Pemuda dan Olahraga Kabupaten Sigi dan setiap 2 (Dua) tahun sekali ada perjanjian surat Izin.
                         </p>
                    </div>
                  

        <!--=====================================-->
        <!--=       Video Popup Area Start      =-->
        <!--=====================================-->
        <div class="section section-padding-equal bg-color-light">
            <div class="container">
                <div class="about-expert">
                    <div class="thumbnail">
                        <img src="assets/media/about/about-1.png" alt="Thumbnail">
                        <div class="popup-video">
                            <a href="https://www.youtube.com/watch?v=1iIZeIy7TqM" class="play-btn popup-youtube"><i class="fas fa-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <ul class="shape-group-16 list-unstyled">
                <li class="shape shape-1"><img src="assets/media/others/circle-2.png" alt="circle"></li>
                <li class="shape shape-2"><img src="assets/media/others/bubble-2.png" alt="Line"></li>
                <li class="shape shape-3"><img src="assets/media/others/bubble-1.png" alt="Line"></li>
            </ul>
        </div>
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
                                <span class="copyright-text">© 2023. All rights reserved by <a href="https://axilthemes.com/">Mitra Techno Global</a>.</span>
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