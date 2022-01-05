<?php
include "../koneksi/koneksi.php";
if (isset($_POST['save']))
{
$id_mobil	  	= $_POST['id_mobil'];
$id_type	  	= $_POST['id_type'];
$gigi1 	  	  	= $_POST['gigi1'];
$gigi2	  	  	= $_POST['gigi2'];
$gigi3			= $_POST['gigi3'];
$gigi4			= $_POST['gigi4'];
$gigi5		  	= $_POST['gigi5'];
$gigi6	  		= $_POST['gigi6'];
$gigi7		  	= $_POST['gigi7'];
$gigi8			= $_POST['gigi8'];
$gigi_reverse	= $_POST['gigi_reverse'];
$gigi_akhir		= $_POST['gigi_akhir'];
 
$sql = mysqli_query($koneksi, "INSERT INTO transmisi (id_mobil, id_type, gigi1, gigi2, gigi3, gigi4, gigi5, gigi6, gigi7, gigi8, gigi_reverse, gigi_akhir) VALUES ('$id_mobil', '$id_type', '$gigi1', '$gigi2', '$gigi3', '$gigi4', '$gigi5', '$gigi6', '$gigi7', '$gigi8', '$gigi_reverse', '$gigi_akhir')");
 
if ($sql == TRUE)
{
echo "<script>alert('Berhasil Menginput')</script>";
echo "<meta http-equiv='refresh' content='1 url=transmisi.php'>";
}else{
echo "<script>alert('Gagal Menginput')</script>";
echo "<meta http-equiv='refresh' content='1 url=transmisi_tambah.php'>";
}
}
?>