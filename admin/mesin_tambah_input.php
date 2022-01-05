<?php
include "../koneksi/koneksi.php";
if (isset($_POST['save']))
{
$id_mobil	  			= $_POST['id_mobil'];
$id_type	  			= $_POST['id_type'];
$diameter 	  	  		= $_POST['diameter'];
$kompresi	  	  		= $_POST['kompresi'];
$jumlah_silinder		= $_POST['jumlah_silinder'];
$kapasitas_silinder		= $_POST['kapasitas_silinder'];
$sistem_bbm		  		= $_POST['sistem_bbm'];
$bbm	  				= $_POST['bbm'];
$daya_maks		  		= $_POST['daya_maks'];
$torsi_maks			  	= $_POST['torsi_maks'];
$tipe_mesin		  		= $_POST['tipe_mesin'];
$penggerak_roda			= $_POST['penggerak_roda'];
 
$sql = mysqli_query($koneksi, "INSERT INTO mesin (id_mobil, id_type, diameter, kompresi, jumlah_silinder, kapasitas_silinder, sistem_bbm, bbm, daya_maks, torsi_maks, tipe_mesin, penggerak_roda) VALUES ('$id_mobil', '$id_type', '$diameter', '$kompresi', '$jumlah_silinder', '$kapasitas_silinder', '$sistem_bbm', '$bbm', '$daya_maks', '$torsi_maks', '$tipe_mesin', '$penggerak_roda')");
 
if ($sql == TRUE)
{
echo "<script>alert('Berhasil Menginput')</script>";
echo "<meta http-equiv='refresh' content='1 url=mesin.php'>";
}else{
echo "<script>alert('Gagal Menginput')</script>";
echo "<meta http-equiv='refresh' content='1 url=mesin_tambah.php'>";
}
}
?>