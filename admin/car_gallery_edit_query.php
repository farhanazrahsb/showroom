<?php
include "../koneksi/koneksi.php";
$gambar   = $_FILES['gambar']['name'];

if (empty($gambar)) {
  $query = mysqli_query($koneksi, "UPDATE gallery SET id_mobil = '$_POST[id_mobil]', id_type = '$_POST[id_type]' WHERE no = '$_POST[no]'");
}else{
  $hapus = mysqli_query($koneksi, "SELECT * FROM gallery WHERE no = '$_POST[no]'");
  $nama_gambar = mysqli_fetch_array($hapus);
  $lokasi = $nama_gambar['gambar'];
  $hapus_gambar = "images/showroom_detail/$lokasi";
  unlink($hapus_gambar);
  move_uploaded_file($_FILES['gambar']['tmp_name'], 'images/showroom_detail/'.$gambar);
  $query = mysqli_query($koneksi, "UPDATE gallery SET id_mobil = '$_POST[id_mobil]', id_type = '$_POST[id_type]', gambar = '$gambar' WHERE no = '$_POST[no]'");
}

if ($query){
echo "<script>alert('Berhasil Mengupdate')</script>";
echo "<meta http-equiv='refresh' content='1 url=car_gallery.php'>";
}else{
echo "<script>alert('Gagal Mengupdate')</script>";
echo "<meta http-equiv='refresh' content='1 url=car_gallery.php'>";
}
?>