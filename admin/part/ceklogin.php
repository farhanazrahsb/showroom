<?php 
session_start();
include "../../koneksi/koneksi.php";
$username = $_POST['username'];
$password = md5($_POST['password']);
$query = mysqli_query($koneksi, "SELECT * FROM admin WHERE username = '$username' AND password = '$password'");
$cek = mysqli_num_rows($query);
 
if($cek > 0){
	$_SESSION['username'] = $username;
echo "<script>alert('Selamat Datang !')</script>";
echo "<script>window.location = '../dashboard.php';</script>";
}
else {
echo "<script>alert('Login gagal, periksa username dan password anda !')</script>";
echo "<meta http-equiv='refresh' content='1 url = ../index.php'>";
}
?>