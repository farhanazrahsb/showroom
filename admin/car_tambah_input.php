<?php
include "../koneksi/koneksi.php";
if (isset($_POST['save']))
{
$nama = $_FILES['gambar']['name'];
$lokasi = $_FILES['gambar']['tmp_name'];
move_uploaded_file($lokasi, "images/showroom/".$nama);
$query = mysqli_query($koneksi, "INSERT INTO showroom (id_mobil, nama, jenis, cc, bbm, penumpang, harga, tentang, gambar) VALUES ('$_POST[id_mobil]', '$_POST[nama]', '$_POST[jenis]', '$_POST[cc]', '$_POST[bbm]', '$_POST[penumpang]', '$_POST[harga]', '$_POST[tentang]', '$nama')");

if ($query){
echo "<script>alert('Berhasil Menginput')</script>";
echo "<meta http-equiv='refresh' content='1 url=car.php'>";
}else{
echo "<script>alert('Gagal Menginput')</script>";
echo "<meta http-equiv='refresh' content='1 url=car_tambah.php'>";
}
}
?>