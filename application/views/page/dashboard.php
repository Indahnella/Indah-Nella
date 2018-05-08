<!DOCTYPE html>
<html lang="en" class="no-js">
    <!-- Begin Head -->
    <head>
        <!-- Basic -->
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Wellcome to my website jurnalistik</title>
        <meta name="keywords" content="HTML5 Theme" />
        <meta name="description" content="Megakit - HTML5 Theme">
        <meta name="author" content="keenthemes.com">

        <!-- Web Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i|Montserrat:400,700" rel="stylesheet">

        <!-- Vendor Styles -->
        <link href="<?php echo base_url() ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url() ?>assets/css/animate.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url() ?>assets/vendor/themify/themify.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url() ?>assets/vendor/scrollbar/scrollbar.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url() ?>assets/vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url() ?>assets/vendor/swiper/swiper.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url() ?>assets/vendor/cubeportfolio/css/cubeportfolio.min.css" rel="stylesheet" type="text/css"/>

        <!-- Theme Styles -->
        <link href="<?php echo base_url() ?>assets/css/style.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url() ?>assets/css/global/global.css" rel="stylesheet" type="text/css"/>

        <!-- Favicon -->
        <link rel="shortcut icon" href="<?php echo base_url() ?>assets/img/favicon.ico" type="image/x-icon">
        <link rel="apple-touch-icon" href="<?php echo base_url() ?>assets/img/apple-touch-icon.png">
    </head>
    <!-- End Head -->

    <!-- Body -->
    <body>

        <!--========== HEADER ==========-->
        <header class="navbar-fixed-top s-header js__header-sticky js__header-overlay">
            <!-- Navbar -->
            <div class="s-header__navbar">
                <div class="s-header__container">
                    <div class="s-header__navbar-row">
                        <div class="s-header__navbar-row-col">
                            <!-- Logo -->
                            <div class="s-header__logo">
                                <a href="<?php echo base_url().'index.php/Wellcome' ?>" class="s-header__logo-link">
                                   <font color="#34b7f1" size="5" style="font-family: 'Lucida Calligraphy';">Jurnalis<font color="#808080" size="5">Tik</font> </font>
                                </a>
                            </div>
                            <!-- End Logo -->
                        </div>
                        <div class="s-header__navbar-row-col">
                            <!-- Trigger -->
                            <a href="javascript:void(0);" class="s-header__trigger js__trigger">
                                <span class="s-header__trigger-icon"></span>
                                <svg x="0rem" y="0rem" width="3.125rem" height="3.125rem" viewbox="0 0 54 54">
                                    <circle fill="transparent" stroke="#fff" stroke-width="1" cx="27" cy="27" r="25" stroke-dasharray="157 157" stroke-dashoffset="157"></circle>
                                </svg>
                            </a>
                            <!-- End Trigger -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Navbar -->

            <!-- Overlay -->
            <div class="s-header-bg-overlay js__bg-overlay">
                <!-- Nav -->
                <nav class="s-header__nav js__scrollbar">
                    <div class="container-fluid">
                        <!-- Menu List -->
                        <ul class="list-unstyled s-header__nav-menu">
                            <li class="s-header__nav-menu-item"><i class="s-header__nav-menu-link s-header__nav-menu-link-divider -is-active"><?php echo anchor('Wellcome','Home'); ?></i></li>
                            <li class="s-header__nav-menu-item"><i class="s-header__nav-menu-link s-header__nav-menu-link-divider" href="#"><?php echo anchor('News','Berita Terkini'); ?></i></li>
                            <li class="s-header__nav-menu-item"><i class="s-header__nav-menu-link s-header__nav-menu-link-divider" href="#"><?php echo anchor('Informasi','Informasi Sekolah'); ?></i></li>
                            <li class="s-header__nav-menu-item"><i class="s-header__nav-menu-link s-header__nav-menu-link-divider" href=""><?php echo anchor('About','Tentang'); ?></i></li>
                            <li class="s-header__nav-menu-item"><i class="s-header__nav-menu-link s-header__nav-menu-link-divider" href="#"><?php echo anchor('Contact','Kontak'); ?></i></li>
                            <li class="s-header__nav-menu-item"><i class="s-header__nav-menu-link s-header__nav-menu-link-divider" href="#"><?php echo anchor('login','LogOut'); ?></i></li>
                        </ul>
                        <!-- End Menu List -->

                        <!-- Menu List -->
                        <ul class="list-unstyled s-header__nav-menu">
                            <li class="s-header__nav-menu-item"><i class="s-header__nav-menu-link s-header__nav-menu-link-divider" href="#"><?php echo anchor('Foto','Galeri'); ?></i></li>
                            <li class="s-header__nav-menu-item"><i class="s-header__nav-menu-link s-header__nav-menu-link-divider" href="#"><?php echo anchor('Article','Artikel'); ?></i></li>
                            <li class="s-header__nav-menu-item"><i class="s-header__nav-menu-link s-header__nav-menu-link-divider" href="#"><?php echo anchor('Puisi','Puisi'); ?></i></li>
                            <li class="s-header__nav-menu-item"><i class="s-header__nav-menu-link s-header__nav-menu-link-divider" href="#"><?php echo anchor('Cerpen','Cerita Pendek'); ?></i></li>
                            <li class="s-header__nav-menu-item"><i class="s-header__nav-menu-link s-header__nav-menu-link-divider" href="#"><?php echo anchor('Bijak','Kata-kata Motivasi');?></i></li>
                        </ul>
                        <!-- End Menu List -->
                    </div>
                </nav>
                <!-- End Nav -->

                <!-- Action -->
                <ul class="list-inline s-header__action s-header__action--rb">
                    <li class="s-header__action-item">
                        <a class="s-header__action-link" href="#">
                            <i class="g-padding-r-5--xs ti-facebook"></i>
                            <span class="g-display-none--xs g-display-inline-block--sm">Facebook</span>
                        </a>
                    </li>
                    <li class="s-header__action-item">
                        <a class="s-header__action-link" href="#">
                            <i class="g-padding-r-5--xs ti-twitter"></i>
                            <span class="g-display-none--xs g-display-inline-block--sm">Twitter</span>
                        </a>
                    </li>
                    <li class="s-header__action-item">
                        <a class="s-header__action-link" href="#">
                            <i class="g-padding-r-5--xs ti-instagram"></i>
                            <span class="g-display-none--xs g-display-inline-block--sm">Instagram</span>
                        </a>
                    </li>
                </ul>
                <!-- End Action -->
            </div>
            <!-- End Overlay -->
        </header>
        <!--========== END HEADER ==========-->

    <!--========== Content ==========-->
      <?php $data['data'] = isset($data) ? $data : []; $this->load->view($content, $data); ?>

        

        <!--========== FOOTER ==========-->
        <footer class="g-bg-color--dark">

            <!-- Copyright -->
            <div class="container g-padding-y-50--xs">
                <div class="row">
                    <div class="col-xs-6">
                        <a href="index.html">
                            <font color="#34b7f1" size="5" style="font-family: 'Lucida Calligraphy';">Jurnalis<font color="white" size="5">Tik</font> </font>
                        </a>
                    </div>
                    <div class="col-xs-6 g-text-right--xs">
                        <p class="g-font-size-14--xs g-margin-b-0--xs g-color--white-opacity-light"><a href="http://keenthemes.com/preview/Megakit/">Jurnalis2018</a> Desains by: Indah Nella</a></p>
                    </div>
                </div>
            </div>
            <!-- End Copyright -->
        </footer>
        <!--========== END FOOTER ==========-->

        <!-- Back To Top -->
        <a href="javascript:void(0);" class="s-back-to-top js__back-to-top"></a>

        <!--========== JAVASCRIPTS (Load javascripts at bottom, this will reduce page load time) ==========-->
        <!-- Vendor -->
        <script type="text/javascript" src="<?php echo base_url() ?>assets/vendor/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>assets/vendor/jquery.migrate.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>assets/vendor/jquery.smooth-scroll.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>assets/vendor/jquery.back-to-top.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>assets/vendor/scrollbar/jquery.scrollbar.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>assets/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>assets/vendor/swiper/swiper.jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>assets/vendor/waypoint.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>assets/vendor/counterup.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>assets/vendor/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>assets/vendor/jquery.parallax.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBsXUGTFS09pLVdsYEE9YrO2y4IAncAO2U"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>assets/vendor/jquery.wow.min.js"></script>

        <!-- General Components and Settings -->
        <script type="text/javascript" src="<?php echo base_url() ?>assets/js/global.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>assets/js/components/header-sticky.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>assets/js/components/scrollbar.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>assets/js/components/magnific-popup.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>assets/js/components/swiper.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>assets/js/components/counter.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>assets/js/components/portfolio-3-col.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>assets/js/components/parallax.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>assets/js/components/google-map.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>assets/js/components/wow.min.js"></script>
        <!--========== END JAVASCRIPTS ==========-->

    </body>
    <!-- End Body -->
</html>
