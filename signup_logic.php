<?php
include "koneksi.php";
$id=$_POST['id'];
$username=$_POST['username'];
$password=$_POST['password'];
$contact=$_POST['contactperson'];
$namapemilik=$_POST['namapemilik'];


$query=mysqli_query($konek,"INSERT INTO pemilik values('','$namapemilik','$contact','$username','$password')");
if($query)
{
	header('location:login.php');
}
else
{
	header("location:login.php?pesan=gagaldaftar");
}


?>