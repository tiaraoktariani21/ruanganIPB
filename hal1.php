
<?php
session_start();

$user = $_SESSION['username'];

echo "$user";

if (!isset($_SESSION['username'])){

	header('location:login.php');
}else{

	echo "Berhasil";
}

?>


<h1> Berhasil Login</h1>


<a bref="logout.php"> Logout </a>