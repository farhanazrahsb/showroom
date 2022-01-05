<?php 
include "../koneksi/koneksi.php";
$no 			= $_POST['no'];
$nama			= $_POST['nama'];
$username		= $_POST['username'];
$password 		= md5($_POST['password']);

$query = mysqli_query($koneksi, "UPDATE admin SET nama = '$nama', username = '$username', password = '$password' WHERE no='$no'");
 
if ($query){
echo "<script>alert('Berhasil Mengupdate')</script>";
echo "<meta http-equiv='refresh' content='1 url=admin.php'>";
}else{
echo "<script>alert('Gagal Mengupdate')</script>";
echo "<meta http-equiv='refresh' content='1 url=admin.php'>";
}
?>