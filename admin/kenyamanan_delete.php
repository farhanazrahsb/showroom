<?php
include "../koneksi/koneksi.php";
$no = $_GET['no'];
$query = mysqli_query($koneksi, "DELETE FROM kenyamanan WHERE no = '$no'");
header("location: kenyamanan.php");
?>