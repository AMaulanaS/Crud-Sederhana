<?php

	$host = "localhost";
	$user = "root";
	$pass = "";
	$name = "crud";
	$link = mysqli_connect($host,$user,$pass,$name);
	
	if(!$link){
		die ("Koneksi database gagal : ".mysql_connect_error()." - ".mysql_connect_error());
		}
?>

