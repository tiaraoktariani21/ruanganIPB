<!DOCTYPE html>
<html>
	<head>
		<title>Halaman Login</title>
	</head>
	<body>
		<h2>Login dengan Akun IPB</h2>
		<form action="" method="POST">
			Email<br>
			<input type="text" name="email" /><br>
			Password<br>
			<input type="password" name="password" /><br><br>
			<input type="submit" name="login" value="Login" /><br>
		</form>
		<?php
			include 'koneksi.php';
			if(isset($_POST['login'])){
				$user = $_POST['email'];
				$pass = $_POST['password'];
				$data_user = mysqli_query($conn, "SELECT * FROM user WHERE email = '$user' AND password = '$pass'");
				$result = mysqli_fetch_array($data_user);
				$mail = $result['email'];
				$pw = $result['password'];
				if($user == $mail && $pass == $pw){
					echo 'Berhasil login';
				}else{
					echo 'Email atau Password Salah';
				}
			}
		?>
	</body>
</html>