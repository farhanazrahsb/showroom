<?php
include "../koneksi/koneksi.php";
if (isset($_POST['save']))
{
$id_type	  = $_POST['id_type'];
$id_mobil	  = $_POST['id_mobil'];
$type 	  	  = $_POST['type'];
$jenis	  	  = $_POST['jenis'];
$cc			  = $_POST['cc'];
$bbm		  = $_POST['bbm'];
$penumpang	  = $_POST['penumpang'];
$harga		  = $_POST['harga'];
$dp			  = $_POST['dp'];
$cicil		  = $_POST['cicil'];
$jangka_waktu = $_POST['jangka_waktu'];
$status		  = $_POST['status'];
 
$sql = mysqli_query($koneksi, "INSERT INTO showroom_detail (id_type, id_mobil, type, jenis, cc, bbm, penumpang, harga, dp, cicil, jangka_waktu, status) VALUES ('$id_type', '$id_mobil', '$type', '$jenis', '$cc', '$bbm', '$penumpang', '$harga', '$dp', '$cicil', '$jangka_waktu', '$status')");
 
if ($sql == TRUE)
{
echo "<script>alert('Berhasil Menginput')</script>";
echo "<meta http-equiv='refresh' content='1 url=car_type.php'>";
}else{
echo "<script>alert('Gagal Menginput')</script>";
echo "<meta http-equiv='refresh' content='1 url=car_type_tambah.php'>";
}
}
?>