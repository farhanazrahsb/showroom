<?php
include "../koneksi/koneksi.php";
$no = $_GET['no'];
$query = mysqli_query($koneksi, "DELETE FROM exterior WHERE no = '$no'");
header("location: exterior.php");
?>