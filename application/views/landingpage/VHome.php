<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>SYMA Decoration</title>
    <link rel="icon" type="image/x-icon" href="<?= base_url(); ?>assets/home/ic_symadeco.svg" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="<?= base_url(); ?>assets/home/css/styles.css" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-primary" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="<?= base_url(); ?>Welcome/home"><img src="<?= base_url(); ?>assets/home/img/ic.svg" alt="..." /></a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ml-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ml-auto">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#beranda">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#tentang">Tentang</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#layanan">Layanan</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#portfolio">Portofolio</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#kontak">Kontak</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="<?= base_url(); ?>Welcome/landingpaket">Paket</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="<?= base_url(); ?>Welcome/landingregistrasi">Pemesanan</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead" style="background-image: url('<?=base_url()?>assets/home/img/header-bg.jpg')" id="beranda">
        <div class="container">
            <div class="masthead-heading text-left small text-uppercase">SYMA Decoration</div>
            <div class="masthead-subheading text-left">Penyewaan peralatan pesta dan dekorasi profesional di Malang.</div>
            <a class="btn btn-primary float-left btn-xl text-uppercase js-scroll-trigger" href="http://bit.ly/RegistrasiSYMADECO">Hubungi Kami</a>
        </div>
    </header>
    <!-- Siapa kami-->
    <section class="page-section" id="tentang">
        <div class="container">
            <div class="row col-md-auto">
            <img class="img-fluid h-25" src="<?= base_url(); ?>assets/home/img/about/about.jpg" alt="Responsive image" />
                <div class="col text-left ml-4">
                    <h2 class="section-heading text-uppercase">Siapa Kami ?</h2>
                    <h3 class="section-subheading text-muted">Kami adalah penyedia jasa persewaaan peralatan dan dekorasi pesta yang didukung dengan tenaga kerja profesional serta ide-ide segar dan baru. Kami bertujuan memberikan pelayanan yang terbaik demi terwujudnya pesta impian Anda.</h3>
                </div>
            </div>
        </div>
    </section>
    <!-- layanan-->
    <section class="page-section" id="layanan">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">layanan</h2>
                <h3 class="section-subheading text-muted">Jasa profesional untuk mendukung kebutuhan pesta Anda.</h3>
            </div>
            <div class="row text-center">
                <div class="col-md-3">
                    <img class="img-fluid h-25" src="<?= base_url(); ?>assets/home/img/layanan/2.svg" alt="Responsive image" />
                    <h4 class="my-3">Dekorasi Tenda</h4>
                    <p class="text-muted">Menyediakan berbagai macam tenda dengan hiasan kain slayer yang bisa menyesuaikan dengan permintaan klien.</p>
                </div>
                <div class="col-md-3">
                    <img class="img-fluid h-25" src="<?= base_url(); ?>assets/home/img/layanan/4.svg" alt="Responsive image" />
                    <h4 class="my-3">Peralatan Pesta</h4>
                    <p class="text-muted">Menyediakan meja dan kursi beserta covernya. Menyediakan juga berbagai kebutuhan peralatan prasmanan.</p>
                </div>
                <div class="col-md-3">
                    <img class="img-fluid h-25" src="<?= base_url(); ?>assets/home/img/layanan/3.svg" alt="Responsive image" />
                    <h4 class="my-3">Dekorasi Pesta</h4>
                    <p class="text-muted">Melayani permintaan dekorasi berbagai acara seperti tasyakuran khitan atau aqiqah, pesta ulang tahun, pesta pertunangan hingga pesta pernikahan dengan konsep yang selalu kami update sesuai trend.</p>
                </div>
                <div class="col-md-3">
                    <img class="img-fluid h-25" src="<?= base_url(); ?>assets/home/img/layanan/1.svg" alt="Responsive image" />
                    <h4 class="my-3">Dekorasi Acara Adat</h4>
                    <p class="text-muted">Melayani permintaan dekorasi untuk upacara adat jawa seperti siraman, tingkepan hingga tedhak sinten.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Portfolio Grid-->
    <section class="page-section bg-light" id="portfolio">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Portofolio</h2>
                <h3 class="section-subheading text-muted">Berbagai acara yang mempercayakan kami sebagai penyedia dekorasi.</h3>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="<?= base_url(); ?>assets/home/img/portfolio/1.png" alt="..." />
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="<?= base_url(); ?>assets/home/img/portfolio/2.png" alt="..." />
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="<?= base_url(); ?>assets/home/img/portfolio/3.png" alt="..." />
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal4">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="<?= base_url(); ?>assets/home/img/portfolio/4.png" alt="..." />
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal5">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="<?= base_url(); ?>assets/home/img/portfolio/5.png" alt="..." />
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="<?= base_url(); ?>assets/home/img/portfolio/6.png" alt="..." />
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="page-section bg-light" id="kontak">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Alamat</h2>
                <h3 class="section-subheading text-muted">Rumah Merah OXYZ Jl. Bantaran 1 No. 25 Malang</h3>
            </div>
            <div class="text-center">
                <h2 class="section-heading text-uppercase">NO. TELP. / WHATSAPP</h2>
                <h3 class="section-subheading text-muted">+62 813 3000 2561</h3>
            </div>
            <div class="text-center">
                <h2 class="section-heading text-uppercase">MEDIA SOSIAL</h2>
                <a class="btn btn-dark btn-social mx-2" href="https://www.instagram.com/symadeco/" target="_blank"><i class="fab fa-instagram"></i></a>
                <a class="btn btn-dark btn-social mx-2" href="https://www.facebook.com/pg/Symadeco-Solution-2233848586732214" target="_blank"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-dark btn-social mx-2" href="https://wa.me/6285155173430?text=%2AHai%2C%20symadeco%21%2ASilahkan%20berkunjung%20ke%20www.symadeco.comFacebook%2CInstagram%20%3A%20%40symadecoSilahkan%20tanya-tanya%20langsung%20tentang%20Sistem%20Manajemen%20Dekorasi%20symadeco.com%20%F0%9F%94%B7%F0%9F%94%B7%F0%9F%94%B7" target="_blank"><i class="fab fa-whatsapp"></i></a>
                <a class="btn btn-dark btn-social mx-2" href="mailto:info.symadeco@gmail.com" target="_blank"><i class="fas fa-envelope"></i></a>
            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="footer py-3 fixed-down bg-primary">
        <div class="container ">
            <div class="text-center text-white">
                <script>
                    document.write(new Date().getFullYear());
                </script> &copy; All Rights Reserved. Developed by <a href="http://www.symadeco.com/" target="_blank"><b class="text-white">SYMADECO.</b></a>
            </div>
        </div>
    </footer>
    <!-- Portfolio Modals-->
    <!-- Modal 1-->
    <div class="modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img class="img-fluid d-block mx-auto" src="<?= base_url(); ?>assets/home/img/portfolio/1.png" alt="..." />
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 2-->
    <div class="modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img class="img-fluid d-block mx-auto" src="<?= base_url(); ?>assets/home/img/portfolio/2.png" alt="..." />
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 3-->
    <div class="modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img class="img-fluid d-block mx-auto" src="<?= base_url(); ?>assets/home/img/portfolio/3.png" alt="..." />
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 4-->
    <div class="modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img class="img-fluid d-block mx-auto" src="<?= base_url(); ?>assets/home/img/portfolio/4.png" alt="..." />
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 5-->
    <div class="modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img class="img-fluid d-block mx-auto" src="<?= base_url(); ?>assets/home/img/portfolio/5.png" alt="..." />
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 6-->
    <div class="modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img class="img-fluid d-block mx-auto" src="<?= base_url(); ?>assets/home/img/portfolio/6.png" alt="..." />
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JS-->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Third party plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
    <!-- Core theme JS-->
    <script src="<?= base_url(); ?>assets/home/js/scripts.js"></script>
</body>

</html>