<?php
include "../koneksi/koneksi.php";
if (isset($_POST['save']))
{
$id_mobil	  			= $_POST['id_mobil'];
$id_type	  			= $_POST['id_type'];
$alarm 					= $_POST['alarm'];
$abs	  	  			= $_POST['abs'];
$kunci_sentral			= $_POST['kunci_sentral'];
$child_lock				= $_POST['child_lock'];
$airbag_kemudi		  	= $_POST['airbag_kemudi'];
$airbag_depan	  		= $_POST['airbag_depan'];
$airbag_samping			= $_POST['airbag_samping'];
$esp					= $_POST['esp'];
$occupant_protect		= $_POST['occupant_protect'];
$child_protect			= $_POST['child_protect'];
$pedestrian_protect		= $_POST['pedestrian_protect'];
$overall_rating			= $_POST['overall_rating'];
$sabuk_depan			= $_POST['sabuk_depan'];
$sabuk_belakang			= $_POST['sabuk_belakang'];
$sabuk_pretensioner		= $_POST['sabuk_pretensioner'];
$immobiliser			= $_POST['immobiliser'];
$sensor_hujan			= $_POST['sensor_hujan'];
$sensor_parkir			= $_POST['sensor_parkir'];
$spion_belakang			= $_POST['spion_belakang'];
 
$sql = mysqli_query($koneksi, "INSERT INTO keamanan (id_mobil, id_type, alarm, abs, kunci_sentral, child_lock, airbag_kemudi, airbag_depan, airbag_samping, esp, occupant_protect, child_protect, pedestrian_protect, overall_rating, sabuk_depan, sabuk_belakang, sabuk_pretensioner, immobiliser, sensor_hujan, sensor_parkir, spion_belakang) VALUES ('$id_mobil', '$id_type', '$alarm', '$abs', '$kunci_sentral', '$child_lock', '$airbag_kemudi', '$airbag_depan', '$airbag_samping', '$esp', '$occupant_protect', '$child_protect', '$pedestrian_protect', '$overall_rating', '$sabuk_depan', '$sabuk_belakang', '$sabuk_pretensioner', '$immobiliser', '$sensor_hujan', '$sensor_parkir', '$spion_belakang')");
 
if ($sql == TRUE)
{
echo "<script>alert('Berhasil Menginput')</script>";
echo "<meta http-equiv='refresh' content='1 url=keamanan.php'>";
}else{
echo "<script>alert('Gagal Menginput')</script>";
echo "<meta http-equiv='refresh' content='1 url=keamanan_tambah.php'>";
}
}
?>