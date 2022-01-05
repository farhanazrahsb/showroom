<?php
include "part/session.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>TOYOTA | Purbalingga Admin</title>
    <link rel="shortcut icon" href="../img/favicon.png"/>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet"/>
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet"/>
    <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet"/>
    <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet"/>
    <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'/>
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="dashboard.php">TOYOTA</a>
            </div>
            <div style="color: white; padding: 15px 50px 5px 50px; float: right; font-size: 16px;">
            <?php
            include "../koneksi/koneksi.php";
            $username = $_SESSION['username'];
            $query = mysqli_query ($koneksi, "SELECT * FROM admin where username = '$username'");
            while ($var=mysqli_fetch_array($query)) {
            ?>
            <?php echo $var['nama'];?> &nbsp; 
            <?php
            }
            ?>
            <a href="logout.php" onclick="return konfirmasi()" class="btn btn-danger square-btn-adjust"><i class="fa fa-sign-out fa-fw"></i> Logout</a> 
            </div>
        </nav>   
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                    <a href="dashboard.php" class="active-menu"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                    </li>
                    <li>
                    <a href="admin.php"><i class="fa fa-user fa-fw"></i> Admin</a>
                    </li>
                    <li>
                    <a href="company.php"><i class="fa fa-building fa-fw"></i> Company Profile</a>
                    </li>
                    <li>
                    <a href="#"><i class="fa fa-car fa-fw"></i> Showroom<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                            <a href="car.php"><i class="fa fa-plus fa-fw"></i> Cars</a>
                            </li>
                            <li>
                            <a href="car_type.php"><i class="fa fa-plus fa-fw"></i> Car Type</a>
                            </li>
                            <li>
                            <a href="car_gallery.php"><i class="fa fa-plus fa-fw"></i> Car Gallery</a>
                            </li>
                            <li>
                            <a href="mesin.php"><i class="fa fa-plus fa-fw"></i> Mesin</a>
                            </li>
                            <li>
                            <a href="transmisi.php"><i class="fa fa-plus fa-fw"></i> Transmisi</a>
                            </li>
                            <li>
                            <a href="exterior.php"><i class="fa fa-plus fa-fw"></i> Exterior</a>
                            </li>
                            <li>
                            <a href="interior.php"><i class="fa fa-plus fa-fw"></i> Interior</a>
                            </li>
                            <li>
                            <a href="dimensi.php"><i class="fa fa-plus fa-fw"></i> Dimensi</a>
                            </li>
                            <li>
                            <a href="kenyamanan.php"><i class="fa fa-plus fa-fw"></i> Kenyamanan</a>
                            </li>
                            <li>
                            <a href="keamanan.php"><i class="fa fa-plus fa-fw"></i> Keamanan Dan Keselamatan</a>
                            </li>
                            <li>
                            <a href="parts.php"><i class="fa fa-plus fa-fw"></i> Parts</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                    <a href="service.php"><i class="fa fa-wrench fa-fw"></i> Service</a>
                    </li>
                    <li>
                    <a href="insurance.php"><i class="fa fa-users fa-fw"></i> Partner Insurance</a>
                    </li>
                </ul>
            </div>
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                    <h2>TOYOTA | Purbalingga Admin Dashboard</h2>   
                    <?php
                    include "../koneksi/koneksi.php";
                    $username = $_SESSION['username'];
                    $query = mysqli_query ($koneksi, "SELECT * FROM admin where username = '$username'");
                    while ($var=mysqli_fetch_array($query)) {
                    ?>
                    <h5>Welcome <b><?php echo $var['nama'];?></b>, Nice to see you back. </h5>
                    <?php
                    }
                    ?>
                    </div>
                </div>              
                <!-- /. ROW  -->
                <hr/>
                <div class="row">
                    <a href="car.php" style="color: black;">
                    <div class="col-md-3 col-sm-6 col-xs-6">           
                    <div class="panel panel-back noti-box">
                    <span class="icon-box bg-color-red set-icon">
                    <i class="fa fa-car"></i>
                    </span>
                    <div class="text-box" >
                    <p class="main-text">
                    <?php
                    include '../koneksi/koneksi.php';
                    $sql = "SELECT * FROM showroom";
                    $query = mysqli_query($koneksi, $sql);
                    $count = mysqli_num_rows($query);
                    if ($count<=0) {
                    echo "0";
                    }else{
                    echo "$count";
                    }  
                    ?> 
                    </p>
                    <p class="text-muted">Cars</p>
                    </div>
                    </div>
                    </div>
                    </a>

                    <a href="service.php" style="color: black;">
                    <div class="col-md-3 col-sm-6 col-xs-6">           
                    <div class="panel panel-back noti-box">
                    <span class="icon-box bg-color-green set-icon">
                    <i class="fa fa-wrench"></i>
                    </span>
                    <div class="text-box" >
                    <p class="main-text">
                    <?php
                    include '../koneksi/koneksi.php';
                    $sql = "SELECT * FROM service";
                    $query = mysqli_query($koneksi, $sql);
                    $count = mysqli_num_rows($query);
                    if ($count<=0) {
                    echo "0";
                    }else{
                    echo "$count";
                    }  
                    ?> 
                    </p>
                    <p class="text-muted">Service</p>
                    </div>
                    </div>
                    </div>
                    </a>

                    <a href="insurance.php" style="color: black;">
                    <div class="col-md-3 col-sm-6 col-xs-6">           
                    <div class="panel panel-back noti-box">
                    <span class="icon-box bg-color-blue set-icon">
                    <i class="fa fa-users"></i>
                    </span>
                    <div class="text-box" >
                    <p class="main-text">
                    <?php
                    include '../koneksi/koneksi.php';
                    $sql = "SELECT * FROM insurance";
                    $query = mysqli_query($koneksi, $sql);
                    $count = mysqli_num_rows($query);
                    if ($count<=0) {
                    echo "0";
                    }else{
                    echo "$count";
                    }  
                    ?> 
                    </p>
                    <p class="text-muted">Partner</p>
                    </div>
                    </div>
                    </div>
                    </a>

                    <a href="visitor.php" style="color: black;">
                    <div class="col-md-3 col-sm-6 col-xs-6">           
                    <div class="panel panel-back noti-box">
                    <span class="icon-box bg-color-brown set-icon">
                    <i class="fa fa-eye"></i>
                    </span>
                    <div class="text-box" >
                    <p class="main-text">
                    <?php
                    include '../koneksi/koneksi.php';
                    $sql = "SELECT * FROM visitor";
                    $query = mysqli_query($koneksi, $sql);
                    $count = mysqli_num_rows($query);
                    if ($count<=0) {
                    echo "0";
                    }else{
                    echo "$count";
                    }  
                    ?> 
                    </p>
                    <p class="text-muted">View</p>
                    </div>
                    </div>
                    </div>
                    </a>
                </div>
                <!-- /. ROW  -->
                <hr/>                
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->

<!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
<!-- JQUERY SCRIPTS -->
<script src="assets/js/jquery-1.10.2.js"></script>
<!-- BOOTSTRAP SCRIPTS -->
<script src="assets/js/bootstrap.min.js"></script>
<!-- METISMENU SCRIPTS -->
<script src="assets/js/jquery.metisMenu.js"></script>
<!-- MORRIS CHART SCRIPTS -->
<script src="assets/js/morris/raphael-2.1.0.min.js"></script>
<script src="assets/js/morris/morris.js"></script>
<!-- CUSTOM SCRIPTS -->
<script src="assets/js/custom.js"></script>  
<!-- PART -->
<?php
include "part/logout_modal.php";
?>
   
</body>
</html>
