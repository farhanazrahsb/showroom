<?php
include "../koneksi/koneksi.php";
$no = $_GET['no'];
$query = mysqli_query($koneksi, "DELETE FROM interior WHERE no = '$no'");
header("location: interior.php");
?>