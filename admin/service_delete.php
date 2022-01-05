<?php
include "../koneksi/koneksi.php";
$no = $_GET['no'];
$hapus = mysqli_query($koneksi, "SELECT * FROM service WHERE no = '$no'");
$nama_gambar = mysqli_fetch_array($hapus);
$lokasi = $nama_gambar['gambar'];
$hapus_gambar = "images/service/$lokasi";
unlink($hapus_gambar);
$query = mysqli_query($koneksi, "DELETE FROM service WHERE no = '$no'");
header("location: service.php");
?>