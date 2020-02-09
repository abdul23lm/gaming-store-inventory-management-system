<?php
session_start();

$koneksi=mysqli_connect("localhost","root","","lm_games_store");
$email=$_POST["email"];
$password=$_POST["password"];
$query=mysqli_query($koneksi, "SELECT * FROM user_lgs WhERE email='$email' AND password='$password'") or die(mysqli_error($koneksi));

if ($data=mysqli_fetch_array($query)) {
	$_SESSION["email"]=$data["email"];
	$_SESSION["alert"]="Anda Berhasil Login";
	header("Location:../admin/index.php");
} else {
	$_SESSION["alert"]="Email Atau Password Salah";
	header("Location:login.php");
}
?>
