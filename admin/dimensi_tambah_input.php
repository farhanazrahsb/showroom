<?php
include "../koneksi/koneksi.php";
if (isset($_POST['save']))
{
$id_mobil	  			= $_POST['id_mobil'];
$id_type	  			= $_POST['id_type'];
$berat_tanpa_muatan 	= $_POST['berat_tanpa_muatan'];
$berat_muatan	  	  	= $_POST['berat_muatan'];
$jarak_depan			= $_POST['jarak_depan'];
$jarak_rendah			= $_POST['jarak_rendah'];
$jarak_belakang		  	= $_POST['jarak_belakang'];
$kapasitas_tangki	  	= $_POST['kapasitas_tangki'];
$kapasitas_penumpang	= $_POST['kapasitas_penumpang'];
$radius					= $_POST['radius'];
$panjang				= $_POST['panjang'];
$tinggi					= $_POST['tinggi'];
$lebar					= $_POST['lebar'];
$sumbu_roda				= $_POST['sumbu_roda'];
 
$sql = mysqli_query($koneksi, "INSERT INTO dimensi (id_mobil, id_type, berat_tanpa_muatan, berat_muatan, jarak_depan, jarak_rendah, jarak_belakang, kapasitas_tangki, kapasitas_penumpang, radius, panjang, tinggi, lebar, sumbu_roda) VALUES ('$id_mobil', '$id_type', '$berat_tanpa_muatan', '$berat_muatan', '$jarak_depan', '$jarak_rendah', '$jarak_belakang', '$kapasitas_tangki', '$kapasitas_penumpang', '$radius', '$panjang', '$tinggi', '$lebar', '$sumbu_roda')");
 
if ($sql == TRUE)
{
echo "<script>alert('Berhasil Menginput')</script>";
echo "<meta http-equiv='refresh' content='1 url=dimensi.php'>";
}else{
echo "<script>alert('Gagal Menginput')</script>";
echo "<meta http-equiv='refresh' content='1 url=dimensi_tambah.php'>";
}
}
?>