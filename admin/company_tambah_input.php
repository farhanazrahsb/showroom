<?php
include "../koneksi/koneksi.php";
if (isset($_POST['save']))
{
$nama	  = $_POST['nama'];
$no_hp 	  = $_POST['no_hp'];
$email 	  = $_POST['email'];
$alamat	  = $_POST['alamat'];
 
$sql = mysqli_query($koneksi, "INSERT INTO profile (nama, no_hp, email, alamat) VALUES ('$nama', '$no_hp', '$email', '$alamat')");
 
if ($sql == TRUE)
{
echo "<script>alert('Berhasil Menginput')</script>";
echo "<meta http-equiv='refresh' content='1 url=company.php'>";
}else{
echo "<script>alert('Gagal Menginput')</script>";
echo "<meta http-equiv='refresh' content='1 url=company_tambah.php'>";
}
}
?>