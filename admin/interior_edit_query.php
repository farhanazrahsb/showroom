<?php 
include "../koneksi/koneksi.php";
$no 		  			= $_POST['no'];
$id_mobil	  			= $_POST['id_mobil'];
$id_type	  			= $_POST['id_type'];
$socket 	  	  		= $_POST['socket'];
$asbak	  	  			= $_POST['asbak'];
$saku_pintu				= $_POST['saku_pintu'];
$saku_belakang			= $_POST['saku_belakang'];
$foldable		  		= $_POST['foldable'];
$sandar_depan	  		= $_POST['sandar_depan'];
$sandar_belakang		= $_POST['sandar_belakang'];
$laci_dpn				= $_POST['laci_dpn'];
$spion_dlm				= $_POST['spion_dlm'];
$jok_kulit				= $_POST['jok_kulit'];
$kursi_belakang			= $_POST['kursi_belakang'];
$kursi_belakang_lipat	= $_POST['kursi_belakang_lipat'];
$kemudi					= $_POST['kemudi'];
$tachometer				= $_POST['tachometer'];
$kaca_hias				= $_POST['kaca_hias'];

$query = mysqli_query($koneksi, "UPDATE interior SET  id_mobil = '$id_mobil', id_type = '$id_type', socket = '$socket', asbak = '$asbak', saku_pintu = '$saku_pintu', saku_belakang = '$saku_belakang', foldable = '$foldable', sandar_depan = '$sandar_depan', sandar_belakang = '$sandar_belakang', laci_dpn = '$laci_dpn', spion_dlm = '$spion_dlm', jok_kulit = '$jok_kulit', kursi_belakang = '$kursi_belakang', kursi_belakang_lipat = '$kursi_belakang_lipat', kemudi = '$kemudi', tachometer = '$tachometer', kaca_hias = '$kaca_hias' WHERE no='$no'");
 
if ($query){
echo "<script>alert('Berhasil Mengupdate')</script>";
echo "<meta http-equiv='refresh' content='1 url=interior.php'>";
}else{
echo "<script>alert('Gagal Mengupdate')</script>";
echo "<meta http-equiv='refresh' content='1 url=interior.php'>";
}
?>