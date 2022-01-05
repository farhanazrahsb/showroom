<?php
include "../koneksi/koneksi.php";
$no = $_GET['no'];
$query = mysqli_query($koneksi, "DELETE FROM transmisi WHERE no = '$no'");
header("location: transmisi.php");
?>