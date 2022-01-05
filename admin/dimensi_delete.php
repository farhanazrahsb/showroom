<?php
include "../koneksi/koneksi.php";
$no = $_GET['no'];
$query = mysqli_query($koneksi, "DELETE FROM dimensi WHERE no = '$no'");
header("location: dimensi.php");
?>