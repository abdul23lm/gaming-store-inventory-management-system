<?php

if(empty($_SESSION["email"])) {
	$_SESSION["alert"]="anda harus login dulu";
	header("Location:login.php");
}

?>
