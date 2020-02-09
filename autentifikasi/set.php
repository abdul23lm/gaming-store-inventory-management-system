<?php
session_start();
//proses menghapus data, ketika berhasil akan menyimpan alert
$_SESSION["alert"]="Data berhasil di hapus";
//redirect halaman
header("Location:index.php");

?>
