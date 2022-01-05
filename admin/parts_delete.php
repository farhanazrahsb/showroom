<?php
include "../koneksi/koneksi.php";
$no = $_GET['no'];
$query = mysqli_query($koneksi, "DELETE FROM parts WHERE no = '$no'");
header("location: parts.php");
?>