<?php 
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'koneksi.php';

// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];


// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($konek,"SELECT * from pemilik WHERE username='$username' AND password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);
$data = mysqli_fetch_assoc($login);

// cek apakah username dan password di temukan pada database
if($cek > 0){

	

		$_SESSION['username'] = $data['username'];
		$_SESSION['password'] =$data['password'];
		$_SESSION['pesan']="login";
		
		header('location:halaman_utama_pemilik.php');

}else{
	header("location:login.php?pesan=gagal");
}

?>