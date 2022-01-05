<?php
include "../koneksi/koneksi.php";
if(isset($_POST['pwg_id'])) {
	$pwg_id = trim($_POST['pwg_id']);
	$sql = "DELETE FROM visitor WHERE no in ($pwg_id)";
	$resultset = mysqli_query($koneksi, $sql) or die("database error:". mysqli_error($koneksi));
	echo $pwg_id;
}
?>