<?php
include "../koneksi/koneksi.php";
$gambar   = $_FILES['gambar']['name'];

if (empty($gambar)) {
  $query = mysqli_query($koneksi, "UPDATE showroom SET nama = '$_POST[nama]', jenis = '$_POST[jenis]', cc = '$_POST[cc]', bbm = '$_POST[bbm]', penumpang = '$_POST[penumpang]', harga = '$_POST[harga]', tentang = '$_POST[tentang]' WHERE no = '$_POST[no]'");
}else{
  $hapus = mysqli_query($koneksi, "SELECT * FROM showroom WHERE no = '$_POST[no]'");
  $nama_gambar = mysqli_fetch_array($hapus);
  $lokasi = $nama_gambar['gambar'];
  $hapus_gambar = "images/showroom/$lokasi";
  unlink($hapus_gambar);
  move_uploaded_file($_FILES['gambar']['tmp_name'], 'images/showroom/'.$gambar);
  $query = mysqli_query($koneksi, "UPDATE showroom SET nama = '$_POST[nama]', jenis = '$_POST[jenis]', cc = '$_POST[cc]', bbm = '$_POST[bbm]', penumpang = '$_POST[penumpang]', harga = '$_POST[harga]', tentang = '$_POST[tentang]', gambar = '$gambar' WHERE no = '$_POST[no]'");
}

if ($query){
echo "<script>alert('Berhasil Mengupdate')</script>";
echo "<meta http-equiv='refresh' content='1 url=car.php'>";
}else{
echo "<script>alert('Gagal Mengupdate')</script>";
echo "<meta http-equiv='refresh' content='1 url=car.php'>";
}
?>