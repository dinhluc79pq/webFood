<?php 
	$serverdb="localhost";
	$userdb="root";
	$passdb="";
	$namedb="web_ban_com";

	$mysqli = mysqli_connect($serverdb, $userdb, $passdb, $namedb) or die("Khong the ket noi co so du lieu.");
	mysqli_query($mysqli, "SET NAMES 'utf8'");
?>