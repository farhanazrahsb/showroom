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
                    <a href="dashboard.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                    </li>
                    <li>
                    <a href="admin.php"><i class="fa fa-user fa-fw"></i> Admin</a>
                    </li>
                    <li>
                    <a href="company.php"><i class="fa fa-building fa-fw"></i> Company Profile</a>
                    </li>
                    <li>
                    <a href="#" class="active-menu"><i class="fa fa-car fa-fw"></i> Showroom<span class="fa arrow"></span></a>
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
                            <a href="keamanan.php" class="active-menu"><i class="fa fa-plus fa-fw"></i> Keamanan Dan Keselamatan</a>
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
                     <h2>Edit Keamanan Dan Keselamatan</h2>   
                    </div>
                </div>
                <!-- /. ROW  -->
                <hr />
                <div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="ibox-title"><a href="#" onclick="self.history.back()"><button class="btn btn-info"><i class="fa fa-arrow-left" title="Kembali"></i></button></a></div>
                        </div>
                        <?php
                        include "../koneksi/koneksi.php";
                        $no = $_GET['no'];
                        $query = mysqli_query($koneksi, "SELECT * FROM keamanan WHERE no = '$no'");
                        while($var=mysqli_fetch_array($query)){
                            $mobil=mysqli_fetch_array(mysqli_query($koneksi, "SELECT nama FROM showroom WHERE id_mobil='$var[id_mobil]'"));
                            $type=mysqli_fetch_array(mysqli_query($koneksi, "SELECT id_type, type FROM showroom_detail WHERE id_type='$var[id_type]'"));
                        ?>
                        <div class="panel-body">
                            <div class="row">
                            <div class="col-md-6">
                                <form action="keamanan_edit_query.php" enctype="multipart/form-data" method="post">
                                    <input type="hidden" name="no" class="form-control" value="<?php echo $var['no']; ?>">
                                    <div class="form-group">
                                    <label>Nama Mobil</label>
                                        <select class="form-control" name="id_mobil" readonly>
                                            <option value="<?php echo $var['id_mobil']; ?>"><?php echo $mobil['nama']; ?></option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                    <label>Type Mobil</label>
                                        <select class="form-control" name="id_type" readonly>
                                            <option value="<?php echo $var['id_type']; ?>"><?php echo $type['type']; ?> - <?php echo $mobil['nama']; ?></option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                    <label>Alarm</label>
                                        <input class="form-control" type="text" name="alarm" value="<?php echo $var['alarm']; ?>" autocomplete="Off">
                                    </div>
                                    <div class="form-group">
                                    <label>Anti Lock Breaking System(ABS)</label>
                                        <input class="form-control" type="text" name="abs" value="<?php echo $var['abs']; ?>" autocomplete="Off">
                                    </div>
                                    <div class="form-group">
                                    <label>Kunci Sentral/Central Lock</label>
                                        <input class="form-control" type="text" name="kunci_sentral" value="<?php echo $var['kunci_sentral']; ?>" autocomplete="Off">
                                    </div>
                                    <div class="form-group">
                                    <label>Child Lock</label>
                                        <input class="form-control" type="text" name="child_lock" value="<?php echo $var['child_lock']; ?>" autocomplete="Off">
                                    </div>
                                    <div class="form-group">
                                    <label>Bantal Udara/Airbag Pengemudi</label>
                                        <input class="form-control" type="text" name="airbag_kemudi" value="<?php echo $var['airbag_kemudi']; ?>" autocomplete="Off">
                                    </div>
                                    <div class="form-group">
                                    <label>Bantal Udara/Airbag Depan</label>
                                        <input class="form-control" type="text" name="airbag_depan" value="<?php echo $var['airbag_depan']; ?>" autocomplete="Off">
                                    </div>
                                    <div class="form-group">
                                    <label>Bantal Udara/Airbag Samping</label>
                                        <input class="form-control" type="text" name="airbag_samping" value="<?php echo $var['airbag_samping']; ?>" autocomplete="Off">
                                    </div>
                                    <div class="form-group">
                                    <label>Electronic Stability Program(ESP)</label>
                                        <input class="form-control" type="text" name="esp" value="<?php echo $var['esp']; ?>" autocomplete="Off">
                                    </div>
                                    <div class="form-group">
                                    <label>Euro NCAP Occupant Protection</label>
                                        <input class="form-control" type="text" name="occupant_protect" value="<?php echo $var['occupant_protect']; ?>" autocomplete="Off">
                                    </div>
                                    </div>
                                    <div class="col-lg-6">
                                    <div class="form-group">
                                    <label>Euro NCAP Child Protection</label>
                                        <input class="form-control" type="text" name="child_protect" value="<?php echo $var['child_protect']; ?>" autocomplete="Off">
                                    </div>
                                    <div class="form-group">
                                    <label>Euro NCAP Pedestrian Protection</label>
                                        <input class="form-control" type="text" name="pedestrian_protect" value="<?php echo $var['pedestrian_protect']; ?>" autocomplete="Off">
                                    </div>
                                    <div class="form-group">
                                    <label>Euro NCAP Overall Rating</label>
                                        <input class="form-control" type="text" name="overall_rating" value="<?php echo $var['overall_rating']; ?>" autocomplete="Off">
                                    </div>
                                    <div class="form-group">
                                    <label>Sabuk Pengaman Depan</label>
                                        <input class="form-control" type="text" name="sabuk_depan" value="<?php echo $var['sabuk_depan']; ?>" autocomplete="Off">
                                    </div>
                                    <div class="form-group">
                                    <label>Sabuk Pengaman Belakang</label>
                                        <input class="form-control" type="text" name="sabuk_belakang" value="<?php echo $var['sabuk_belakang']; ?>" autocomplete="Off">
                                    </div>
                                    <div class="form-group">
                                    <label>Sabuk Pengaman Pretensioner</label>
                                        <input class="form-control" type="text" name="sabuk_pretensioner" value="<?php echo $var['sabuk_pretensioner']; ?>" autocomplete="Off">
                                    </div>
                                    <div class="form-group">
                                    <label>Immobiliser</label>
                                        <input class="form-control" type="text" name="immobiliser" value="<?php echo $var['immobiliser']; ?>" autocomplete="Off">
                                    </div>
                                    <div class="form-group">
                                    <label>Sensor Hujan</label>
                                        <input class="form-control" type="text" name="sensor_hujan" value="<?php echo $var['sensor_hujan']; ?>" autocomplete="Off">
                                    </div>
                                    <div class="form-group">
                                    <label>Sensor Parkir</label>
                                        <input class="form-control" type="text" name="sensor_parkir" value="<?php echo $var['sensor_parkir']; ?>" autocomplete="Off">
                                    </div>
                                    <div class="form-group">
                                    <label>Kaca Spion Belakang/Rear Reflector</label>
                                        <input class="form-control" type="text" name="spion_belakang" value="<?php echo $var['spion_belakang']; ?>" autocomplete="Off">
                                    </div>
                                    <input type="submit" class="btn btn-success" value="Update">
                                    <a href="keamanan.php" class="btn btn-warning">Cancel</a>
                                </form>
                            </div>
                        </div>
                        </div>
                        <?php 
                        } 
                        ?>
                    </div>
                    <!-- End Form Elements -->
                </div>
                </div>
            </div>
        </div>         
    </div>
    <!-- /. WRAPPER  -->
    
<!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
<!-- JQUERY SCRIPTS -->
<script src="assets/js/jquery-1.10.2.js"></script>
<!-- BOOTSTRAP SCRIPTS -->
<script src="assets/js/bootstrap.min.js"></script>
<!-- METISMENU SCRIPTS -->
<script src="assets/js/jquery.metisMenu.js"></script>
<!-- PART -->
<?php
include "part/logout_modal.php";
?>
    
</body>
</html>
