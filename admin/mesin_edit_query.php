<?php 
include "../koneksi/koneksi.php";
$no 		  			= $_POST['no'];
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

$query = mysqli_query($koneksi, "UPDATE mesin SET  id_mobil = '$id_mobil', id_type = '$id_type', diameter = '$diameter', kompresi = '$kompresi', jumlah_silinder = '$jumlah_silinder', kapasitas_silinder = '$kapasitas_silinder', sistem_bbm = '$sistem_bbm', bbm = '$bbm', daya_maks = '$daya_maks', torsi_maks = '$torsi_maks', tipe_mesin = '$tipe_mesin', penggerak_roda = '$penggerak_roda' WHERE no='$no'");
 
if ($query){
echo "<script>alert('Berhasil Mengupdate')</script>";
echo "<meta http-equiv='refresh' content='1 url=mesin.php'>";
}else{
echo "<script>alert('Gagal Mengupdate')</script>";
echo "<meta http-equiv='refresh' content='1 url=mesin.php'>";
}
?>