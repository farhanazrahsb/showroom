<?php
include "../koneksi/koneksi.php";
if (isset($_POST['save']))
{
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

$sql = mysqli_query($koneksi, "INSERT INTO parts (id_mobil, id_type, velg, steering, ukuran_ban, rem_depan, rem_belakang, suspensi_depan, suspensi_belakang, warna) VALUES ('$id_mobil', '$id_type', '$velg', '$steering', '$ukuran_ban', '$rem_depan', '$rem_belakang', '$suspensi_depan', '$suspensi_belakang', '$warna')");
 
if ($sql == TRUE)
{
echo "<script>alert('Berhasil Menginput')</script>";
echo "<meta http-equiv='refresh' content='1 url=parts.php'>";
}else{
echo "<script>alert('Gagal Menginput')</script>";
echo "<meta http-equiv='refresh' content='1 url=parts_tambah.php'>";
}
}
?>