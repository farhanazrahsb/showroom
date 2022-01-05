<?php
include "admin/part/counter.php";
?>
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
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css" /><!-- Owl Carousal-->
    <link rel="stylesheet" href="css/price-range.css" type="text/css" /><!-- Owl Carousal -->

    <link rel="stylesheet" href="css/style.css" type="text/css" /><!-- Style -->	
    <link rel="stylesheet" href="css/responsive.css" type="text/css" /><!-- Responsive -->	
    <link rel="stylesheet" href="css/colors.css" type="text/css" /><!-- color -->	

    <!-- REVOLUTION STYLE SHEETS -->
    <link rel="stylesheet" type="text/css" href="js/rs-plugin/css/settings.css">

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

        <div id="rev_slider-wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="classicslider1" >
            <div class="tp-banner-container">
                <div class="tp-banner" >
                    <?php
					include "koneksi/koneksi.php";
					$query = mysqli_query($koneksi, "SELECT * FROM profile");
					while ($var=mysqli_fetch_array($query)) {
					?>
					<ul>                        
					  <li data-transition="fade" data-slotamount="7" data-masterspeed="2000" data-saveperformance="on"  data-title="Ken Burns Slide">
					  <!-- MAIN IMAGE -->
					  <div class="tp-caption tentered_white_huge lft tp-resizeme" data-endspeed="300" data-easing="Power4.easeOut" data-start="400" data-speed="600" data-y="130" data-hoffset="0" data-x="center" style="">
					  <img alt="" src="img/call.png" style="width: 110px; height: 110px; margin-top: -50px;">
					  </div>
                      <a href="tel:<?php echo $var['no_hp']; ?>" target="_blank" style="color: white; font-size: 20px;">
					  <div class="tp-caption tentered_white_huge lft tp-resizeme" data-endspeed="300" data-easing="Power4.easeOut" data-start="400" data-speed="600" data-y="272" data-hoffset="0" data-x="center" style="z-index: 12; max-width: auto; max-height: auto; white-space: nowrap; padding:15px 28px; color: #fff; text-transform: uppercase; border: none; background:#000; letter-spacing: 3px; font-family: Montserrat; border-radius: 0px; display: table; transition: .4s; margin-top: -70px;">
					  <i class="fa fa-whatsapp"> </i> <?php echo $var['no_hp']; ?></a>
					  </div>
					  </li> 
					</ul>
					<?php
					}
					?>
                    <div class="tp-bannertimer"></div>
                </div>
            </div>
        </div><!-- END REVOLUTION SLIDER -->

        <section class="horizontal-search">
            <div class="container">
                <div class=""> 
                    <div class="search-form"> 
                        <div class="search-form-submit">
                            <button class="btn-search"><i class="fa fa-car"></i></button>
                        </div>
                    </div><!-- Services Sec -->
                </div>
            </div>
        </section>

        <section class="block">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="blog-sec">
                            <div class="row">  
                                <ul class="nav nav-tabs nav-pills nav-justified" style="color: red;">
                                    <li class="active"><a data-toggle="tab" href="#home">SHOWROOM</a></li>
                                    <li><a data-toggle="tab" href="#menu1">SERVICE</a></li>
                                    <li><a data-toggle="tab" href="#menu2">PARTNER INSURANCE</a></li>
                                </ul><br>
        
                                <div class="tab-content">
                        			<div id="home" class="tab-pane fade in active">
                        				<div class="heading4">
                                            <h2>SHOWROOM</h2>
                                        </div>
                        				<?php
                                        include "koneksi/koneksi.php";
                                        $query = mysqli_query($koneksi, "SELECT * FROM showroom");
                                        while ($var=mysqli_fetch_array($query)) {
                                            $mobil=mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM showroom_detail WHERE id_mobil='$var[id_mobil]'"));
                                        ?>                              
                                        <div class="col-md-3">
                                            <div class="vehiculs-box">
                                                <div class="vehiculs-thumb">
                                                    <img src="admin/images/showroom/<?php echo $var['gambar'];?>" alt=""/>
                                                    <span class="spn-status"><?php echo $mobil['status']; ?></span>
                                                    <a class="proeprty-sh-more" href="showroom_detail.php?&id_mobil=<?php echo $var['id_mobil']; ?>" title="Detail"><i class="fa fa-angle-double-right"> </i><i class="fa fa-angle-double-right"> </i></a>
                                                </div>
                                                <h3><a href="showroom_detail.php?&id_mobil=<?php echo $var['id_mobil']; ?>" title="">Toyota <?php echo $var['nama']; ?></a></h3>
                                                <span class="price"><br>
                                                <p>
                                                    <b><?php echo $var['jenis']; ?></b> | 
                                                    <?php echo $var['cc']; ?> CC | 
                                                    <?php echo $var['bbm']; ?> | 
                                                    <?php echo $var['penumpang']; ?> Penumpang
                                                </p><br>
                                                <h5>Harga OTR Mulai Dari</h5>
                                                <?php echo $var['harga']; ?></span>
                                            </div><!-- prop Box -->
                                        </div> 
                                        <?php
                                        }
                                        ?>
                                    </div>
                        			<div id="menu1" class="tab-pane fade">
                        				<div class="heading4">
                                            <h2>SERVICE</h2>
                                        </div>
                        				<?php
                                        include "koneksi/koneksi.php";
                                        $query = mysqli_query($koneksi, "SELECT * FROM service");
                                        while ($var=mysqli_fetch_array($query)) {
                                        ?>
                                        <div class="col-md-6">
                                            <div class="blog-post">
                                                <div class="post-thumb">
                                                    <img src="admin/images/service/<?php echo $var['gambar'];?>" alt="" width="500px" height="300px"/>
                                                    <div class="post-detail">
                                                        <a href="<?php echo $var['map']; ?>" target="_blank" title="" class="post-cat"><i class="fa fa-location-arrow"></i> Location</a>
                                                        <h2><a href="#" title=""><?php echo $var['nama']; ?></a></h2>
                                                        <p style="color: white;"><i class="fa fa-phone"></i> <?php echo $var['no_hp']; ?></p>
                                                        <p style="color: white;"><i class="fa fa-location-arrow"></i> <?php echo $var['alamat']; ?><br>
                                                        <?php echo $var['kota']; ?></p>
                                                    </div>
                                                </div>
                                                <div class="post-admin">
                                                    <a href="#" title="">
                                                        <a href="tel:<?php echo $var['no_hp']; ?>"><button class="btn btn-success" title="Call" style="font-size: 25px; border-radius: 50%;"><i class="fa fa-phone"></i></button></a>
                                                        <span>Posted by <i>Admin</i></span>
                                                    </a>
                                                </div>
                                            </div><!-- Blog Post -->
                                        </div>
                                        <?php
                                        }
                                        ?>
                                    </div>
                        			<div id="menu2" class="tab-pane fade">
                        				<div class="heading4">
                                            <h2>PARTNER INSURANCE</h2>
                                        </div>
                        				<?php
                                        include "koneksi/koneksi.php";
                                        $query = mysqli_query($koneksi, "SELECT * FROM insurance");
                                        while ($var=mysqli_fetch_array($query)) {
                                        ?>
                                        <div class="col-md-6">
                                            <div class="blog-post">
                                                <div class="post-thumb">
                                                    <img src="admin/images/insurance/<?php echo $var['gambar'];?>" alt="" width="500px" height="300px"/>
                                                    <div class="post-detail">
                                                        <a href="<?php echo $var['map']; ?>" target="_blank" title="" class="post-cat"><i class="fa fa-location-arrow"></i> Location</a>
                                                        <h2><a href="#" title=""><?php echo $var['nama']; ?></a></h2>
                                                        <p style="color: white;"><i class="fa fa-phone"></i> <?php echo $var['nama_market']; ?><br>
                                                        &nbsp;&nbsp;&nbsp;<?php echo $var['no_hp']; ?></p>
                                                        <p style="color: white;"><i class="fa fa-location-arrow"></i> <?php echo $var['alamat']; ?><br>
                                                        <?php echo $var['kota']; ?></p>
                                                    </div>
                                                </div>
                                                <div class="post-admin">
                                                    <a href="#" title="">
                                                        <a href="tel:<?php echo $var['no_hp']; ?>"><button class="btn btn-success" title="Call" style="font-size: 25px; border-radius: 50%;"><i class="fa fa-phone"></i></button></a>
                                                        <span>Posted by <i>Admin</i></span>
                                                    </a>
                                                </div>
                                            </div><!-- Blog Post -->
                                        </div>
                                        <?php
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="block">
            <div class="heading4">
                <h2>OUR LOCATION</h2>
            </div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d494.5692421902478!2d109.35652099999666!3d-7.403771469909472!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6559985d17a36d%3A0x1f3a144713d8cab6!2sNasmoco+Toyota+Purbalingga+Div.+Sales!5e0!3m2!1sen!2sid!4v1563328069337!5m2!1sen!2sid" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
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

    <script src="js/rs-plugin/js/jquery.themepunch.tools.min.js"></script>   
    <script src="js/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            "use strict";
            jQuery('.tp-banner').show().revolution({
                dottedOverlay: "none",
                delay: 16000,
                startwidth: 1170,
                startheight: 300,
                hideThumbs: 200,
                thumbWidth: 100,
                thumbHeight: 50,
                thumbAmount: 5,
                navigationType: "bullet",
                navigationArrows: "solo",
                navigationStyle: "preview1",
                touchenabled: "on",
                onHoverStop: "on",
                swipe_velocity: 0.7,
                swipe_min_touches: 1,
                swipe_max_touches: 1,
                drag_block_vertical: false,
                parallax: "mouse",
                parallaxBgFreeze: "on",
                parallaxLevels: [7, 4, 3, 2, 5, 4, 3, 2, 1, 0],
                keyboardNavigation: "off",
                navigationHAlign: "center",
                navigationVAlign: "bottom",
                navigationHOffset: 0,
                navigationVOffset: 20,
                soloArrowLeftHalign: "left",
                soloArrowLeftValign: "center",
                soloArrowLeftHOffset: 20,
                soloArrowLeftVOffset: 0,
                soloArrowRightHalign: "right",
                soloArrowRightValign: "center",
                soloArrowRightHOffset: 20,
                soloArrowRightVOffset: 0,
                shadow: 0,
                fullWidth: "on",
                fullScreen: "off",
                spinner: "spinner4",
                stopLoop: "off",
                stopAfterLoops: -1,
                stopAtSlide: -1,
                shuffle: "off",
                autoHeight: "off",
                forceFullWidth: "off",
                hideThumbsOnMobile: "off",
                hideNavDelayOnMobile: 1500,
                hideBulletsOnMobile: "off",
                hideArrowsOnMobile: "off",
                hideThumbsUnderResolution: 0,
                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLilmit: 0,
                startWithSlide: 0,
                videoJsPath: "rs-plugin/videojs/",
                fullScreenOffsetContainer: ""
            });

            $(".carousel-prop").owlCarousel({
                autoplay: true,
                autoplayTimeout: 3000,
                smartSpeed: 2000,
                loop: true,
                dots: true,
                nav: false,
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

            $(".carousel").owlCarousel({
                autoplay: true,
                autoplayTimeout: 3000,
                smartSpeed: 2000,
                loop: false,
                dots: false,
                nav: true,
                margin: 0,
                items: 3
            });

            $(".carousel-client").owlCarousel({
                autoplay: true,
                autoplayTimeout: 3000,
                smartSpeed: 2000,
                loop: false,
                dots: false,
                nav: true,
                margin: 30,
                items: 5,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: true
                    },
                    600: {
                        items: 3,
                        nav: true
                    },
                    1000: {
                        items: 5,
                        nav: true,
                        loop: false
                    }
                }
            });

        });
    </script>

</body>
</html>