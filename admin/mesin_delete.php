<?php
include "../koneksi/koneksi.php";
$no = $_GET['no'];
$query = mysqli_query($koneksi, "DELETE FROM mesin WHERE no = '$no'");
header("location: mesin.php");
?>