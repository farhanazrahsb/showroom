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
                     <h2>Tambah Exterior</h2>   
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
                                <form action="exterior_tambah_input.php" method="post" enctype="multipart/form-data" role="form">
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
                                    <label>Handle Pintu Krom</label>
                                        <input class="form-control" type="text" name="handle" placeholder="Handle Pintu Krom" autocomplete="Off">
                                    </div>
                                    <div class="form-group">
                                    <label>lampu Rem Belakang Tengah</label>
                                        <input class="form-control" type="text" name="lamp_rem" placeholder="lampu Rem Belakang Tengah" autocomplete="Off">
                                    </div>
                                    <div class="form-group">
                                    <label>Lampu Tanda Belok Samping</label>
                                        <input class="form-control" type="text" name="lamp_belok" placeholder="Lampu Tanda Belok Samping" autocomplete="Off">
                                    </div>
                                    <div class="form-group">
                                    <label>Lampu Kabut</label>
                                        <input class="form-control" type="text" name="lamp_kabut" placeholder="Lampu Kabut" autocomplete="Off">
                                    </div>
                                    <div class="form-group">
                                    <label>Spion Otomatis</label>
                                        <input class="form-control" type="text" name="spion_auto" placeholder="Spion Otomatis" autocomplete="Off">
                                    </div>
                                    <div class="form-group">
                                    <label>Kaca Depan Jendela Otomatis</label>
                                        <input class="form-control" type="text" name="kaca_depan_auto" placeholder="Kaca Depan Jendela Otomatis" autocomplete="Off">
                                    </div>
                                    <div class="form-group">
                                    <label>Kaca Belakang Jendela Otomatis</label>
                                        <input class="form-control" type="text" name="kaca_belakang_auto" placeholder="Kaca Belakang Jendela Otomatis" autocomplete="Off">
                                    </div>
                                    <div class="form-group">
                                    <label>Electric Sunroof</label>
                                        <input class="form-control" type="text" name="sunroof" placeholder="Electric Sunroof" autocomplete="Off">
                                    </div>
                                    </div>
                                    <div class="col-lg-6">
                                    <div class="form-group">
                                    <label>Manual Sunroof</label>
                                        <input class="form-control" type="text" name="sunroof_manual" placeholder="Manual Sunroof" autocomplete="Off">
                                    </div>
                                    <div class="form-group">
                                    <label>Roof Back</label>
                                        <input class="form-control" type="text" name="roof_back" placeholder="Roof Back" autocomplete="Off">
                                    </div>
                                    <div class="form-group">
                                    <label>Wiper Depan</label>
                                        <input class="form-control" type="text" name="wiper_depan" placeholder="Wiper Depan" autocomplete="Off">
                                    </div>
                                    <div class="form-group">
                                    <label>Wiper Belakang</label>
                                        <input class="form-control" type="text" name="wiper_belakang" placeholder="Wiper Belakang" autocomplete="Off">
                                    </div>
                                    <div class="form-group">
                                    <label>Gril Krom</label>
                                        <input class="form-control" type="text" name="gril" placeholder="Gril Krom" autocomplete="Off">
                                    </div>
                                    <div class="form-group">
                                    <label>Spoiler Bemper Bawah</label>
                                        <input class="form-control" type="text" name="spoiler_bwh" placeholder="Spoiler Bemper Bawah" autocomplete="Off">
                                    </div>
                                    <div class="form-group">
                                    <label>Spoiler Bemper Belakang</label>
                                        <input class="form-control" type="text" name="spoiler_belakang" placeholder="Spoiler Bemper Belakang" autocomplete="Off">
                                    </div>
                                    <div class="form-group">
                                    <label>Spoiler Samping</label>
                                        <input class="form-control" type="text" name="spoiler_samping" placeholder="Spoiler Samping" autocomplete="Off">
                                    </div>
                                    <div class="form-group">
                                    <label>Mufler Cutter</label>
                                        <input class="form-control" type="text" name="mufler" placeholder="Mufler Cutter" autocomplete="Off">
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
