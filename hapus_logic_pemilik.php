<?php
include "koneksi.php";
$id_kost=$_GET['id'];

$query = "DELETE FROM kost WHERE id_kost=$id_kost";
	$result = mysqli_query($konek,$query);
	if($result)
	{
		header("Location: halaman_utama_pemilik.php");
   		exit;
	} else {
		echo "Gagal Dihapus";
		header("Location: halaman_utama_pemilik.php");
	}
?>