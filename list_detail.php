<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TOYOTA | Purbalingga</title>
    <link rel="shortcut icon" href="img/favicon.png"/>

    <!-- Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" /><!-- Bootstrap -->
    <link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.min.css" type="text/css" /><!-- Icons -->
    <link rel="stylesheet" href="fonts/themify-icons/themify-icons.css" type="text/css" /><!-- Icons -->
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css" /><!-- Owl Carousal -->
    <link rel="stylesheet" href="css/price-range.css" type="text/css" /><!-- Owl Carousal -->
    <link rel="stylesheet" href="css/lightslider.min.css">

    <link rel="stylesheet" href="css/style.css" type="text/css" /><!-- Style -->	
    <link rel="stylesheet" href="css/responsive.css" type="text/css" /><!-- Responsive -->	
    <link rel="stylesheet" href="css/colors.css" type="text/css" /><!-- color -->	

    <!-- REVOLUTION STYLE SHEETS -->
    <link rel="stylesheet" type="text/css" href="js/rs-plugin/css/settings.css">
    <style type="text/css">
        [aria-expanded="false"] > .expanded, [aria-expanded="true"] > .collapsed {
            display: none;
        }
    </style>


</head>
<body>
    <!-- /.preloader -->
    <div id="preloader"></div>
    <div class="theme-layout">

        <header class="simple-header for-sticky ">
            <div class="top-bar">
                <?php
                include "koneksi/koneksi.php";
                $query = mysqli_query($koneksi, "SELECT * FROM profile");
                while ($var=mysqli_fetch_array($query)) {
                ?>
                <div class="container">
                    <ul class="contact-item">
                        <li><i class="fa fa-phone"></i><?php echo $var['no_hp']; ?></li>
                        <li><i class="fa fa-envelope-o"></i><?php echo $var['email']; ?></li>
                        <li><i class="fa fa-location-arrow"></i><?php echo $var['alamat']; ?></li>
                    </ul>
                </div>
                <?php
                }
                ?>
            </div><!-- Top bar -->
            <div class="menu">
                <div class="container">
                    <div class="logo">
                        <a href="index.php" title="">
                            <i class=""><img src="img/favicon.png" style="width: 50px; height: 50px;"></i>
                            <span>Toyota &nbsp;&nbsp;</span>
                            <strong>Authorized Toyota Dealer</strong>
                        </a>
                    </div><!-- LOGO -->
                </div>
            </div>
        </header>         

        <div class="inner-head overlap">	
            <div class="container">
                <div class="inner-content">
                    <span><i class="fa fa-car"></i></span>
                    <h2>CAR - DETAIL</h2>
                    <ul>
                        <li><a href="index.php" title="">HOME</a></li>
                        <li><a href="#" title="">CAR - DETAIL</a></li>
                    </ul>
                </div>
            </div>
        </div><!-- inner Head -->

        <section class="block">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">	
                        <?php
                        include "koneksi/koneksi.php";
                        $id_type = $_GET['id_type'];
                        $query = mysqli_query($koneksi, "SELECT * FROM showroom_detail WHERE id_type = '$id_type'");
                        while ($var=mysqli_fetch_array($query)) {
                            $gallery=mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM gallery WHERE id_type='$var[id_type]' LIMIT 8"));
                            $mobil=mysqli_fetch_array(mysqli_query($koneksi, "SELECT nama, tentang FROM showroom WHERE id_mobil='$var[id_mobil]'"));
                        ?>
                        <div class="row">
                            <div class="col-md-8 column">
                                <div class="single-post-sec">
                                    <div class="blog-post vehicul-post">
                                        <div class="vehicul-gallery"> 
                                            <div class="light-slide-item">  
                                                <div class="favorite-and-print"> 
                                                    <ul id="image-gallery" class="gallery list-unstyled cS-hidden">
                                                        <?php
                                                        include "koneksi/koneksi.php";
                                                        $id_type = $_GET['id_type'];
                                                        $query = mysqli_query($koneksi, "SELECT * FROM gallery WHERE id_type = '$id_type'");
                                                        while ($a=mysqli_fetch_array($query)) {
                                                        ?>
                                                        <li data-thumb="admin/images/showroom_detail/<?php echo $a['gambar'];?>"> 
                                                            <img src="admin/images/showroom_detail/<?php echo $a['gambar'];?>" alt="Car Image"/>
                                                        </li>
                                                        <?php
                                                        }
                                                        ?>                                
                                                    </ul>
                                                </div>
                                            </div>
                                        </div> 

                                        <h1>Toyota <?php echo $mobil['nama']; ?> <?php echo $var['type']; ?><br>
                                        <?php echo $var['harga']; ?></h1>

                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="vehicul-detail">

                                                    <div class="detail-field row" >
                                                        <span class="col-xs-6 col-md-5 detail-field-label">Type</span>
                                                        <span class="col-xs-6 col-md-7 detail-field-value"><span class="amount"><?php echo $var['type']; ?></span></span>

                                                        <span class="col-xs-6 col-md-5 detail-field-label">CC</span>
                                                        <span class="col-xs-6 col-md-7 detail-field-value"><span class="amount"><?php echo $var['cc']; ?></span></span>

                                                        <span class="col-xs-6 col-md-5 detail-field-label">Bahan Bakar</span>
                                                        <span class="col-xs-6 col-md-7 detail-field-value"><span class="amount"><?php echo $var['bbm']; ?></span></span>
                                                        <span class="col-xs-6 col-md-5 detail-field-label">Kapasitas</span>
                                                        <span class="col-xs-6 col-md-7 detail-field-value">
                                                            <span class="amount"><?php echo $var['penumpang']; ?> Penumpang</span> 
                                                        </span>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-md-7">
                                                <div class="readmore">
                                                <p><?php echo $mobil['tentang']; ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- Blog Post -->
                                </div><!-- Blog POst Sec -->
                            </div>

                            <aside class="col-md-4 column">
                                <div class="search_widget widget">
                                    <div class="heading2">
                                        <h3>INFORMATION</h3>
                                    </div>
                                    <div class="search-form"> 
                                        <table class="table" style="color: red; font-size: 15px;">
                                            <tr>
                                                <th colspan="2"><center><i class="fa fa-star"></i> <?php echo $var['status']; ?></center></th>
                                            </tr>
                                            <tr>
                                                <td>DP</td>
                                                <td><?php echo $var['dp']; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Cicilan</td>
                                                <td><?php echo $var['cicil']; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Jangka Waktu</td>
                                                <td><?php echo $var['jangka_waktu']; ?> /Bln</td>
                                            </tr>
                                        </table>
                                            <div class="search-form-submit">
                                                <button class="btn-search"><i class="fa fa-star"></i></button>
                                            </div>
                                    </div><!-- Services Sec -->
                                </div><!-- Category Widget -->

                                <div class="agent_bg_widget widget"> 
                                    <div class="heading2">
                                        <h3>CAR SPECIFICATIONS</h3>
                                    </div>
                                    <div class="agent_widget">
                                    <?php
                                    include "collspan.php";
                                    ?>
                                    </div>
                                </div><!-- Follow Widget -->

                            </aside>
                        </div>
                        <?php
                        }
                        ?> 
                    </div>
                </div>
            </div>
        </section>

        <footer>
            <div class="bottom-line">
                <div class="container">
                    <span>All rights reserved &copy 2019.  <a href="#" title="">TOYOTA | Purbalingga</a></span>
                </div>
            </div>
            <a href="#" class="scrollToTop"><i class="fa fa-angle-double-up"></i></a>
        </footer>

    </div>

    <!-- Script -->
    <script type="text/javascript" src="js/modernizr.js"></script><!-- Modernizer -->
    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script><!-- Jquery -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script><!-- Bootstrap -->
    <script type="text/javascript" src="js/owl.carousel.min.js"></script><!-- Owl Carousal -->
    <script type="text/javascript" src="js/html5lightbox.js"></script><!-- HTML --> 
    <script type="text/javascript" src="js/scrolly.js"></script><!-- Parallax -->
    <script type="text/javascript" src="js/price-range.js"></script><!-- Parallax -->
    <script type="text/javascript" src="js/script.js"></script><!-- Script -->
    <script type="text/javascript" src="js/lightslider.min.js"></script>
    <!-- EXPANDER SCRIPTS -->
    <script src="admin/assets/js/jquery.expander.js"></script>
  
    <script>
        $(document).ready(function () {

            $('#image-gallery').lightSlider({
                gallery: true,
                item: 1,
                thumbItem: 9,
                slideMargin: 0,
                speed: 500,
                auto: true,
                loop: true,
                onSliderLoad: function () {
                    $('#image-gallery').removeClass('cS-hidden');
                }
            });
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function () {
            "use strict";
            $(".related-vehiculs-items").owlCarousel({
                autoplay: true,
                autoplayTimeout: 3000,
                smartSpeed: 2000,
                loop: true,
                dots: true,
                nav: false,
                marging: 30,
                items: 4,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: false
                    },
                    600: {
                        items: 2,
                        nav: false
                    },
                    1000: {
                        items: 3,
                        nav: true,
                        loop: false
                    }
                }
            });
        });
    </script>
    
    <script type="text/javascript">
    $(document).ready(function () {
    $(".readmore").expander({
        slicePoint : 300,
        expandText: 'More >>',
        userCollapseText : '<< Less'
    });
    }); 
    </script>

</body>
</html>