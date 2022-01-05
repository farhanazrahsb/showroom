<?php 
include "../koneksi/koneksi.php";
$no 		  			= $_POST['no'];
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

$query = mysqli_query($koneksi, "UPDATE keamanan SET  id_mobil = '$id_mobil', id_type = '$id_type', alarm = '$alarm', abs = '$abs', kunci_sentral = '$kunci_sentral', child_lock = '$child_lock', airbag_kemudi = '$airbag_kemudi', airbag_depan = '$airbag_depan', airbag_samping = '$airbag_samping', esp = '$esp', occupant_protect = '$occupant_protect', child_protect = '$child_protect', pedestrian_protect = '$pedestrian_protect', overall_rating = '$overall_rating', sabuk_depan = '$sabuk_depan', sabuk_belakang = '$sabuk_belakang', sabuk_pretensioner = '$sabuk_pretensioner', immobiliser = '$immobiliser', sensor_hujan = '$sensor_hujan', sensor_parkir = '$sensor_parkir', spion_belakang = '$spion_belakang' WHERE no='$no'");
 
if ($query){
echo "<script>alert('Berhasil Mengupdate')</script>";
echo "<meta http-equiv='refresh' content='1 url=keamanan.php'>";
}else{
echo "<script>alert('Gagal Mengupdate')</script>";
echo "<meta http-equiv='refresh' content='1 url=keamanan.php'>";
}
?>