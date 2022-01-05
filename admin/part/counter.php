<?php
include "koneksi/koneksi.php";
date_default_timezone_set('Asia/Jakarta');
$ip 		= $_SERVER['REMOTE_ADDR']; // Mengambil IP
$tanggal 	= date("l, d-m-Y / H:i"); // Mengambil tanggal
$waktu 		= time(); // mengambil waktu
 
$query1 = mysqli_query($koneksi, "SELECT * FROM visitor WHERE ip = '$ip' AND tanggal = '$tanggal'");
 
if(mysqli_num_rows($query1) == 0){
 $ins = mysqli_query($koneksi, "INSERT INTO visitor (ip,tanggal,hits,online) VALUES ('$ip','$tanggal','1','$waktu')");
}else{
 $upd = mysqli_query($koneksi, "UPDATE visitor SET hits = hits+1, online = $waktu WHERE ip = '$ip' AND tanggal = '$tanggal'");
}
 
// pengunjung hari ini
$query1 = mysqli_query($koneksi, "SELECT * FROM visitor WHERE tanggal = '$tanggal' GROUP BY ip");
$pengunjung = mysqli_num_rows($query1);
 
// Total Pengunjung
$query2 = mysqli_query($koneksi, "SELECT count(hits) AS total FROM visitor");
$hasil2 = mysqli_fetch_array($query2);
$totPengunjung = $hasil2['total'];
 
// Hits hari ini
$query3 = mysqli_query($koneksi, "SELECT sum(hits) AS jumlah FROM visitor WHERE tanggal = '$tanggal' GROUP BY tanggal ");
$hasil3 = mysqli_fetch_array($query3);
$hits = $hasil3['jumlah'];
 
// Total hits
$query4 = mysqli_query($koneksi, "SELECT sum(hits) AS total FROM visitor");
$hasil4 = mysqli_fetch_array($query4);
$totHits = $hasil4['total'];
 
// Pengunjung yang sedang online
$bataswaktu = time()-300;
$pengunjungOnline = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM visitor WHERE online > $bataswaktu"));
?>