<?php
include "../koneksi/koneksi.php";
$no = $_GET['no'];
$query = mysqli_query($koneksi, "DELETE FROM showroom_detail WHERE no = '$no'");
header("location: car_type.php");
?>