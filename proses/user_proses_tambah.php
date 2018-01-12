<?php
	session_start();
	if (isset($_SESSION['login'])) {
		
	include 'koneksi.php';
	
	$nama = isset($_POST['nama']) ? $_POST['nama'] : '';
	$email = isset($_POST['emial']) ? S_POST['email'] : '';
	$password = isset($_POST['password']) ? md5($_POST['password']) : '';
	
	if (!empty($nama) && !empty($email) && !empty($password)) {
		
		mysqli_query($connect, "INSERT INTO user VALUES (null, '$nama', '$email', '$password')");

		header("location:../user.php");
		
	} else {
		echo "siahkan lengkapi data </a href ='../user_tambah.php'> user </a>";
	}	
	
} else {
	
	echo "please <a href='../index.php'>login</a> first";
	
}	

?>		


		