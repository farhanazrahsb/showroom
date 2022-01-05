<?php
include "../koneksi/koneksi.php";
if (isset($_POST['save']))
{
$id_mobil	  			= $_POST['id_mobil'];
$id_type	  			= $_POST['id_type'];
$pendingin 				= $_POST['pendingin'];
$audio	  	  			= $_POST['audio'];
$audio_belakang			= $_POST['audio_belakang'];
$speaker				= $_POST['speaker'];
$konsol_tengah		  	= $_POST['konsol_tengah'];
$kontrol_iklim	  		= $_POST['kontrol_iklim'];
$kontrol_perjalanan		= $_POST['kontrol_perjalanan'];
$pengingat_kunci		= $_POST['pengingat_kunci'];
$power_steering			= $_POST['power_steering'];
$jendela_auto			= $_POST['jendela_auto'];
$gps					= $_POST['gps'];
$sabuk					= $_POST['sabuk'];
$bahan_kursi			= $_POST['bahan_kursi'];
$kaca_belakang_kabut	= $_POST['kaca_belakang_kabut'];
$tilt_steering			= $_POST['tilt_steering'];
 
$sql = mysqli_query($koneksi, "INSERT INTO kenyamanan (id_mobil, id_type, pendingin, audio, audio_belakang, speaker, konsol_tengah, kontrol_iklim, kontrol_perjalanan, pengingat_kunci, power_steering, jendela_auto, gps, sabuk, bahan_kursi, kaca_belakang_kabut, tilt_steering) VALUES ('$id_mobil', '$id_type', '$pendingin', '$audio', '$audio_belakang', '$speaker', '$konsol_tengah', '$kontrol_iklim', '$kontrol_perjalanan', '$pengingat_kunci', '$power_steering', '$jendela_auto', '$gps', '$sabuk', '$bahan_kursi', '$kaca_belakang_kabut', '$tilt_steering')");
 
if ($sql == TRUE)
{
echo "<script>alert('Berhasil Menginput')</script>";
echo "<meta http-equiv='refresh' content='1 url=kenyamanan.php'>";
}else{
echo "<script>alert('Gagal Menginput')</script>";
echo "<meta http-equiv='refresh' content='1 url=kenyamanan_tambah.php'>";
}
}
?>