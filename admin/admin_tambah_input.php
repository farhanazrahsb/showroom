<?php
include "../koneksi/koneksi.php";
if (isset($_POST['save']))
{
$nama	  = $_POST['nama'];
$username = $_POST['username'];
$password = md5($_POST['password']);
 
$sql = mysqli_query($koneksi, "INSERT INTO admin (nama, username, password) VALUES ('$nama', '$username', '$password')");
 
if ($sql == TRUE)
{
echo "<script>alert('Berhasil Menginput')</script>";
echo "<meta http-equiv='refresh' content='1 url=admin.php'>";
}else{
echo "<script>alert('Gagal Menginput')</script>";
echo "<meta http-equiv='refresh' content='1 url=admin_tambah.php'>";
}
}
?>