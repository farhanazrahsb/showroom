<?php
include "../koneksi/koneksi.php";
if (isset($_POST['save']))
{
$id_mobil	  			= $_POST['id_mobil'];
$id_type	  			= $_POST['id_type'];
$socket 	  	  		= $_POST['socket'];
$asbak	  	  			= $_POST['asbak'];
$saku_pintu				= $_POST['saku_pintu'];
$saku_belakang			= $_POST['saku_belakang'];
$foldable		  		= $_POST['foldable'];
$sandar_depan	  		= $_POST['sandar_depan'];
$sandar_belakang		= $_POST['sandar_belakang'];
$laci_dpn				= $_POST['laci_dpn'];
$spion_dlm				= $_POST['spion_dlm'];
$jok_kulit				= $_POST['jok_kulit'];
$kursi_belakang			= $_POST['kursi_belakang'];
$kursi_belakang_lipat	= $_POST['kursi_belakang_lipat'];
$kemudi					= $_POST['kemudi'];
$tachometer				= $_POST['tachometer'];
$kaca_hias				= $_POST['kaca_hias'];
 
$sql = mysqli_query($koneksi, "INSERT INTO interior (id_mobil, id_type, socket, asbak, saku_pintu, saku_belakang, foldable, sandar_depan, sandar_belakang, laci_dpn, spion_dlm, jok_kulit, kursi_belakang, kursi_belakang_lipat, kemudi, tachometer, kaca_hias) VALUES ('$id_mobil', '$id_type', '$socket', '$asbak', '$saku_pintu', '$saku_belakang', '$foldable', '$sandar_depan', '$sandar_belakang', '$laci_dpn', '$spion_dlm', '$jok_kulit', '$kursi_belakang', '$kursi_belakang_lipat', '$kemudi', '$tachometer', '$kaca_hias')");
 
if ($sql == TRUE)
{
echo "<script>alert('Berhasil Menginput')</script>";
echo "<meta http-equiv='refresh' content='1 url=interior.php'>";
}else{
echo "<script>alert('Gagal Menginput')</script>";
echo "<meta http-equiv='refresh' content='1 url=interior_tambah.php'>";
}
}
?>