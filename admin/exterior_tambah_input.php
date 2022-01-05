<?php
include "../koneksi/koneksi.php";
if (isset($_POST['save']))
{
$id_mobil	  			= $_POST['id_mobil'];
$id_type	  			= $_POST['id_type'];
$handle 	  	  		= $_POST['handle'];
$lamp_rem	  	  		= $_POST['lamp_rem'];
$lamp_belok				= $_POST['lamp_belok'];
$lamp_kabut				= $_POST['lamp_kabut'];
$spion_auto		  		= $_POST['spion_auto'];
$kaca_depan_auto	  	= $_POST['kaca_depan_auto'];
$kaca_belakang_auto		= $_POST['kaca_belakang_auto'];
$sunroof				= $_POST['sunroof'];
$sunroof_manual			= $_POST['sunroof_manual'];
$roof_back				= $_POST['roof_back'];
$wiper_depan			= $_POST['wiper_depan'];
$wiper_belakang			= $_POST['wiper_belakang'];
$gril					= $_POST['gril'];
$spoiler_bwh			= $_POST['spoiler_bwh'];
$spoiler_belakang		= $_POST['spoiler_belakang'];
$spoiler_samping		= $_POST['spoiler_samping'];
$mufler					= $_POST['mufler'];
 
$sql = mysqli_query($koneksi, "INSERT INTO exterior (id_mobil, id_type, handle, lamp_rem, lamp_belok, lamp_kabut, spion_auto, kaca_depan_auto, kaca_belakang_auto, sunroof, sunroof_manual, roof_back, wiper_depan, wiper_belakang, gril, spoiler_bwh, spoiler_belakang, spoiler_samping, mufler) VALUES ('$id_mobil', '$id_type', '$handle', '$lamp_rem', '$lamp_belok', '$lamp_kabut', '$spion_auto', '$kaca_depan_auto', '$kaca_belakang_auto', '$sunroof', '$sunroof_manual', '$roof_back', '$wiper_depan', '$wiper_belakang', '$gril', '$spoiler_bwh', '$spoiler_belakang', '$spoiler_samping', '$mufler')");
 
if ($sql == TRUE)
{
echo "<script>alert('Berhasil Menginput')</script>";
echo "<meta http-equiv='refresh' content='1 url=exterior.php'>";
}else{
echo "<script>alert('Gagal Menginput')</script>";
echo "<meta http-equiv='refresh' content='1 url=exterior_tambah.php'>";
}
}
?>