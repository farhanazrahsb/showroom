<?php
include "../koneksi/koneksi.php";
$no = $_GET['no'];
$query = mysqli_query($koneksi, "DELETE FROM profile WHERE no = '$no'");
header("location: company.php");
?>