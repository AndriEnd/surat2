<?php
session_start();
include 'konek.php';
$level = "pemohon";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Sistem Pelayanan Surat Desa Sumber Bahagia</title>
    <!-- core CSS -->
    <link href="main/css/bootstrap.min.css" rel="stylesheet">
    <link href="main/css/font-awesome.min.css" rel="stylesheet">
    <link href="main/css/animate.min.css" rel="stylesheet">
    <link href="main/css/owl.carousel.css" rel="stylesheet">
    <link href="main/css/owl.transitions.css" rel="stylesheet">
    <link href="main/css/prettyPhoto.css" rel="stylesheet">
    <link href="main/css/main.css" rel="stylesheet">
    <link href="main/css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">

</head>
<!--/head-->

<body id="home" class="homepage">

    <header id="header">
        <nav id="main-menu" class="navbar navbar-default navbar-fixed-top" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"><img src="main/img/header.png" width="195" height="75" alt="logo"></a>
                </div>

                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="scroll active"><a href="#home">Beranda</a></li>
                        <li class="scroll"><a href="#features">Jadwal</a></li>
                        <li class="scroll"><a href="#services">Informasi</a></li>
                        <li class="scroll"><a href="pegawai.php">Pegawai</a></li>
                        <li class="scroll"><a href="#get-in-touch">Lokasi</a></li>
                        <li class="scroll"><a href="login.php">Cetak Surat</a></li>
                    </ul>
                </div>
            </div>
            <!--/.container-->
        </nav>
        <!--/nav-->
    </header>
    <!--/header-->
    <section id="cta" class="d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                    <h1 class="section-title text-left  wow fadeInDown" data-wow-duration="300ms" data-wow-delay="0ms"><span>SISTEM PELAYANAN</span> ADMINISTRASI KELURAHAN SUMBER BAHAGIA</h2>
                        <p class="section-title text-left wow fadeInDown" data-wow-duration="300ms" data-wow-delay="100ms">Klick Login Untuk Melanjutkan
                        <div class="col-lg-12 text-center">
                            <div class="section-title text-left wow fadeInDown" data-wow-duration="300ms" data-wow-delay="200ms">
                                <!-- Button trigger modal -->
                                <a href=" login.php" type="submit" class="btn btn-success">Login</a>
                                <a href="register.php" type="submit" class="btn btn-primary">Daftar</a>
                            </div>
                        </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img">
                    <img class="img-responsive wow fadeIn" src="main/images/cta2/hero-img.png" alt="" data-wow-duration="300ms" data-wow-delay="300ms">
                </div>
            </div>
        </div>
    </section>


    <section id="features">
        <div class="container">
            <div class="section-header">
                <h3 class="section-title text-center wow fadeInDown">JAM OPRASIONAL </h3>
                <div class="row">
                    <div class="col-sm-6 wow fadeInLeft">
                        <img class="img-responsive" src="main/img/jadwal2.png" alt="">
                    </div>
                    <div class="col-sm-6">
                        <div class="media service-box wow fadeInRight">
                            <div class="pull-left">
                                <img src="main/img/clock.png" alt="" sizes="200px">
                            </div>
                            <div class="media-body">
                                <h3 class="media-heading">SENIN - KAMIS</h3>
                                <p>07.00 - 14.00 WIB</p>
                            </div>
                        </div>

                        <div class="media service-box wow fadeInRight">
                            <div class="pull-left">
                                <img src="main/img/clock.png" alt="">
                            </div>
                            <div class="media-body">
                                <h3 class="media-heading">JUM'AT</h3>
                                <p>07.00 - 11.00 WIB</p>
                            </div>
                        </div>

                        <div class="media service-box wow fadeInRight">
                            <div class="pull-left">
                                <img src="main/img/clock.png" alt="">
                            </div>
                            <div class="media-body">
                                <h3 class="media-heading">SABTU - MINGU</h3>
                                <p>LIBUR</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="services">
        <div class="container">

            <div class="section-header">
                <h3 class="section-title text-center wow fadeInDown">Prosedur Permohonan Surat</h3>
            </div>

            <div class="row">
                <div class="features">
                    <div class="col-md-6 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="0ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <img src="main/img/number.png" alt="">
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Dafatrkan NIK Pada RT</h4>
                                <p>Pemohon Surat melakukan Pendaftaran, melalui RT Setempat.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="0ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <img src="main/img/number2.png" alt="">
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Login</h4>
                                <p>Pemohon Surat melakukan login, melalui halaman Login.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!--/.col-md-4-->
                    <div class="col-md-6 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="100ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <img src="main/img/number3.png" alt="">
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Menginput Data</h4>
                                <p>Input data pemohon dengan sebelumnya melakukan Login dengan NIK dan password.</p>
                            </div>
                        </div>
                    </div>
                    <!--/.col-md-4-->

                    <div class="col-md-6 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="200ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <img src="main/img/number4.png" alt="">
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Mengajukan Surat Permohonan</h4>
                                <p>Setelah input data pemohon dengan lengkap dan benar, Pemohon memilih Surat yang mau direquest serta melengkapi data request, Kemudian Dikirim dan Menunggu persetujuan dari Lurah.</p>
                            </div>
                        </div>
                    </div>
                    <!--/.col-md-4-->
                    <div class="col-md-6 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="200ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <img src="main/img/number5.png" alt="">
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Permohonan Disetujui</h4>
                                <p>Permohonan di setujui oleh lurah, kemudian staf akan mencetak surat sesuai request surat yang diajukan, pemohon mengambil surat yang sudah dicetak dan bertandatangan di Kantor Kelurahan Sumber Bahagia.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!--/.row-->
        </div>
        <!--/.container-->
    </section>
    <!--/#services-->

    <section id="get-in-touch">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">LOKASI</h2>
            </div>
        </div>
    </section>
    <!--/#get-in-touch-->
    <section id="contact">
        <div>
            <iframe src="https://maps.google.com/maps?q=%20kantor%20kelurahan%20sumber%20bahagia%20seputi%20banyak%20lampung%20tengah&amp;t=k&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed" width=" 100%" height="650px" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" alt="lokasi kelurahan"></iframe>
        </div>
    </section>
    <!--/#bottom-->
    <section id="get-in-touch">
        <div class="container">
            <div class="section-header" align="left">
                <h2>Hubungi Kami</h2>
                <p>Jika Anda memiliki pertanyaan atau ingin berpartisipasi dalam kegiatan desa, jangan ragu untuk menghubungi kami. Kami senang mendengar dari Anda!</p>
                <p> Kontak Kami : 081990034835</p>

            </div>
    </section>

    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; <?php echo date('Y'); ?> KANTOR KELURAHAN SUMBER BAHAGIA KECAMATAN SEPUTIH BANYAK
                </div>
                <div class="col-sm-6">
                    <ul class="social-icons">

                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!--/#footer-->

    <script src="main/js/jquery.js"></script>
    <script src="main/js/bootstrap.min.js"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script src="main/js/owl.carousel.min.js"></script>
    <script src="main/js/mousescroll.js"></script>
    <script src="main/js/smoothscroll.js"></script>
    <script src="main/js/jquery.prettyPhoto.js"></script>
    <script src="main/js/jquery.isotope.min.js"></script>
    <script src="main/js/jquery.inview.min.js"></script>
    <script src="main/js/wow.min.js"></script>
    <script src="main/js/main.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- Swal -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.15.2/dist/sweetalert2.all.min.js"></script>
    <!-- Optional: include a polyfill for ES6 Promises for IE11 -->
    <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
</body>

</html>