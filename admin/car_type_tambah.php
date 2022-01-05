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
                     <h2>Tambah Car Type</h2>   
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
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                <form action="car_type_tambah_input.php" method="post" enctype="multipart/form-data" role="form">
                                    <div class="form-group">
                                    <label>ID Type</label>
                                    <?php 
                                    include "../koneksi/koneksi.php";
                                    // membuat query max
                                    $carikode = mysqli_query($koneksi, "select max(id_type) from showroom_detail") or die (mysqli_error());
                                    // menjadikannya array
                                    $datakode = mysqli_fetch_array($carikode);
                                    // jika $datakode
                                    if ($datakode) {
                                    $nilaikode = substr($datakode[0], 1);
                                    // menjadikan $nilaikode ( int )
                                    $kode = (int) $nilaikode;
                                    // setiap $kode di tambah 1
                                    $kode = $kode + 1;
                                    $kode_otomatis = "T".str_pad($kode, 5, "0", STR_PAD_LEFT);
                                    } else {
                                    $kode_otomatis = "T00001";
                                    }
                                    echo'
                                        <input class="form-control" type="text" name="id_type" value="'.$kode_otomatis.'" readonly>
                                    ';?>
                                    </div>
                                    <div class="form-group">
                                    <label>Nama Mobil</label>
                                        <select name="id_mobil" class="form-control">
                                            <option selected="selected">-- Nama Mobil --</option>
                                            <?php 
                                            include "../koneksi/koneksi.php";
                                            $query=mysqli_query($koneksi, "SELECT * FROM showroom ORDER BY nama ASC");
                                            while($var=mysqli_fetch_array($query))
                                            {
                                            ?>
                                            <option value="<?php echo $var['id_mobil']; ?>"><?php echo $var['nama']; ?></option>
                                            <?php 
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                    <label>Type Mobil</label>
                                        <input class="form-control" type="text" name="type" placeholder="Type Mobil">
                                    </div>
                                    <div class="form-group">
                                    <label>Jenis</label>
                                        <select class="form-control" name="jenis">
                                            <option selected="selected">-- Jenis Mobil --</option>
                                            <option value="Passenger">Passenger</option>
                                            <option value="Truck">Truck</option>
                                            <option value="Pick Up">Pick Up</option>
                                        </select>
                                    </div>
                                    <label>CC</label>
                                    <div class="form-group input-group">
                                        <input class="form-control" type="text" name="cc" placeholder="CC" autocomplete="Off">
                                        <span class="input-group-addon">CC</span>
                                    </div>
                                    <div class="form-group">
                                    <label>Bahan Bakar</label>
                                        <select class="form-control" name="bbm">
                                            <option selected="selected">-- Bahan Bakar --</option>
                                            <option value="Bensin">Bensin</option>
                                            <option value="Solar">Solar</option>
                                            <option value="Bensin / Solar">Bensin / Solar</option>
                                        </select>
                                    </div>
                                    </div>
                                    <div class="col-lg-6">
                                    <div class="form-group">
                                    <label>Jumlah Penumpang</label>
                                        <input class="form-control" type="text" name="penumpang" placeholder="Jumlah Penumpang" autocomplete="Off">
                                    </div>
                                    <div class="form-group">
                                    <label>Harga</label>
                                        <input class="form-control" type="text" name="harga" id="rupiah1" placeholder="Harga" autocomplete="Off">
                                    </div>
                                    <div class="form-group">
                                    <label>DP</label>
                                        <input class="form-control" type="text" name="dp" id="rupiah2" placeholder="DP" autocomplete="Off">
                                    </div>
                                    <div class="form-group">
                                    <label>Cicilan</label>
                                        <input class="form-control" type="text" name="cicil" id="rupiah3" placeholder="Cicilan" autocomplete="Off">
                                    </div>
                                    <label>Jangka Waktu</label>
                                    <div class="form-group input-group">
                                        <input class="form-control" type="text" name="jangka_waktu" placeholder="Jangka Waktu" autocomplete="Off">
                                        <span class="input-group-addon">/ Bln</span>
                                    </div>
                                    <div class="form-group">
                                    <label>Promo</label>
                                        <select class="form-control" name="status">
                                            <option selected="selected">-- Pilih --</option>
                                            <option value="Promo">Promo</option>
                                            <option value="-">-</option>
                                        </select>
                                    </div>
                                    <button type="submit" name="save" class="btn btn-success">Save</button>
                                    <button type="reset" class="btn btn-warning">Reset</button>
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Form Elements -->
                </div>
                </div>
                <!-- /. ROW  -->
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
<!-- PART -->
<?php
include "part/rupiah.php";
include "part/logout_modal.php";
?>       
   
</body>
</html>
