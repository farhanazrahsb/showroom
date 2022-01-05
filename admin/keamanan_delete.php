<?php
include "../koneksi/koneksi.php";
$no = $_GET['no'];
$query = mysqli_query($koneksi, "DELETE FROM keamanan WHERE no = '$no'");
header("location: keamanan.php");
?>