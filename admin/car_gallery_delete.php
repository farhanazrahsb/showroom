<?php
include "../koneksi/koneksi.php";
$no = $_GET['no'];
$hapus = mysqli_query($koneksi, "SELECT * FROM gallery WHERE no = '$no'");
$nama_gambar = mysqli_fetch_array($hapus);
$lokasi = $nama_gambar['gambar'];
$hapus_gambar = "images/showroom_detail/$lokasi";
unlink($hapus_gambar);
$query = mysqli_query($koneksi, "DELETE FROM gallery WHERE no = '$no'");
header("location: car_gallery.php");
?>