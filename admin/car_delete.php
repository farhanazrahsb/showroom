<?php
include "../koneksi/koneksi.php";
$no = $_GET['no'];
$hapus = mysqli_query($koneksi, "SELECT * FROM showroom WHERE no = '$no'");
$nama_gambar = mysqli_fetch_array($hapus);
$lokasi = $nama_gambar['gambar'];
$hapus_gambar = "images/showroom/$lokasi";
unlink($hapus_gambar);
$query = mysqli_query($koneksi, "DELETE FROM showroom WHERE no = '$no'");
header("location: car.php");
?>