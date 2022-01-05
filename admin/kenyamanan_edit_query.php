<?php 
include "../koneksi/koneksi.php";
$no 		  			= $_POST['no'];
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

$query = mysqli_query($koneksi, "UPDATE kenyamanan SET  id_mobil = '$id_mobil', id_type = '$id_type', pendingin = '$pendingin', audio = '$audio', audio_belakang = '$audio_belakang', speaker = '$speaker', konsol_tengah = '$konsol_tengah', kontrol_iklim = '$kontrol_iklim', kontrol_perjalanan = '$kontrol_perjalanan', pengingat_kunci = '$pengingat_kunci', power_steering = '$power_steering', jendela_auto = '$jendela_auto', gps = '$gps', sabuk = '$sabuk', bahan_kursi = '$bahan_kursi', kaca_belakang_kabut = '$kaca_belakang_kabut', tilt_steering = '$tilt_steering' WHERE no='$no'");
 
if ($query){
echo "<script>alert('Berhasil Mengupdate')</script>";
echo "<meta http-equiv='refresh' content='1 url=kenyamanan.php'>";
}else{
echo "<script>alert('Gagal Mengupdate')</script>";
echo "<meta http-equiv='refresh' content='1 url=kenyamanan.php'>";
}
?>