<?php
include "../koneksi/koneksi.php";
$no = $_GET['no'];
$query = mysqli_query($koneksi, "DELETE FROM admin WHERE no = '$no'");
header("location: admin.php");
?>