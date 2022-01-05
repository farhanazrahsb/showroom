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
                            <a href="car_type.php" class="active-menu"><i class="fa fa-plus fa-fw"></i> Car Type</a>
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
                     <h2>Edit Car Type</h2>   
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
                        $query = mysqli_query($koneksi, "SELECT * FROM showroom_detail WHERE no = '$no'");
                        while($var=mysqli_fetch_array($query)){
                            $mobil=mysqli_fetch_array(mysqli_query($koneksi, "SELECT nama FROM showroom WHERE id_mobil='$var[id_mobil]'"));
                        ?>
                        <div class="panel-body">
                            <div class="row">
                            <div class="col-md-6">
                                <form action="car_type_edit_query.php" enctype="multipart/form-data" method="post">
                                    <input type="hidden" name="no" class="form-control" value="<?php echo $var['no']; ?>">
                                    <div class="form-group">
                                    <label>ID Type</label>
                                    <input type="text" name="id_type" class="form-control" value="<?php echo $var['id_type']; ?>" readonly>
                                    </div>
                                    <div class="form-group">
                                    <label>Nama Mobil</label>
                                        <select class="form-control" name="id_mobil" readonly>
                                            <option value="<?php echo $var['id_mobil']; ?>"><?php echo $mobil['nama']; ?></option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                    <label>Type Mobil</label>
                                    <input type="text" name="type" class="form-control" value="<?php echo $var['type']; ?>" autocomplete="Off">
                                    </div>
                                    <div class="form-group">
                                    <label>Jenis</label>
                                        <select class="form-control" name="jenis">
                                            <option selected="selected"><?php echo $var['jenis']; ?></option>
                                            <option></option>
                                            <option value="Passenger">Passenger</option>
                                            <option value="Truck">Truck</option>
                                            <option value="Pick Up">Pick Up</option>
                                        </select>
                                    </div>
                                    <label>CC</label>
                                    <div class="form-group input-group">
                                    <input type="text" name="cc" class="form-control" value="<?php echo $var['cc']; ?>" autocomplete="Off">
                                    <span class="input-group-addon">CC</span>
                                    </div>
                                    <div class="form-group">
                                    <label>Bahan Bakar</label>
                                        <select class="form-control" name="bbm">
                                            <option selected="selected"><?php echo $var['bbm']; ?></option>
                                            <option></option>
                                            <option value="Bensin">Bensin</option>
                                            <option value="Solar">Solar</option>
                                            <option value="Bensin / Solar">Bensin / Solar</option>
                                        </select>
                                    </div>
                                    </div>
                                    <div class="col-lg-6">
                                    <div class="form-group">
                                    <label>Jumlah Penumpang</label>
                                    <input type="text" name="penumpang" class="form-control" value="<?php echo $var['penumpang']; ?>" autocomplete="Off">
                                    </div>
                                    <div class="form-group">
                                    <label>Harga</label>
                                    <input type="text" name="harga" class="form-control" id="rupiah1" value="<?php echo $var['harga']; ?>" autocomplete="Off">
                                    </div>
                                    <div class="form-group">
                                    <label>DP</label>
                                    <input type="text" name="dp" class="form-control" id="rupiah2" value="<?php echo $var['dp']; ?>" autocomplete="Off">
                                    </div>
                                    <div class="form-group">
                                    <label>Cicilan</label>
                                    <input type="text" name="cicil" class="form-control" id="rupiah3" value="<?php echo $var['cicil']; ?>" autocomplete="Off">
                                    </div>
                                    <label>Jangka Waktu</label>
                                    <div class="form-group input-group">
                                    <input type="text" name="jangka_waktu" class="form-control" value="<?php echo $var['jangka_waktu']; ?>" autocomplete="Off">
                                    <span class="input-group-addon">/ Bln</span>
                                    </div>
                                    <div class="form-group">
                                    <label>Promo</label>
                                        <select class="form-control" name="status">
                                            <option selected="selected"><?php echo $var['status']; ?></option>
                                            <option></option>
                                            <option value="Promo">Promo</option>
                                            <option value="-">-</option>
                                        </select>
                                    </div>
                                    <input type="submit" class="btn btn-success" value="Update">
                                    <a href="car_type.php" class="btn btn-warning">Cancel</a>
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
include "part/rupiah.php";
include "part/logout_modal.php";
?>
    
</body>
</html>
