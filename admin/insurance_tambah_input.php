<?php
include "../koneksi/koneksi.php";
if (isset($_POST['save']))
{
$nama = $_FILES['gambar']['name'];
$lokasi = $_FILES['gambar']['tmp_name'];
move_uploaded_file($lokasi, "images/insurance/".$nama);
$query = mysqli_query($koneksi, "INSERT INTO insurance (nama, nama_market, no_hp, alamat, kota, map, gambar) VALUES ('$_POST[nama]', '$_POST[nama_market]', '$_POST[no_hp]', '$_POST[alamat]', '$_POST[kota]', '$_POST[map]', '$nama')");

if ($query){
echo "<script>alert('Berhasil Menginput')</script>";
echo "<meta http-equiv='refresh' content='1 url=insurance.php'>";
}else{
echo "<script>alert('Gagal Menginput')</script>";
echo "<meta http-equiv='refresh' content='1 url=insurance_tambah.php'>";
}
}
?>