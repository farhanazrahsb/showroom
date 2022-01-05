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


        <div class="inner-head overlap">
            <div class="container">
                <div class="inner-content">
                    <span><i class="fa fa-car"></i></span>
                    <h2>SHOWROOM - LIST</h2>
                    <ul>
                        <li><a href="index.php" title="">HOME</a></li>
                        <li><a href="#" title="">SHOWROOM - LIST</a></li>
                    </ul>
                </div>
            </div>
        </div><!-- inner Head -->

        <section class="block">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">	
                        <div class="row">
                            <div class="col-md-12 column">                               
                                <div class="vehiculs-sec">
                                    <div class="vehiculs-list">
                                        <div class="vehiculs-content vehiculs-grid">
                                            <?php
                                            include "koneksi/koneksi.php";
                                            $id_mobil = $_GET['id_mobil'];
                                            $query = mysqli_query($koneksi, "SELECT * FROM showroom_detail WHERE id_mobil = '$id_mobil'");
                                            while ($var=mysqli_fetch_array($query)) {
                                                $gallery=mysqli_fetch_array(mysqli_query($koneksi, "SELECT gambar FROM gallery WHERE id_mobil='$var[id_mobil]'"));
                                                $mobil=mysqli_fetch_array(mysqli_query($koneksi, "SELECT nama FROM showroom WHERE id_mobil='$var[id_mobil]'"));
                                            ?>
                                            <div class="vehicul-grid ">                      
                                                <div class="to-thumb col-sm-3 p0">
                                                    <img src="admin/images/showroom_detail/<?php echo $gallery['gambar'];?>" alt="">      
                                                    <span class="spn-status"><?php echo $var['status']; ?> </span>
                                                    <a class="proeprty-sh-more-list" href="list_detail.php?&id_type=<?php echo $var['id_type']; ?>"><i class="fa fa-angle-double-right"> </i></a>
                                                </div>
                                                <div class="to-details col-sm-5 p0">
                                                    <div class="vehicul-top-cnt">
                                                        <h3><a href="list_detail.php?&id_type=<?php echo $var['id_type']; ?>" title="">Toyota <?php echo $mobil['nama']; ?></a></h3>
                                                        <h3><?php echo $var['type']; ?></h3>
                                                        <p><b><?php echo $var['jenis']; ?></b> | <?php echo $var['cc']; ?> CC | <?php echo $var['bbm']; ?> | <?php echo $var['penumpang']; ?> Penumpang</p>
                                                    </div>
                                                </div>
                                                <div class="to-details col-sm-4 p0">
                                                    <div class="vehicul-top-cnt">
                                                        <h3><span class="price"><?php echo $var['harga']; ?></span></h3><h6 style="color: blue;">(Harga OTR)</h6>
                                                        <p></p>
                                                        <p>DP Mulai : <b><?php echo $var['dp']; ?></b><br>
                                                        Anggsuran Mulai : <b><?php echo $var['cicil']; ?></b><br>
                                                        Jangka Waktu : <b><?php echo $var['jangka_waktu']; ?></b> /Bln</p>
                                                    </div>
                                                </div>
                                            </div><!-- vehicul Box -->
                                            <?php
                                            }
                                            ?> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <aside class="col-md-12 column">
                                <div class="search_widget widget">
                                    <div class="heading2">
                                        <h3>About Car</h3>
                                    </div>
                                    <div class="search-form">
                                    <?php
                                    $id_mobil = $_GET['id_mobil'];
                                    include "koneksi/koneksi.php";
                                    $query = mysqli_query($koneksi, "SELECT * FROM showroom WHERE id_mobil = '$id_mobil'");
                                    while ($var=mysqli_fetch_array($query)) {
                                    ?>
                                    <div class="readmore">
                                    <?php echo $var['tentang']; ?>
                                    </div>
                                    <?php
                                    }
                                    ?> 
                                    </div><!-- Services Sec -->
                                </div><!-- Category Widget -->
                            </aside>
                        </div>

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
    <!-- EXPANDER SCRIPTS -->
    <script src="admin/assets/js/jquery.expander.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            "use strict";
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