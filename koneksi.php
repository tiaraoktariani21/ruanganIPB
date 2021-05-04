<?php
	$host = 'localhost';
	$user = 'root';
	$pass = '';
	$db   = 'login';
	$conn = mysqli_connect($host,$user,$pass,$db);
	if(!$conn) {
		echo 'Gagal terhubung ke database';
	}
?>