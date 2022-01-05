<?php
session_start();
if(!isset($_SESSION["username"])){
echo "<script>alert('Anda harus login terlebih dahulu !')</script>";
echo "<script>window.location = 'index.php';</script>";
exit();
}
?>