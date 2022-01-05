<?php 
include "../koneksi/koneksi.php";
$no 		  	= $_POST['no'];
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

$query = mysqli_query($koneksi, "UPDATE transmisi SET  id_mobil = '$id_mobil', id_type = '$id_type', gigi1 = '$gigi1', gigi2 = '$gigi2', gigi3 = '$gigi3', gigi4 = '$gigi4', gigi5 = '$gigi5', gigi6 = '$gigi6', gigi7 = '$gigi7', gigi8 = '$gigi8', gigi_reverse = '$gigi_reverse', gigi_akhir = '$gigi_akhir' WHERE no='$no'");
 
if ($query){
echo "<script>alert('Berhasil Mengupdate')</script>";
echo "<meta http-equiv='refresh' content='1 url=transmisi.php'>";
}else{
echo "<script>alert('Gagal Mengupdate')</script>";
echo "<meta http-equiv='refresh' content='1 url=transmisi.php'>";
}
?>