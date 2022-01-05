<?php
include "../koneksi/koneksi.php";
$gambar   = $_FILES['gambar']['name'];

if (empty($gambar)) {
  $query = mysqli_query($koneksi, "UPDATE service SET nama = '$_POST[nama]', no_hp = '$_POST[no_hp]', alamat = '$_POST[alamat]', kota = '$_POST[kota]', map = '$_POST[map]' WHERE no = '$_POST[no]'");
}else{
  $hapus = mysqli_query($koneksi, "SELECT * FROM service WHERE no = '$_POST[no]'");
  $nama_gambar = mysqli_fetch_array($hapus);
  $lokasi = $nama_gambar['gambar'];
  $hapus_gambar = "images/service/$lokasi";
  unlink($hapus_gambar);
  move_uploaded_file($_FILES['gambar']['tmp_name'], 'images/service/'.$gambar);
  $query = mysqli_query($koneksi, "UPDATE service SET nama = '$_POST[nama]', no_hp = '$_POST[no_hp]', alamat = '$_POST[alamat]', kota = '$_POST[kota]', map = '$_POST[map]', gambar = '$gambar' WHERE no = '$_POST[no]'");
}

if ($query){
echo "<script>alert('Berhasil Mengupdate')</script>";
echo "<meta http-equiv='refresh' content='1 url=service.php'>";
}else{
echo "<script>alert('Gagal Mengupdate')</script>";
echo "<meta http-equiv='refresh' content='1 url=service.php'>";
}
?>