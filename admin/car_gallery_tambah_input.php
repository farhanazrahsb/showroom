<?php
include "../koneksi/koneksi.php";
if (isset($_POST['save']))
{
$nama = $_FILES['gambar']['name'];
$lokasi = $_FILES['gambar']['tmp_name'];
move_uploaded_file($lokasi, "images/showroom_detail/".$nama);
$query = mysqli_query($koneksi, "INSERT INTO gallery (id_mobil, id_type, gambar) VALUES ('$_POST[id_mobil]', '$_POST[id_type]', '$nama')");

if ($query){
echo "<script>alert('Berhasil Menginput')</script>";
echo "<meta http-equiv='refresh' content='1 url=car_gallery.php'>";
}else{
echo "<script>alert('Gagal Menginput')</script>";
echo "<meta http-equiv='refresh' content='1 url=car_gallery_tambah.php'>";
}
}
?>