<?php 
include "../koneksi/koneksi.php";
$no 			= $_POST['no'];
$nama			= $_POST['nama'];
$no_hp			= $_POST['no_hp'];
$email 	 		= $_POST['email'];
$alamat 		= $_POST['alamat'];

$query = mysqli_query($koneksi, "UPDATE profile SET nama = '$nama', no_hp = '$no_hp', email = '$email', alamat = '$alamat' WHERE no='$no'");
 
if ($query){
echo "<script>alert('Berhasil Mengupdate')</script>";
echo "<meta http-equiv='refresh' content='1 url=company.php'>";
}else{
echo "<script>alert('Gagal Mengupdate')</script>";
echo "<meta http-equiv='refresh' content='1 url=company.php'>";
}
?>