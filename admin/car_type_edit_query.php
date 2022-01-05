<?php 
include "../koneksi/koneksi.php";
$no 		  = $_POST['no'];
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

$query = mysqli_query($koneksi, "UPDATE showroom_detail SET id_type = '$id_type', id_mobil = '$id_mobil', type = '$type', jenis = '$jenis', cc = '$cc', bbm = '$bbm', penumpang = '$penumpang', harga = '$harga', dp = '$dp', cicil = '$cicil', jangka_waktu = '$jangka_waktu', status = '$status' WHERE no='$no'");
 
if ($query){
echo "<script>alert('Berhasil Mengupdate')</script>";
echo "<meta http-equiv='refresh' content='1 url=car_type.php'>";
}else{
echo "<script>alert('Gagal Mengupdate')</script>";
echo "<meta http-equiv='refresh' content='1 url=car_type.php'>";
}
?>