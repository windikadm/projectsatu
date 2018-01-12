<?php

	include 'koneksi.php';
	
$email = $_POST ['email'];
$password = $_POST ['password'];

if (!empty($email) && !empty($password)) {
	$sql = mysqli_query($connect, "SELECT * FROM user WHERE email = '$email' AND password = '$password'");
	$result = mysqli_num_rows($sql);
	if ($result) {
		$rows = mysqli_fetch_array ($sql);
		session_start ();
		$_SESSION['login'] = true;
		$_SESSION['email'] = $email;
		$_SESSION['nama'] = $rows['nama'];
		$_SESSION['user_id'] = $rows['id'];
		header("location:../home.php");
	}else{
		echo "email dan password yang anda inputkan salah";
	}
	
	}else{
		echo "email dan password belum di inputkan";
}
	
?>