<?php 
include "../koneksi/koneksi.php";
$no 		  			= $_POST['no'];
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

$query = mysqli_query($koneksi, "UPDATE dimensi SET  id_mobil = '$id_mobil', id_type = '$id_type', berat_tanpa_muatan = '$berat_tanpa_muatan', berat_muatan = '$berat_muatan', jarak_depan = '$jarak_depan', jarak_rendah = '$jarak_rendah', jarak_belakang = '$jarak_belakang', kapasitas_tangki = '$kapasitas_tangki', kapasitas_penumpang = '$kapasitas_penumpang', radius = '$radius', panjang = '$panjang', tinggi = '$tinggi', lebar = '$lebar', sumbu_roda = '$sumbu_roda' WHERE no='$no'");
 
if ($query){
echo "<script>alert('Berhasil Mengupdate')</script>";
echo "<meta http-equiv='refresh' content='1 url=dimensi.php'>";
}else{
echo "<script>alert('Gagal Mengupdate')</script>";
echo "<meta http-equiv='refresh' content='1 url=dimensi.php'>";
}
?>