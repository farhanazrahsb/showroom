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
    <!-- TABLE STYLES-->
    <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet"/>
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
                            <a href="exterior.php" class="active-menu"><i class="fa fa-plus fa-fw"></i> Exterior</a>
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
                     <h2>Exterior</h2>   
                    </div>
                </div>
                <!-- /. ROW  -->
                <hr />
                <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a href="exterior_tambah.php"><button class="btn btn-success"><i class="fa fa-plus"></i></button></a>
                        </div>
                        <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                    <th>No</th>
                                    <th>Nama Mobil</th>
                                    <th>Type Mobil</th>
                                    <th>Handle Pintu Krom</th>
                                    <th>Lampu Rem Belakang Tengah</th>
                                    <th>Lampu Tanda Belok Samping</th>
                                    <th>Lampu Kabut</th>
                                    <th>Spion Otomatis</th>
                                    <th>Kaca Depan Jendela Otomatis</th>
                                    <th>Kaca Belakang Jendela Otomatis</th>
                                    <th>Electric Sunroof</th>
                                    <th>Manual Sunroof</th>
                                    <th>Roof Back</th>
                                    <th>Wiper Depan</th>
                                    <th>Wiper Belakang</th>
                                    <th>Gril Krom</th>
                                    <th>Spoiler Bemper Bawah</th>
                                    <th>Spoiler Bemper Belakang</th>
                                    <th>Spoiler Samping</th>
                                    <th>Mufler Cutter</th>
                                    <th><center>Edit</center></th>
                                    <th><center>Delete</center></th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                include "../koneksi/koneksi.php";
                                $no = 1;
                                $query = mysqli_query($koneksi, "SELECT * FROM exterior ORDER BY id_type ASC");
                                while ($var=mysqli_fetch_array($query)) {
                                    $mobil=mysqli_fetch_array(mysqli_query($koneksi, "SELECT nama FROM showroom WHERE id_mobil='$var[id_mobil]'"));
                                    $type=mysqli_fetch_array(mysqli_query($koneksi, "SELECT type FROM showroom_detail WHERE id_type='$var[id_type]'"));
                                ?>
                                    <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $mobil['nama']; ?></td>
                                    <td><?php echo $type['type']; ?></td>
                                    <td><?php echo $var['handle']; ?></td>
                                    <td><?php echo $var['lamp_rem']; ?></td>
                                    <td><?php echo $var['lamp_belok']; ?></td>
                                    <td><?php echo $var['lamp_kabut']; ?></td>
                                    <td><?php echo $var['spion_auto']; ?></td>
                                    <td><?php echo $var['kaca_depan_auto']; ?></td>
                                    <td><?php echo $var['kaca_belakang_auto']; ?></td>
                                    <td><?php echo $var['sunroof']; ?></td>
                                    <td><?php echo $var['sunroof_manual']; ?></td>
                                    <td><?php echo $var['roof_back']; ?></td>
                                    <td><?php echo $var['wiper_depan']; ?></td>
                                    <td><?php echo $var['wiper_belakang']; ?></td>
                                    <td><?php echo $var['gril']; ?></td>
                                    <td><?php echo $var['spoiler_bwh']; ?></td>
                                    <td><?php echo $var['spoiler_belakang']; ?></td>
                                    <td><?php echo $var['spoiler_samping']; ?></td>
                                    <td><?php echo $var['mufler']; ?></td>
                                    <td align="center">
                                    <a href="exterior_edit.php?&no=<?php echo $var['no']; ?>"><button class="btn btn-warning" title="Detail"><i class="fa fa-edit"></i></button></a>
                                    </td>
                                    <td align="center">
                                    <a href="#" onclick="confirm_modal('exterior_delete.php?&no=<?php echo $var['no']; ?>');"><button class="btn btn-danger" title="Delete"><i class="fa fa-trash"></i></button></a>
                                    </td>
                                    </tr>
                                <?php
                                }
                                ?>
                                </tbody>
                            </table>
                        </div>
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
                </div>
                <!-- /. ROW  -->
            </div>
        </div>
        <!-- /. PAGE INNER  -->
    </div>
    <!-- /. PAGE WRAPPER  -->
    <!-- /. WRAPPER  -->

<!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
<!-- JQUERY SCRIPTS -->
<script src="assets/js/jquery-1.10.2.js"></script>
<!-- BOOTSTRAP SCRIPTS -->
<script src="assets/js/bootstrap.min.js"></script>
<!-- METISMENU SCRIPTS -->
<script src="assets/js/jquery.metisMenu.js"></script>
<!-- DATA TABLE SCRIPTS -->
<script src="assets/js/dataTables/jquery.dataTables.js"></script>
<script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
<script>
    $(document).ready(function () {
    $('#dataTables-example').dataTable();
    });
</script>   
<!-- PART -->
<?php
include "part/delete_modal.php";
include "part/logout_modal.php";
?>
   
</body>
</html>