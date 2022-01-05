<?php
include "../../koneksi/koneksi.php";

   $option = '<option value="">-- Type Mobil --</option>';
   
   $id_mobil = isset($_GET['id_mobil']) ?  $_GET['id_mobil'] :'';
   $sql ="SELECT * FROM showroom_detail WHERE id_mobil='".$id_mobil."'";
   if($res = $koneksi->query($sql)) {
      while ($row = $res->fetch_assoc()) {
        $option .= "<option value='".$row['id_type']."'>".$row['type']."</option>";
      }
   }
   echo $option;
?>