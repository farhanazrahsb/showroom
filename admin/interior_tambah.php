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
                            <a href="interior.php" class="active-menu"><i class="fa fa-plus fa-fw"></i> Interior</a>
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
                     <h2>Tambah Interior</h2>   
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
                                <form action="interior_tambah_input.php" method="post" enctype="multipart/form-data" role="form">
                                    <div class="form-group">
                                    <label>Nama Mobil</label>
                                        <select name="id_mobil" class="form-control" id="id_mobil">
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
                                        <select name="id_type" class="form-control" id="id_type">
                                            <option selected="selected">-- Type Mobil --</option>
                                    </select>
                                    </div>
                                    <div class="form-group">
                                    <label>Socket Aksesoris</label>
                                        <input class="form-control" type="text" name="socket" placeholder="Socket Aksesoris" autocomplete="Off">
                                    </div>
                                    <div class="form-group">
                                    <label>Asbak</label>
                                        <input class="form-control" type="text" name="asbak" placeholder="Asbak" autocomplete="Off">
                                    </div>
                                    <div class="form-group">
                                    <label>Saku Pintu</label>
                                        <input class="form-control" type="text" name="saku_pintu" placeholder="Saku Pintu" autocomplete="Off">
                                    </div>
                                    <div class="form-group">
                                    <label>Saku Pintu Belakang</label>
                                        <input class="form-control" type="text" name="saku_belakang" placeholder="Saku Pintu Belakang" autocomplete="Off">
                                    </div>
                                    <div class="form-group">
                                    <label>Foldable Grip Assist</label>
                                        <input class="form-control" type="text" name="foldable" placeholder="Foldable Grip Assist" autocomplete="Off">
                                    </div>
                                    <div class="form-group">
                                    <label>Sandar Kepala Depan</label>
                                        <input class="form-control" type="text" name="sandar_depan" placeholder="Sandar Kepala Depan" autocomplete="Off">
                                    </div>
                                    <div class="form-group">
                                    <label>Sandar Kepala Belakang</label>
                                        <input class="form-control" type="text" name="sandar_belakang" placeholder="Sandar Kepala Belakang" autocomplete="Off">
                                    </div>
                                    </div>
                                    <div class="col-lg-6">
                                    <div class="form-group">
                                    <label>Laci Depan</label>
                                        <input class="form-control" type="text" name="laci_dpn" placeholder="Laci Depan" autocomplete="Off">
                                    </div>
                                    <div class="form-group">
                                    <label>Kaca Spion Dalam</label>
                                        <input class="form-control" type="text" name="spion_dlm" placeholder="Kaca Spion Dalam" autocomplete="Off">
                                    </div>
                                    <div class="form-group">
                                    <label>Jok Kulit</label>
                                        <input class="form-control" type="text" name="jok_kulit" placeholder="Jok Kulit" autocomplete="Off">
                                    </div>
                                    <div class="form-group">
                                    <label>Kursi Belakang(3 Baris)</label>
                                        <input class="form-control" type="text" name="kursi_belakang" placeholder="Kursi Belakang(3 Baris)" autocomplete="Off">
                                    </div>
                                    <div class="form-group">
                                    <label>Kursi Belakang Dapat Dilipat</label>
                                        <input class="form-control" type="text" name="kursi_belakang_lipat" placeholder="Kursi Belakang Dapat Dilipat" autocomplete="Off">
                                    </div>
                                    <div class="form-group">
                                    <label>Roda Kemudi</label>
                                        <input class="form-control" type="text" name="kemudi" placeholder="Roda Kemudi" autocomplete="Off">
                                    </div>
                                    <div class="form-group">
                                    <label>Tachometer</label>
                                        <input class="form-control" type="text" name="tachometer" placeholder="Tachometer" autocomplete="Off">
                                    </div>
                                    <div class="form-group">
                                    <label>Kaca Hias</label>
                                        <input class="form-control" type="text" name="kaca_hias" placeholder="Kaca Hias" autocomplete="Off">
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
<!-- CHAINED -->
<script type="text/javascript">
$(function(){
$('#id_mobil').change(function(){
$('#id_type').load('part/get_type.php?id_mobil=' + $(this).val(),function(responseTxt,statusTxt,xhr)
{
    if(statusTxt=="success")
    $('.loading').remove();
});
return false;
});
});
</script>
<!-- PART -->
<?php
include "part/logout_modal.php";
?>    
   
</body>
</html>
