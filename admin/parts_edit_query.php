<?php 
include "../koneksi/koneksi.php";
$no 		  			= $_POST['no'];
$id_mobil	  			= $_POST['id_mobil'];
$id_type	  			= $_POST['id_type'];
$velg 					= $_POST['velg'];
$steering	  	  		= $_POST['steering'];
$ukuran_ban				= $_POST['ukuran_ban'];
$rem_depan				= $_POST['rem_depan'];
$rem_belakang		  	= $_POST['rem_belakang'];
$suspensi_depan	  		= $_POST['suspensi_depan'];
$suspensi_belakang		= $_POST['suspensi_belakang'];
$warna					= $_POST['warna'];

$query = mysqli_query($koneksi, "UPDATE parts SET  id_mobil = '$id_mobil', id_type = '$id_type', velg = '$velg', steering = '$steering', ukuran_ban = '$ukuran_ban', rem_depan = '$rem_depan', rem_belakang = '$rem_belakang', suspensi_depan = '$suspensi_depan', suspensi_belakang = '$suspensi_belakang', warna = '$warna' WHERE no='$no'");
 
if ($query){
echo "<script>alert('Berhasil Mengupdate')</script>";
echo "<meta http-equiv='refresh' content='1 url=parts.php'>";
}else{
echo "<script>alert('Gagal Mengupdate')</script>";
echo "<meta http-equiv='refresh' content='1 url=parts.php'>";
}
?>